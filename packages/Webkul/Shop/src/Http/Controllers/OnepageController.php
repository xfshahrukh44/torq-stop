<?php

namespace Webkul\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Stripe\Stripe;
use Webkul\Checkout\Facades\Cart;
use Webkul\Checkout\Http\Requests\CustomerAddressForm;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Payment\Facades\Payment;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Shipping\Facades\Shipping;
use Webkul\Shop\Http\Controllers\Controller;
//use Cart;

class OnepageController extends Controller
{
    /**
     * Order repository instance.
     *
     * @var \Webkul\Sales\Repositories\OrderRepository
     */
    protected $orderRepository;

    /**
     * Customer repository instance.
     *
     * @var \Webkul\Customer\Repositories\CustomerRepository
     */
    protected $customerRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Attribute\Repositories\OrderRepository  $orderRepository
     * @param  \Webkul\Customer\Repositories\CustomerRepository  $customerRepository
     * @return void
     */
    public function __construct(
        OrderRepository $orderRepository,
        CustomerRepository $customerRepository
    ) {
        $this->orderRepository = $orderRepository;

        $this->customerRepository = $customerRepository;

        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
//        Event::dispatch('checkout.load.index');
//
//        if (! auth()->guard('customer')->check() && ! core()->getConfigData('catalog.products.guest-checkout.allow-guest-checkout')) {
//            return redirect()->route('customer.session.index');
//        }
//
//        if (auth()->guard('customer')->check() && auth()->guard('customer')->user()->is_suspended) {
//            session()->flash('warning', trans('shop::app.checkout.cart.suspended-account-message'));
//
//            return redirect()->route('shop.checkout.cart.index');
//        }
//
//        if (Cart::hasError()) {
//            return redirect()->route('shop.checkout.cart.index');
//        }
//
//        $cart = Cart::getCart();
//
//        if (
//            (! auth()->guard('customer')->check() && $cart->hasDownloadableItems())
//            || (! auth()->guard('customer')->check() && ! $cart->hasGuestCheckoutItems())
//        ) {
//            return redirect()->route('customer.session.index');
//        }
//
//        $minimumOrderAmount = (float) core()->getConfigData('sales.orderSettings.minimum-order.minimum_order_amount') ?? 0;
//
//        if (! $cart->checkMinimumOrder()) {
//            session()->flash('warning', trans('shop::app.checkout.cart.minimum-order-message', ['amount' => core()->currency($minimumOrderAmount)]));
//
//            return redirect()->back();
//        }
//
//        Cart::collectTotals();
//
//        return view($this->_config['view'], compact('cart'));

        //new approach
        $cart = Cart::getCart();
        Cart::collectTotals();
        $shippingRate = Shipping::collectRates();
        $shippingMethods = [];
        if($shippingRate) {
            $shippingMethods = $shippingRate['shippingMethods']['free']['rates'][0];
        }
        return view($this->_config['view'], compact('cart', 'shippingMethods'));
    }

    /**
     * Return order short summary.
     *
     * @return \Illuminate\Http\Response
     */
    public function summary()
    {
        $cart = Cart::getCart();

        return response()->json([
            'html' => view('shop::checkout.total.summary', compact('cart'))->render(),
        ]);
    }

    /**
     * Saves customer address.
     *
     * @param  \Webkul\Checkout\Http\Requests\CustomerAddressForm  $request
     * @return \Illuminate\Http\Response
     */
    public function saveAddress(CustomerAddressForm $request)
    {
        $data = $request->all();

        if (! auth()->guard('customer')->check() && ! Cart::getCart()->hasGuestCheckoutItems()) {
            return response()->json(['redirect_url' => route('customer.session.index')], 403);
        }

        $data['billing']['address1'] = implode(PHP_EOL, array_filter($data['billing']['address1']));
        $data['shipping']['address1'] = implode(PHP_EOL, array_filter($data['shipping']['address1']));

        if (Cart::hasError() || ! Cart::saveCustomerAddress($data)) {
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);
        }

        $cart = Cart::getCart();

        Cart::collectTotals();

        if ($cart->haveStockableItems()) {
            if (! $rates = Shipping::collectRates()) {
                return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);
            }

            return response()->json($rates);
        }

        return response()->json(Payment::getSupportedPaymentMethods());
    }

    /**
     * Saves shipping method.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveShipping()
    {
        $shippingMethod = request()->get('shipping_method');

        if (Cart::hasError() || ! $shippingMethod || ! Cart::saveShippingMethod($shippingMethod)) {
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);
        }

        Cart::collectTotals();

        return response()->json(Payment::getSupportedPaymentMethods());
    }

    /**
     * Saves payment method.
     *
     * @return \Illuminate\Http\Response
     */
    public function savePayment()
    {
        $payment = request()->get('payment');

        if (Cart::hasError() || ! $payment || ! Cart::savePaymentMethod($payment)) {
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);
        }

        Cart::collectTotals();

        $cart = Cart::getCart();

        return response()->json([
            'jump_to_section' => 'review',
            'html'            => view('shop::checkout.onepage.review', compact('cart'))->render(),
        ]);
    }

    /**
     * Saves order.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveOrder()
    {
        if (Cart::hasError()) {
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);
        }

        Cart::collectTotals();

        $this->validateOrder();

        $cart = Cart::getCart();

        if ($redirectUrl = Payment::getRedirectUrl($cart)) {
            return response()->json([
                'success'      => true,
                'redirect_url' => $redirectUrl,
            ]);
        }

        $order = $this->orderRepository->create(Cart::prepareDataForOrder());

        Cart::deActivateCart();

        Cart::activateCartIfSessionHasDeactivatedCartId();

        session()->flash('order', $order);

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Order success page.
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        if (! $order = session('order')) {
            return redirect()->route('shop.checkout.cart.index');
        }

        return view($this->_config['view'], compact('order'));
    }

    /**
     * Validate order before creation.
     *
     * @return void|\Exception
     */
    public function validateOrder()
    {
        $cart = Cart::getCart();

        $minimumOrderAmount = core()->getConfigData('sales.orderSettings.minimum-order.minimum_order_amount') ?? 0;

        if (auth()->guard('customer')->check() && auth()->guard('customer')->user()->is_suspended) {
            throw new \Exception(trans('shop::app.checkout.cart.suspended-account-message'));
        }

        if (! $cart->checkMinimumOrder()) {
            throw new \Exception(trans('shop::app.checkout.cart.minimum-order-message', ['amount' => core()->currency($minimumOrderAmount)]));
        }

//        if ($cart->haveStockableItems() && ! $cart->shipping_address) {
//            throw new \Exception(trans('shop::app.checkout.cart.check-shipping-address'));
//        }

//        if (! $cart->billing_address) {
//            throw new \Exception(trans('shop::app.checkout.cart.check-billing-address'));
//        }

//        if ($cart->haveStockableItems() && ! $cart->selected_shipping_rate) {
//        if ($cart->haveStockableItems()) {
//            throw new \Exception(trans('shop::app.checkout.cart.specify-shipping-method'));
//        }

        if (! $cart->payment) {
            throw new \Exception(trans('shop::app.checkout.cart.specify-payment-method'));
        }


    }

    /**
     * Check customer is exist or not.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkExistCustomer()
    {
        $customer = $this->customerRepository->findOneWhere([
            'email' => request()->email,
        ]);

        if (! is_null($customer)) {
            return 'true';
        }

        return 'false';
    }

    /**
     * Login for checkout.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForCheckout()
    {
        $this->validate(request(), [
            'email' => 'required|email',
        ]);

        if (! auth()->guard('customer')->attempt(request(['email', 'password']))) {
            return response()->json(['error' => trans('shop::app.customer.login-form.invalid-creds')]);
        }

        Cart::mergeCart();

        return response()->json(['success' => 'Login successfully']);
    }

    /**
     * To apply couponable rule requested.
     *
     * @return \Illuminate\Http\Response
     */
    public function applyCoupon()
    {
        $this->validate(request(), [
            'code' => 'string|required',
        ]);

        $code = request()->input('code');

        $result = $this->coupon->apply($code);

        if ($result) {
            Cart::collectTotals();

            return response()->json([
                'success' => true,
                'message' => trans('shop::app.checkout.total.coupon-applied'),
                'result'  => $result,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => trans('shop::app.checkout.total.cannot-apply-coupon'),
            'result'  => null,
        ], 422);
    }

    /**
     * Initiates the removal of couponable cart rule.
     *
     * @return array
     */
    public function removeCoupon()
    {
        $result = $this->coupon->remove();

        if ($result) {
            Cart::collectTotals();

            return response()->json([
                'success' => true,
                'message' => trans('admin::app.promotion.status.coupon-removed'),
                'data'    => [
                    'grand_total' => core()->currency(Cart::getCart()->grand_total),
                ],
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => trans('admin::app.promotion.status.coupon-remove-failed'),
            'data'    => null,
        ], 422);
    }

    /**
     * Check for minimum order.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkMinimumOrder()
    {
        $minimumOrderAmount = (float) core()->getConfigData('sales.orderSettings.minimum-order.minimum_order_amount') ?? 0;

        $status = Cart::checkMinimumOrder();

        return response()->json([
            'status'  => ! $status ? false : true,
            'message' => ! $status ? trans('shop::app.checkout.cart.minimum-order-message', ['amount' => core()->currency($minimumOrderAmount)]) : 'Success',
        ]);
    }

    public function proceedToCheckOut(Request $request)
    {
        $this->validate(request(), [
            'first_name' => 'required_without:paypal|min:3|max:50',
            'last_name' => 'required_without:paypal|min:3|max:50',
            'email' => 'required_without:paypal|email',
            request()->has('box-1') ? 'password' : '' => request()->has('box-1') ? 'required_without:paypal|confirmed|min:6' : '',
            'phone' => 'required_without:paypal',
        ]);

        //create printful order
        $result = $this->createPrintfulOrder($request);

//        if ($result->code != 200) {
//            return redirect()->back()->with('error', $result->result);
//        }

        $data = $request->except('_token');

        $data['billing']['address1'] = $request->address;
//        $data['shipping']['address1'] = request()->has('box-2') ? $request->address : $request->ship_address;
        $data['method'] = $request->payment_method;
        session()->put('formData', $data);
//        if (!Cart::saveCustomerAddress($data)) {
//            return redirect()->back()->with(['error' => 'Something went wrong while saving the address.']);
//        }

//        if (!Cart::saveShippingMethod($request->shipping_method)) {
//            return redirect()->back()->with(['error' => 'Something went wrong while saving the shipping method.']);
//        }

        if (!Cart::savePaymentMethod($data)) {
            return redirect()->back()->with(['error' => 'Something went wrong while saving the payment.']);
        }

        if ($this->checkExistCustomer() === 'true') {
            $this->validateOrder();

            //if payment from paypal
            if ($request->has('paypal')) {
                return redirect(route('shop.checkout.success'));
            }

//            Cart::deActivateCart();

            return redirect($this->redirectLink());
            //$order = $this->orderRepository->create(Cart::prepareDataForOrder($data));
        } else {
            $req = $request->all();
            $req['password'] = Hash::make($req['password']);
            $this->customerRepository->create($req);
            $this->validateOrder();

            //if payment from paypal
            if ($request->has('paypal')) {
                return redirect(route('shop.checkout.success'));
            }



            return redirect($this->redirectLink());
            //$order = $this->orderRepository->create(Cart::prepareDataForOrder($data));
        }

//        session()->put('order', $order);
//        Cart::deActivateCart();
//        Cart::activateCartIfSessionHasDeactivatedCartId();
//        return redirect()->route('shop.checkout.success');
    }

    public function redirectLink()
    {
        $cart = Cart::getCart();
        $billingAddress = $cart->billing_address;

//        Stripe::setApiKey(core()->getConfigData('sales.paymentmethods.stripe.stripe_api_key'));
        Stripe::setApiKey(get_stripe_secret_key());

        $shipping_rate = $cart->selected_shipping_rate ? $cart->selected_shipping_rate->price : 0;
        $discount_amount = $cart->discount_amount;
        $total_amount = ($cart->sub_total + $cart->tax_total + $shipping_rate) - $discount_amount;

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => $cart->global_currency_code,
                    'product_data' => [
                        'name' => 'Stripe Checkout Payment order id - ' . $cart->id,
                    ],
                    'unit_amount' => $total_amount * 100,
                ],
                'quantity' => 1,
            ]],
            'payment_method_types' => [
                'card'
            ],
            'customer_email' => request()->email,
            'mode' => 'payment',
            'success_url' => route('shop.checkout.success'),
            'cancel_url' => route('shop.checkout.cancel'),
        ]);
        Cart::deActivateCart();
        return $checkoutSession->url;
    }
    /**
     * failure
     */
    public function failure()
    {
        session()->flash('error', 'Stripe payment either cancelled or transaction failure.');
        return redirect()->route('shop.checkout.cart.index');
    }
    /**
     * Prepares order's invoice data for creation.
     *
     * @return array
     */
    protected function prepareInvoiceData($order)
    {
        $invoiceData = ["order_id" => $order->id,];
        foreach ($order->items as $item) {
            $invoiceData['invoice']['items'][$item->id] = $item->qty_to_invoice;
        }
        return $invoiceData;
    }
    public function createPrintfulOrder (Request $request)
    {
        $cart = Cart::getCart();
        $items = [];
        foreach ($cart->items as $item) {
            $items []= [
                'variant_id' => 1,
                'quantity' => $item->quantity,
                "name" => $item->name,
                "retail_price" => $item->total,
                'files' => [
                    [
                        'id' => '546674817',
                    ],
                ],
            ];
        }

        $payload = [
            'recipient' => [
//                'address1' => '12 st',
//                'city' => 'asd',
//                'state_code' => 'NY',
//                'country_code' => 'US',
//                'zip' => '10001',
                'name' => (($request->first_name . ' ') ?? '') . ($request->last_name ?? ''),
                'address1' => $request->address,
                'city' => $request->city,
                'state_code' => $request->state,
                'country_code' => $request->country,
                'zip' => $request->zip_code,
            ],
            'items' => $items,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.printful.com/orders');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

        $headers = array();
        $headers[] = 'Authorization: Bearer ZakAEMSh6g4i7L8rEsBfGQ9YlWBwT3n9Ct543pvT';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'X-PF-Store-Id: 10328173';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return false;
//            return redirect()->back()->with('error', $ch);
//            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return json_decode($result);
    }
}

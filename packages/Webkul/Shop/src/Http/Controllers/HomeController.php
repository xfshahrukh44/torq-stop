<?php

namespace Webkul\Shop\Http\Controllers;
//use Cart;
use Webkul\Checkout\Facades\Cart;
use App\Models\CustomerReview;
use App\Models\Customers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\ProductCategoryField;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\CMS\Models\CmsPageTranslation;
use Webkul\Customer\Models\Customer;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Shop\Http\Controllers\Controller;
use Webkul\Core\Repositories\SliderRepository;
use Webkul\Product\Repositories\SearchRepository;

class HomeController extends Controller
{


    /**
     * Slider repository instance.
     *
     * @var \Webkul\Core\Repositories\SliderRepository
     */
    protected $sliderRepository;

    /**
     * Search repository instance.
     *
     * @var \Webkul\Core\Repositories\SearchRepository
     */
    protected $searchRepository;

    protected $categoryRepository;

    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param \Webkul\Core\Repositories\SliderRepository $sliderRepository
     * @param \Webkul\Product\Repositories\SearchRepository $searchRepository
     * @return void
     */
    public function __construct(
        SliderRepository $sliderRepository,
        SearchRepository $searchRepository,
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository
    )
    {
        $this->sliderRepository = $sliderRepository;

        $this->searchRepository = $searchRepository;

        $this->categoryRepository = $categoryRepository;

        $this->productRepository = $productRepository;

        parent::__construct();
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function index($id)
    {
//        dd('here');
        $sliderData = $this->sliderRepository->getActiveSliders();
        $home = CmsPageTranslation::where('page_title', 'CMS_PAGE')->first();

        return view('shop::index2', compact('sliderData', 'home'));

        return view($this->_config['view'], compact('sliderData'));
    }

    public function about()
    {
        $about = CmsPageTranslation::where('page_title', 'CMS_PAGE')->first();
        return view('shop::about', compact('about'));
    }

    public function myAccount()
    {
        return view('shop::my-account');
    }

    public function categories()
    {
        return view('shop::categories');
    }

    public function contact()
    {
        $contact = CmsPageTranslation::where('page_title', 'CMS_PAGE')->first();
        return view('shop::contact', compact('contact'));
    }

    public function dfw()
    {
        return view('shop::dfw');
    }

    public function productDetail(Request $request, $id)
    {
        $product = $this->productRepository->findById($id);
        $categories = $product->product_categories->toArray() ?? [];
        $images = $product->images->toArray() ?? [];
        $feature_image = $images[0] ?? null;
        $product = $product->toArray();
        $product['categories'] = $categories;
        $product['feature_image'] = $feature_image;
        $product['images'] = $images;
//        $qty = $product['inventory_sources'][0]['pivot']['qty'];
//        dd($qty);

        return view('shop::product_detail', compact('product'));
    }

    public function profile()
    {
        return view('shop::profile');
    }

    public function reviews()
    {
        return view('shop::reviews');
    }

    public function shop(Request $request)
    {
//        dd($request->all());
        //init data
        $name = null;
        $category_id = null;
        $year = null;
        $make = null;
        $model = null;

        //prep data
        if ($request->method() == 'POST') {
            $name = $request->name;
            $year = $request->year;
            $make = $request->make;
            $model = $request->model;
        }

        $data = [
            'name' => $name,
            'category_id' => $category_id,
            'year' => $year,
            'make' => $make,
            'model' => $model,
        ];

        if ($request->has('cate')) {
            $data['category_id'] = $request->cate;
        }

        //fetch categories
        $categories = $this->categoryRepository->allParents();

        //fetch products
//        $products = $this->productRepository->getProductsForShop($data)->toArray();
        $products = $this->productRepository->getProductsForShop($data);
        //convert products into chunks of 6 (for frontend)
//        $products = array_chunk($products, 6);
        $products = $products->chunk(6, function($prods) {});
//        dd($products);

        //prep filters' options
        $year_options = $this->getFilterOptions('year', $data['category_id']);
        $make_options = $this->getFilterOptions('make', $data['category_id']);
        $model_options = $this->getFilterOptions('model', $data['category_id']);

        return view('shop::shop', compact('categories', 'products', 'year_options', 'make_options', 'model_options', 'data'));
    }

    public function review(Request $request){

        $review = new CustomerReview;
        $review->customer_name = $request->customer_name;
        $review->customer_email = $request->email;
        $review->company_name = $request->company_name;
        $review->text = $request->review;
        $review->save();

        return redirect()->back()->with('success','Thank You For Your Review');
    }

    public function shopByCategory(Request $request)
    {
        //init data
        $name = null;
        $category_id = null;
        $year = null;
        $make = null;
        $model = null;

        //prep data
        if ($request->method() == 'POST') {
            $name = $request->name;
            $category_id = $request->category_id;
            $year = $request->year;
            $make = $request->make;
            $model = $request->model;
        }

        $data = [
            'name' => $name,
            'category_id' => $category_id,
            'year' => $year,
            'make' => $make,
            'model' => $model,
        ];

        $cate = $request->cate;
        if ($request->has('cate')) {
            $data['category_id'] = $cate;
        }

        //fetch categories
        $category = $this->categoryRepository->find($cate);
        if ($category && !is_null($category->parent_id)) {
            $cate = $category->parent_id;
            $category = $this->categoryRepository->find($cate);
        }

        $categories = $this->categoryRepository->allChildren($cate);

        //fetch products
        $products = $this->productRepository->getProductsForShop($data);

        //prep filters' options
        $year_options = $this->getFilterOptions('year', $data['category_id']);
        $make_options = $this->getFilterOptions('make', $data['category_id']);
        $model_options = $this->getFilterOptions('model', $data['category_id']);

        return view('shop::shop-by-category', compact('categories','category', 'products', 'year_options', 'make_options', 'model_options', 'data'));
    }

    public function step1()
    {

        return view('shop::step1');
    }

    public function step2()
    {
        return view('shop::step2');
    }

    public function step3()
    {
        $cart = Cart::getCart();
        return view('shop::step3',compact('cart'));
    }

    public function process_payment(Request $request)
    {
//        $cart = Cart::all();
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'card_no' => 'required',
            'exp_mon' => 'required',
            'exp_year' => 'required',
            'cvv' => 'required'
        ]);

        if ($validator->fails()) {
            return [
                "status" => false,
                "data" => [],
                "errors" => $validator->messages(),
                "message" => "Unexpected Error occured."
            ];
        }

        $stripe = [
            "secret_key" => env("SECRET_KEY", "sk_test_lUp78O7PgN08WC9UgNRhOCnr"),
            "publishable_key" => env("PUBLISHABLE_KEY", "pk_test_0rY5rGJ7GN1xEhCB40mAcWjg"),
        ];

//        $stripe = get_payment_keys();

        try {

            $cardStripe = \Stripe\Stripe::setApiKey($stripe['secret_key']);

            $cardStripe = \Stripe\Token::create(array(
                "card" => array(
                    "number" => $request['card_no'],
                    "exp_month" => $request['exp_mon'],
                    "exp_year" => $request['exp_year'],
                    "cvc" => $request['cvv']
                )
            ));

            if (!empty($cardStripe)) {

                $customer = new \Stripe\StripeClient(
                    $stripe['secret_key']
                );
                $abc = $customer->customers->create([
                    'description' => 'Shopping',
                    'email' => $request->email,
                    'source' => $cardStripe['id'],
                ]);

                $charge = \Stripe\Stripe::setApiKey($stripe['secret_key']);

                $charge = \Stripe\Charge::create([
//
//                    'amount' => intval((floatval(str_replace(',', '', $request->total))  + get_tax_value($request->total)) * 100),
                    'amount' => intval((floatval(str_replace(',', '', $request->total))) * 100),
                    'currency' => 'usd',
                    'customer' => $abc
                ]);

                if ($charge['status'] === 'succeeded') {

//                    return [
//                        "status" => true,
//                        "errors" => [],
//                        "message" => "Successfully added"
//                    ];

                    return redirect()->route('shop.shop')->with('success', 'Thank You For Choosing Our Service');

                }

//                return [
//                    "status" => false,
//                    "errors" => [],
//                    "message" => "Payment failed. Try again."
//                ];
                return redirect()->back()->with('error', 'Payment failed. Try again.');

            }
        } catch (\Exception $e) {

            return [
                "status" => false,
                "errors" => [],
                "message" => $e->getMessage()
            ];
//            throw $e;
        }

    }

//    public function place_order(Request $request)
//    {
//        //prep data for mailing and storing
//        $total = $request->total;
//        $subtotal = Cart::subtotal();
////        $name = $request->name;
////        $phone = $request->phone;
////        $email = $request->email;
//
//        //store customer data
////        $check = Customer::where('phone_no', $phone)->get();
////        if(count($check) == 0) {
////            $customer = Customer::create([
////                'user_id' => 0,
////                'first_name' => $name,
////                'email' => $email,
////                'phone_no' => $phone,
//////                'address' => $billing_address,
////            ]);
////        } else {
////            $customer = $check[0];
////        }
//
//        //store order data
////        $order = Order::create([
////            'order_no' => generateRandomString(10),
////            'customer_id' => $customer->id,
////            'customer_name' => $name,
////            'customer_email' => $email,
////            'phone_no' => $phone,
////            'sub_total' => Cart::subtotal(),
//////            'sub_total' => $subtotal,
////            'discount' => Cart::discount(),
////            'tax' => get_tax_value(Cart::total()),
////            'total_amount' => str_replace(',', '', Cart::total()) + get_tax_value(Cart::total()),
////            'billing_address' => $billing_address,
////            'order_status' => 'paid',
//////            'time_to_pickup' => $time_to_pickup,
////        ]);
//
//        $cart_content = Cart::content();
//        $order_items = [];
//        foreach ($cart_content as $key => $cart_item) {
//            $order_items[$key] = OrderItem::create([
////                'order_id' => $order->id,
//                'product_id' => $cart_item->options['product_id'],
//                'product_per_price' => $cart_item->price,
//                'product_qty' => $cart_item->qty,
////                'tax' => $cart_item->tax,
//                'product_subtotal_price' => $cart_item->subtotal
//            ]);
//
//            $order_items[$key]['options'] = $cart_item->options;
//            //$cart_item->options['options'][0]
//            $pp = Product::whereId($cart_item->options['product_id'])
//                ->with('options')->first();
//            //dd($cart_item->options['options'][0]);
//        }
//
//        //send email to admin and customer
////        $this->send_order_mail([
////            'order' => $order,
////            'order_items' => $order_items,
////            'name' => $name,
////            'phone' => $phone,
////            'customer_email' => $email,
////            'billing_address' => $billing_address,
////            'tax' => get_tax_value(Cart::total()),
////            'subtotal' => Cart::subtotal(),
////            'total' => str_replace(',', '', Cart::total()) + get_tax_value(Cart::total()),
////            'time_to_pickup' => $time_to_pickup
////        ]);
//
//        //remove cart items
//        Cart::destroy();
//
//return back()->with('success','Thank You for Using Our Service');
//        //        return view('front.thank_you', compact('cart_content', 'time_to_pickup', 'total', 'subtotal', 'order'))->with('success', 'Order placed successfuly');
//    }

    /**
     * Loads the home page for the storefront if something wrong.
     *
     * @return \Exception
     */
    public function notFound()
    {
        abort(404);
    }

    /**
     * Upload image for product search with machine learning.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return $this->searchRepository->uploadSearchImage(request()->all());
    }

    protected function getFilterOptions($field_name, $category_id)
    {
        $options = ProductCategoryField::where('field_name', $field_name);
        $options->when($category_id, function ($q) use ($category_id) {
            return $q->where('category_id', $category_id);
        });
        return $options->groupBy('field_value')->get();
    }

    public function airBrake()
    {
        return view('shop::air-brake');
    }

    public function brakeRotors()
    {
        return view('shop::brake-rotors');
    }

    public function airDisc()
    {
        return view('shop::air-disc');
    }

    public function brakeShoe()
    {
        return view('shop::brake-shoe');
    }

    public function brakeChamber()
    {
        return view('shop::brake-chamber');
    }

    public function misc()
    {
        return view('shop::misc-hardware');
    }

    public function catalogue()
    {
        return view('shop::catalogue');
    }
}

@extends('shop::layouts.master2')

@section('page_title')
    {{ __('shop::app.checkout.onepage.title') }}
@stop

@section('content')
    <style>
        .no-arrow {
            -moz-appearance: textfield;
        }

        .no-arrow::-webkit-inner-spin-button {
            display: none;
        }

        .no-arrow::-webkit-outer-spin-button,
        .no-arrow::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/mainBanner.jpg')}}"
                         alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-6">
                                    <h2>cart</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin: Step 1 -->
    <div class="checkOutStyle">
        <div class="container-md">
            <div class="row">
                <form action="{{ route('shop.checkout.proceed-to-checkout') }}" id="" method="POST" class="row formStyle form_proceed_to_checkout">
                    @csrf

                    <div class="col-md-12">
                        <div class="title inner">
                             <h2 class="section-heading">Billing Address</h2>
                            <h4>Fill the form below to complete your purchase</h4>
                                                        <p class="checkout-subheading">
                                                            <span>Already Registered?</span> Click here to <a href="#">Login now</a>
                                                        </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>First Name</label>
                        <input id="first_name" type="text"
                               class="form-control @error('first_name') is-invalid @enderror validation_fields"
                               name="first_name" required>
                        @error('first_name')
                        <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror validation_fields"
                               name="last_name" required>
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror validation_fields"
                               name="email" required>
                        @error('email')
                        <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input name="phone" id="phone" name="phone"
                               class="form-control no-arrow @error('phone') is-invalid @enderror validation_fields" type="number">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Password</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror validation_fields"
                               name="password" required>phone
                        @error('password')
                        <span class="invalid-feedback mb-2" role="alert">
{{--                                        <strong>{{ $message }}</strong>--}}
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Confirm password</label>
                        <input id="password-confirm" type="password" class="form-control validation_fields" name="password_confirmation"
                               autocomplete="new-password">
                    </div>
                    <div class="col-md-12">
                        <label>Address</label>
                        <textarea rows="4" class="form-control" name="address"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" id="country">
                    </div>
                    <div class="col-md-6">
                        <label>State/Province</label>
                        <input type="text" class="form-control" name="state" id="state">
                    </div>
                    <div class="col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                    <div class="col-md-6">
                        <label>Zip/Postal Code</label>
                        <input type="text" class="form-control" name="zip_code">
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox">
                            <input type="checkbox" id="box-1" name="create_account" checked>
                            <label for="box-1">Create an account for later use</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox">
                            <input type="checkbox" id="box-2" name="ship_to_address" checked>
                            <label for="box-2">Ship to the same address mentioned above</label>
                        </div>
                    </div>

                    <div class="col-md-6 mx-auto">
                        <div class="row order-summery no-gutters">
                            <div class="col-md-12 title my-5 text-center">
                                <h2>Order Summary</h2>
                            </div>
                            <div class="col-md-12 d-flex align-items-center justify-content-between">
                                <span>Subtotal ({{ $cart->items_qty ?? '' }} items)</span>
                                <strong>${{$cart->sub_total ?? ''}}</strong>
                            </div>
{{--                            <hr class="w-100">--}}
{{--                            <div class="col-md-12 d-flex align-items-center justify-content-between">--}}
{{--                                <span>Shipping fee</span>--}}
{{--                                <strong>USD 5.00</strong>--}}
{{--                            </div>--}}
{{--                            <hr class="w-100">--}}
                            {{--                        <div class="col-md-12">--}}
                            {{--                            <div class="applyCoupon">--}}
                            {{--                                <input type="text" class="form-control" placeholder="Enter Voucher Code">--}}
                            {{--                                <button class="btnStyle btn-block">Apply</button>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            <hr class="w-100">
                            <div class="col-md-12 d-flex align-items-center justify-content-between">
                                <span>Total</span>
                                <strong>${{$cart->grand_total ?? ''}}</strong>
                            </div>
{{--                            <hr class="w-100">--}}
{{--                            <div class="col-md-12 text-center shippngBTn mt-4">--}}
{{--                                <a href="{{route('shop.step3')}}" class="themeBtns">proceed to checkout</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

{{--                    <div class="col-md-12 title my-5 text-center">--}}
{{--                        <h2 class="section-heading">Order Summary</h2>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 order-summery">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            <div class="col-6">--}}
{{--                                <span>Subtotal ({{ $cart->items_qty ?? '' }} items)</span>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 text-right">--}}
{{--                                <strong>${{$cart->sub_total ?? ''}}</strong>--}}
{{--                            </div>--}}
{{--                         Payment Options--}}
{{--                            @if(!empty($shippingMethods))--}}
                                <div class="col-6 text-right">
                                    <strong>{{ $shippingMethods['price'] !== 0 ? 'USD '.$shippingMethods['price'] : $shippingMethods['price']  }}</strong>
                                    <input type="hidden" name="shipping_method"
                                           value="{{ $shippingMethods['method'] }}">
                                    <input type="hidden" name="payment_method" value="{{ $shippingMethods['method'] }}">
                                    <input type="hidden" name="selected_shipping_rate[method]"
                                           value="{{ $shippingMethods['method'] }}">
                                    <input type="hidden" name="selected_shipping_rate[method_title]"
                                           value="{{ $shippingMethods['method_title'] }}">
                                    <input type="hidden" name="selected_shipping_rate[carrier_title]"
                                           value="{{ $shippingMethods['carrier_title'] }}">
                                    <input type="hidden" name="selected_shipping_rate[method_description]"
                                           value="{{ $shippingMethods['method_description'] }}">
                                    <input type="hidden" name="selected_shipping_rate[price]"
                                           value="{{ $shippingMethods['price'] }}">
                                    <input type="hidden" name="selected_shipping_rate[base_price]"
                                           value="{{ $shippingMethods['base_price'] }}">
                                    <input type="hidden" name="selected_shipping_rate[discount_amount]"
                                           value="{{ round($shippingMethods['discount_amount']) }}">
                                    <input type="hidden" name="selected_shipping_rate[base_discount_amount]"
                                           value="{{ round($shippingMethods['base_discount_amount']) }}">
                                </div>
{{--                                <hr class="w-100">--}}
{{--                                <div class="col-6">--}}
{{--                                    <span>Total</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 text-right">--}}
{{--                                    <strong>${{$cart->grand_total ?? ''}}</strong>--}}
{{--                                </div>--}}
                                <hr class="w-100">
                                <div class="col-md-12 mt-4 text-center">
                                    <h3>Payment Options</h3>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="themeBtn btnStyle btn-block proc-to-pay">Stripe / Apple Pay
                                    </button>
                                </div>
                                <div class="col-md-12 mt-4 text-center">
                                    <div id="paypal-button-container" hidden></div>
                                </div>
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
@endsection

{{--<script src="https://www.paypal.com/sdk/js?client-id={{$setting->paypal_client_id}}&components=buttons&debug=true"></script>--}}
{{--<script src="https://www.paypal.com/sdk/js?client-id={{$setting->paypal_client_id}}&components=buttons"></script>--}}
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    $(document).ready(function () {
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        function validateCountryCode(code) {
            // regular expression for country codes
            const regex = /^[A-Z]{2}$/;

            // test the code against the regular expression
            return regex.test(code);
        }

        function isValidStateCode(code) {
            // Regular expression to match valid state codes
            const regex = /^[A-Z]{2}$/;

            // Test if the input matches the regex
            return regex.test(code);
        }

        function validateForm () {
            if (
                $('#first_name').val().length === 0
                || $('#last_name').val().length === 0
                || $('#email').val().length === 0
                || !isEmail($('#email').val())
                || $('#password').val().length === 0
                || $('#password-confirm').val().length === 0
                || $('#password').val() != $('#password-confirm').val()
                // || !validateCountryCode($('#country').val())
                // || !isValidStateCode($('#state').val())
            ) {
                return false;
            }

            return true;
        }

        function initPaypal () {
            paypal.Buttons({
                style: {
                    layout: 'vertical',
                    color:  'gold',
                    shape:  'rect',
                    label:  'paypal'
                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{intval($cart->grand_total)}}'
                            }
                        }]
                    });
                },
                onApprove(data) {
                    console.log('You have successfully created subscription ', data);
                    //here
                    $('.form_proceed_to_checkout').append('<input type="hidden" name="paypal" value="1">');
                    $('.form_proceed_to_checkout').submit();
                },
                onCancel(data) {
                    alert('You need to complete payment to continue.');
                },
                onError(err) {
                    alert(err);
                }
            }).render('#paypal-button-container');
        }

        $('.validation_fields').on('keyup change', function () {
            $('#paypal-button-container').prop('hidden', !validateForm())
        });

        //init paypal
        initPaypal();
    });

</script>

{{--@extends('shop::layouts.master')--}}

{{--@section('page_title')--}}
{{--    {{ __('shop::app.checkout.onepage.title') }}--}}
{{--@stop--}}

{{--@section('content-wrapper')--}}
{{--    <checkout></checkout>--}}
{{--@endsection--}}

{{--@push('scripts')--}}
{{--    <script type="text/javascript" src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}"></script>--}}

{{--    @include('shop::checkout.cart.coupon')--}}
{{--@dd('here')--}}
{{--    <script type="text/x-template" id="checkout-template">--}}
{{--        <div class="container">--}}
{{--            <div id="checkout" class="checkout-process row offset-lg-1 col-lg-11 col-md-12">--}}
{{--                <h1 class="col-12">{{ __('velocity::app.checkout.checkout') }}</h1>--}}

{{--                <div class="col-lg-7 col-md-12">--}}
{{--                    <div class="step-content information" id="address-section">--}}
{{--                        @include('shop::checkout.onepage.customer-info')--}}
{{--                    </div>--}}

{{--                    <div--}}
{{--                        class="step-content shipping"--}}
{{--                        id="shipping-section"--}}
{{--                        v-if="showShippingSection">--}}
{{--                        <shipping-section--}}
{{--                            :key="shippingComponentKey"--}}
{{--                            @onShippingMethodSelected="shippingMethodSelected($event)">--}}
{{--                        </shipping-section>--}}
{{--                    </div>--}}

{{--                    <div--}}
{{--                        class="step-content payment"--}}
{{--                        id="payment-section"--}}
{{--                        v-if="showPaymentSection">--}}
{{--                        <payment-section--}}
{{--                            @onPaymentMethodSelected="paymentMethodSelected($event)">--}}
{{--                        </payment-section>--}}

{{--                        <coupon-component--}}
{{--                            @onApplyCoupon="getOrderSummary"--}}
{{--                            @onRemoveCoupon="getOrderSummary">--}}
{{--                        </coupon-component>--}}
{{--                    </div>--}}

{{--                    <div--}}
{{--                        class="step-content review"--}}
{{--                        id="summary-section"--}}
{{--                        v-if="showSummarySection">--}}
{{--                        <review-section :key="reviewComponentKey">--}}
{{--                            <div slot="summary-section">--}}
{{--                                <summary-section--}}
{{--                                    discount="1"--}}
{{--                                    :key="summaryComponentKey"--}}
{{--                                    @onApplyCoupon="getOrderSummary"--}}
{{--                                    @onRemoveCoupon="getOrderSummary"--}}
{{--                                ></summary-section>--}}
{{--                            </div>--}}

{{--                            <div slot="place-order-btn">--}}
{{--                                <div class="mb20">--}}
{{--                                    <button--}}
{{--                                        type="button"--}}
{{--                                        class="theme-btn"--}}
{{--                                        @click="placeOrder()"--}}
{{--                                        :disabled="!isPlaceOrderEnabled"--}}
{{--                                        v-if="selected_payment_method.method != 'paypal_smart_button'"--}}
{{--                                        id="checkout-place-order-button">--}}
{{--                                        {{ __('shop::app.checkout.onepage.place-order') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </review-section>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-12 offset-lg-1 order-summary-container top pt0">--}}
{{--                    <summary-section :key="summaryComponentKey"></summary-section>--}}

{{--                    <div class="paypal-button-container mt10"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </script>--}}

{{--    <script type="text/javascript">--}}
{{--        (() => {--}}
{{--            var reviewHtml = '';--}}
{{--            var paymentHtml = '';--}}
{{--            var summaryHtml = '';--}}
{{--            var shippingHtml = '';--}}
{{--            var paymentMethods = '';--}}
{{--            var customerAddress = '';--}}
{{--            var shippingMethods = '';--}}

{{--            var reviewTemplateRenderFns = [];--}}
{{--            var paymentTemplateRenderFns = [];--}}
{{--            var summaryTemplateRenderFns = [];--}}
{{--            var shippingTemplateRenderFns = [];--}}

{{--            @auth('customer')--}}
{{--                @if(auth('customer')->user()->addresses)--}}
{{--                    customerAddress = @json(auth('customer')->user()->addresses);--}}
{{--                    customerAddress.email = "{{ auth('customer')->user()->email }}";--}}
{{--                    customerAddress.first_name = "{{ auth('customer')->user()->first_name }}";--}}
{{--                    customerAddress.last_name = "{{ auth('customer')->user()->last_name }}";--}}
{{--                @endif--}}
{{--            @endauth--}}

{{--            Vue.component('checkout', {--}}
{{--                template: '#checkout-template',--}}
{{--                inject: ['$validator'],--}}

{{--                data: function () {--}}
{{--                    return {--}}
{{--                        allAddress: {},--}}
{{--                        current_step: 1,--}}
{{--                        completed_step: 0,--}}
{{--                        isCheckPayment: true,--}}
{{--                        is_customer_exist: 0,--}}
{{--                        disable_button: false,--}}
{{--                        shippingComponentKey: 0,--}}
{{--                        reviewComponentKey: 0,--}}
{{--                        summaryComponentKey: 0,--}}
{{--                        showPaymentSection: false,--}}
{{--                        showSummarySection: false,--}}
{{--                        isPlaceOrderEnabled: false,--}}
{{--                        new_billing_address: false,--}}
{{--                        showShippingSection: false,--}}
{{--                        new_shipping_address: false,--}}
{{--                        selected_payment_method: '',--}}
{{--                        selected_shipping_method: '',--}}
{{--                        countries: [],--}}
{{--                        countryStates: [],--}}

{{--                        step_numbers: {--}}
{{--                            'information': 1,--}}
{{--                            'shipping': 2,--}}
{{--                            'payment': 3,--}}
{{--                            'review': 4--}}
{{--                        },--}}

{{--                        address: {--}}
{{--                            billing: {--}}
{{--                                address1: [''],--}}
{{--                                save_as_address: false,--}}
{{--                                use_for_shipping: true,--}}
{{--                            },--}}

{{--                            shipping: {--}}
{{--                                address1: ['']--}}
{{--                            },--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}

{{--                created: function () {--}}
{{--                    this.fetchCountries();--}}

{{--                    this.fetchCountryStates();--}}

{{--                    this.getOrderSummary();--}}

{{--                    if (! customerAddress) {--}}
{{--                        this.new_shipping_address = true;--}}
{{--                        this.new_billing_address = true;--}}
{{--                    } else {--}}
{{--                        this.address.billing.first_name = this.address.shipping.first_name = customerAddress.first_name;--}}
{{--                        this.address.billing.last_name = this.address.shipping.last_name = customerAddress.last_name;--}}
{{--                        this.address.billing.email = this.address.shipping.email = customerAddress.email;--}}

{{--                        if (customerAddress.length < 1) {--}}
{{--                            this.new_shipping_address = true;--}}
{{--                            this.new_billing_address = true;--}}
{{--                        } else {--}}
{{--                            this.allAddress = customerAddress;--}}

{{--                            for (let country in this.countries) {--}}
{{--                                for (let code in this.allAddress) {--}}
{{--                                    if (this.allAddress[code].country) {--}}
{{--                                        if (this.allAddress[code].country == this.countries[country].code) {--}}
{{--                                            this.allAddress[code]['country'] = this.countries[country].name;--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                },--}}

{{--                methods: {--}}
{{--                    navigateToStep: function (step) {--}}
{{--                        if (step <= this.completed_step) {--}}
{{--                            this.current_step = step;--}}
{{--                            this.completed_step = step - 1;--}}
{{--                        }--}}
{{--                    },--}}

{{--                    fetchCountries: function () {--}}
{{--                        let countriesEndPoint = `${this.$root.baseUrl}/api/countries?pagination=0`;--}}

{{--                        this.$http.get(countriesEndPoint)--}}
{{--                            .then(response => {--}}
{{--                                this.countries = response.data.data;--}}
{{--                            })--}}
{{--                            .catch(function (error) {});--}}
{{--                    },--}}

{{--                    fetchCountryStates: function () {--}}
{{--                        let countryStateEndPoint = `${this.$root.baseUrl}/api/country-states?pagination=0`;--}}

{{--                        this.$http.get(countryStateEndPoint)--}}
{{--                            .then(response => {--}}
{{--                                this.countryStates = response.data.data;--}}
{{--                            })--}}
{{--                            .catch(function (error) {});--}}
{{--                    },--}}

{{--                    haveStates: function (addressType) {--}}
{{--                        if (this.countryStates[this.address[addressType].country] && this.countryStates[this.address[addressType].country].length)--}}
{{--                            return true;--}}

{{--                        return false;--}}
{{--                    },--}}

{{--                    validateForm: async function (scope) {--}}
{{--                        var isManualValidationFail = false;--}}

{{--                        if (scope == 'address-form') {--}}
{{--                            isManualValidationFail = this.validateAddressForm();--}}
{{--                        }--}}

{{--                        if (! isManualValidationFail) {--}}
{{--                            await this.$validator.validateAll(scope)--}}
{{--                            .then(result => {--}}
{{--                                if (result) {--}}
{{--                                    switch (scope) {--}}
{{--                                        case 'address-form':--}}
{{--                                            /* loader will activate only when save as address is clicked */--}}
{{--                                            if (this.address.billing.save_as_address) {--}}
{{--                                                this.$root.showLoader();--}}
{{--                                            }--}}

{{--                                            /* this is outside because save as address also calling for--}}
{{--                                               saving the address in the order only */--}}
{{--                                            this.saveAddress();--}}
{{--                                            break;--}}

{{--                                        case 'shipping-form':--}}
{{--                                            if (this.showShippingSection) {--}}
{{--                                                this.$root.showLoader();--}}
{{--                                                this.saveShipping();--}}
{{--                                                break;--}}
{{--                                            }--}}

{{--                                        case 'payment-form':--}}
{{--                                            this.$root.showLoader();--}}
{{--                                            this.savePayment();--}}

{{--                                            this.isPlaceOrderEnabled = ! this.validateAddressForm();--}}
{{--                                            break;--}}

{{--                                        default:--}}
{{--                                            break;--}}
{{--                                    }--}}

{{--                                } else {--}}
{{--                                    this.isPlaceOrderEnabled = false;--}}
{{--                                }--}}
{{--                            });--}}
{{--                        } else {--}}
{{--                            this.isPlaceOrderEnabled = false;--}}
{{--                        }--}}
{{--                    },--}}

{{--                    validateAddressForm: function () {--}}
{{--                        var isManualValidationFail = false;--}}

{{--                        let form = $(document).find('form[data-vv-scope=address-form]');--}}

{{--                        // validate that if all the field contains some value--}}
{{--                        if (form) {--}}
{{--                            form.find(':input').each((index, element) => {--}}
{{--                                let value = $(element).val();--}}
{{--                                let elementId = element.id;--}}

{{--                                if (value == ""--}}
{{--                                    && element.id != 'sign-btn'--}}
{{--                                    && element.id != 'billing[company_name]'--}}
{{--                                    && element.id != 'billing[country]'--}}
{{--                                    && element.id != 'billing[state]'--}}
{{--                                    && element.id != 'billing[postcode]'--}}
{{--                                    && element.id != 'shipping[company_name]'--}}
{{--                                    && element.id != 'shipping[country]'--}}
{{--                                    && element.id != 'shipping[state]'--}}
{{--                                    && element.id != 'shipping[postcode]'--}}
{{--                                ) {--}}
{{--                                    // check for multiple line address--}}
{{--                                    if (elementId.match('billing_address_')--}}
{{--                                        || elementId.match('shipping_address_')--}}
{{--                                    ) {--}}
{{--                                        // only first line address is required--}}
{{--                                        if (elementId == 'billing_address_0'--}}
{{--                                            || elementId == 'shipping_address_0'--}}
{{--                                        ) {--}}
{{--                                            isManualValidationFail = true;--}}
{{--                                        }--}}
{{--                                    } else {--}}
{{--                                        isManualValidationFail = true;--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            });--}}
{{--                        }--}}

{{--                        // validate that if customer wants to use different shipping address--}}
{{--                        if (! this.address.billing.use_for_shipping) {--}}
{{--                            if (! this.address.shipping.address_id && ! this.new_shipping_address) {--}}
{{--                                isManualValidationFail = true;--}}
{{--                            }--}}
{{--                        }--}}

{{--                        return isManualValidationFail;--}}
{{--                    },--}}

{{--                    isCustomerExist: function() {--}}
{{--                        this.$validator.attach('address-form.billing[email]', 'required|email');--}}

{{--                        this.$validator.validate('address-form.billing[email]', this.address.billing.email)--}}
{{--                        .then(isValid => {--}}
{{--                            if (! isValid)--}}
{{--                                return;--}}

{{--                            this.$http.post("{{ route('customer.checkout.exist') }}", {email: this.address.billing.email})--}}
{{--                            .then(response => {--}}
{{--                                this.is_customer_exist = response.data ? 1 : 0;--}}
{{--                                console.log(this.is_customer_exist);--}}

{{--                                if (response.data)--}}
{{--                                    this.$root.hideLoader();--}}
{{--                            })--}}
{{--                            .catch(function (error) {})--}}
{{--                        })--}}
{{--                        .catch(error => {})--}}
{{--                    },--}}

{{--                    loginCustomer: function () {--}}
{{--                        this.$http.post("{{ route('customer.checkout.login') }}", {--}}
{{--                                email: this.address.billing.email,--}}
{{--                                password: this.address.billing.password--}}
{{--                            })--}}
{{--                            .then(response => {--}}
{{--                                if (response.data.success) {--}}
{{--                                    window.location.href = "{{ route('shop.checkout.onepage.index') }}";--}}
{{--                                } else {--}}
{{--                                    window.showAlert(`alert-danger`, this.__('shop.general.alert.danger'), response.data.error);--}}
{{--                                }--}}
{{--                            })--}}
{{--                            .catch(function (error) {})--}}
{{--                    },--}}

{{--                    getOrderSummary: function () {--}}
{{--                        this.$http.get("{{ route('shop.checkout.summary') }}")--}}
{{--                            .then(response => {--}}
{{--                                summaryHtml = Vue.compile(response.data.html)--}}

{{--                                this.summaryComponentKey++;--}}
{{--                                this.reviewComponentKey++;--}}
{{--                            })--}}
{{--                            .catch(function (error) {})--}}
{{--                    },--}}

{{--                    saveAddress: async function () {--}}
{{--                        this.disable_button = true;--}}

{{--                        if (this.allAddress.length > 0) {--}}
{{--                            let address = this.allAddress.forEach(address => {--}}
{{--                                if (address.id == this.address.billing.address_id) {--}}
{{--                                    this.address.billing.address1 = [address.address1];--}}

{{--                                    if (address.email) {--}}
{{--                                        this.address.billing.email = address.email;--}}
{{--                                    }--}}

{{--                                    if (address.first_name) {--}}
{{--                                        this.address.billing.first_name = address.first_name;--}}
{{--                                    }--}}

{{--                                    if (address.last_name) {--}}
{{--                                        this.address.billing.last_name = address.last_name;--}}
{{--                                    }--}}
{{--                                }--}}

{{--                                if (address.id == this.address.shipping.address_id) {--}}
{{--                                    this.address.shipping.address1 = [address.address1];--}}

{{--                                    if (address.email) {--}}
{{--                                        this.address.shipping.email = address.email;--}}
{{--                                    }--}}

{{--                                    if (address.first_name) {--}}
{{--                                        this.address.shipping.first_name = address.first_name;--}}
{{--                                    }--}}

{{--                                    if (address.last_name) {--}}
{{--                                        this.address.shipping.last_name = address.last_name;--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            });--}}
{{--                        }--}}

{{--                        this.$http.post("{{ route('shop.checkout.save-address') }}", this.address)--}}
{{--                            .then(response => {--}}
{{--                                this.disable_button = false;--}}
{{--                                this.isPlaceOrderEnabled = true;--}}

{{--                                if (this.step_numbers[response.data.jump_to_section] == 2) {--}}
{{--                                    this.showShippingSection = true;--}}
{{--                                    shippingHtml = Vue.compile(response.data.html);--}}
{{--                                } else {--}}
{{--                                    paymentHtml = Vue.compile(response.data.html)--}}
{{--                                }--}}

{{--                                this.completed_step = this.step_numbers[response.data.jump_to_section] + 1;--}}
{{--                                this.current_step = this.step_numbers[response.data.jump_to_section];--}}

{{--                                if (response.data.jump_to_section == "payment") {--}}
{{--                                    this.showPaymentSection = true;--}}
{{--                                    paymentMethods  = response.data.paymentMethods;--}}
{{--                                }--}}

{{--                                shippingMethods = response.data.shippingMethods;--}}

{{--                                this.shippingComponentKey++;--}}

{{--                                this.getOrderSummary();--}}

{{--                                this.$root.hideLoader();--}}
{{--                            })--}}
{{--                            .catch(error => {--}}
{{--                                this.disable_button = false;--}}
{{--                                this.$root.hideLoader();--}}

{{--                                this.handleErrorResponse(error.response, 'address-form')--}}
{{--                            })--}}
{{--                    },--}}

{{--                    saveShipping: async function () {--}}
{{--                        this.disable_button = true;--}}

{{--                        this.$http.post("{{ route('shop.checkout.save-shipping') }}", {'shipping_method': this.selected_shipping_method})--}}
{{--                            .then(response => {--}}
{{--                                this.$root.hideLoader();--}}
{{--                                this.disable_button = false;--}}
{{--                                this.showPaymentSection = true;--}}

{{--                                paymentHtml = Vue.compile(response.data.html)--}}

{{--                                this.completed_step = this.step_numbers[response.data.jump_to_section] + 1;--}}

{{--                                this.current_step = this.step_numbers[response.data.jump_to_section];--}}

{{--                                paymentMethods = response.data.paymentMethods;--}}

{{--                                if (this.selected_payment_method) {--}}
{{--                                    this.savePayment();--}}
{{--                                }--}}

{{--                                this.getOrderSummary();--}}
{{--                            })--}}
{{--                            .catch(error => {--}}
{{--                                this.disable_button = false;--}}
{{--                                this.$root.hideLoader();--}}
{{--                                this.handleErrorResponse(error.response, 'shipping-form')--}}
{{--                            })--}}
{{--                    },--}}

{{--                    savePayment: async function () {--}}
{{--                        this.disable_button = true;--}}

{{--                        if (this.isCheckPayment) {--}}
{{--                            this.isCheckPayment = false;--}}

{{--                            this.$http.post("{{ route('shop.checkout.save-payment') }}", {'payment': this.selected_payment_method})--}}
{{--                            .then(response => {--}}
{{--                                this.isCheckPayment = true;--}}
{{--                                this.disable_button = false;--}}

{{--                                this.showSummarySection = true;--}}
{{--                                this.$root.hideLoader();--}}

{{--                                reviewHtml = Vue.compile(response.data.html)--}}
{{--                                this.completed_step = this.step_numbers[response.data.jump_to_section] + 1;--}}
{{--                                this.current_step = this.step_numbers[response.data.jump_to_section];--}}

{{--                                document.body.style.cursor = 'auto';--}}

{{--                                this.getOrderSummary();--}}
{{--                            })--}}
{{--                            .catch(error => {--}}
{{--                                this.disable_button = false;--}}
{{--                                this.$root.hideLoader();--}}
{{--                                this.handleErrorResponse(error.response, 'payment-form')--}}
{{--                            });--}}
{{--                        }--}}
{{--                    },--}}

{{--                    placeOrder: async function () {--}}
{{--                        if (this.isPlaceOrderEnabled) {--}}
{{--                            this.disable_button = false;--}}
{{--                            this.isPlaceOrderEnabled = false;--}}

{{--                            this.$root.showLoader();--}}

{{--                            this.$http.post("{{ route('shop.checkout.save-order') }}", {'_token': "{{ csrf_token() }}"})--}}
{{--                            .then(response => {--}}
{{--                                if (response.data.success) {--}}
{{--                                    if (response.data.redirect_url) {--}}
{{--                                        this.$root.hideLoader();--}}
{{--                                        window.location.href = response.data.redirect_url;--}}
{{--                                    } else {--}}
{{--                                        this.$root.hideLoader();--}}
{{--                                        window.location.href = "{{ route('shop.checkout.success') }}";--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            })--}}
{{--                            .catch(error => {--}}
{{--                                this.disable_button = true;--}}
{{--                                this.$root.hideLoader();--}}

{{--                                window.showAlert(`alert-danger`, this.__('shop.general.alert.danger'), "{{ __('shop::app.common.error') }}");--}}
{{--                            })--}}
{{--                        } else {--}}
{{--                            this.disable_button = true;--}}
{{--                        }--}}
{{--                    },--}}

{{--                    handleErrorResponse: function (response, scope) {--}}
{{--                        if (response.status == 422) {--}}
{{--                            serverErrors = response.data.errors;--}}
{{--                            this.$root.addServerErrors(scope)--}}
{{--                        } else if (response.status == 403) {--}}
{{--                            if (response.data.redirect_url) {--}}
{{--                                window.location.href = response.data.redirect_url;--}}
{{--                            }--}}
{{--                        }--}}
{{--                    },--}}

{{--                    shippingMethodSelected: function (shippingMethod) {--}}
{{--                        this.selected_shipping_method = shippingMethod;--}}
{{--                    },--}}

{{--                    paymentMethodSelected: function (paymentMethod) {--}}
{{--                        this.selected_payment_method = paymentMethod;--}}
{{--                    },--}}

{{--                    newBillingAddress: function () {--}}
{{--                        this.new_billing_address = true;--}}
{{--                        this.isPlaceOrderEnabled = false;--}}
{{--                        this.address.billing.address_id = null;--}}
{{--                    },--}}

{{--                    newShippingAddress: function () {--}}
{{--                        this.new_shipping_address = true;--}}
{{--                        this.isPlaceOrderEnabled = false;--}}
{{--                        this.address.shipping.address_id = null;--}}
{{--                    },--}}

{{--                    backToSavedBillingAddress: function () {--}}
{{--                        this.new_billing_address = false;--}}
{{--                        this.validateFormAfterAction()--}}
{{--                    },--}}

{{--                    backToSavedShippingAddress: function () {--}}
{{--                        this.new_shipping_address = false;--}}
{{--                        this.validateFormAfterAction()--}}
{{--                    },--}}

{{--                    validateFormAfterAction: function () {--}}
{{--                        setTimeout(() => {--}}
{{--                            this.validateForm('address-form');--}}
{{--                        }, 0);--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}

{{--            Vue.component('shipping-section', {--}}
{{--                inject: ['$validator'],--}}

{{--                data: function () {--}}
{{--                    return {--}}
{{--                        templateRender: null,--}}

{{--                        selected_shipping_method: '',--}}

{{--                        first_iteration : true,--}}
{{--                    }--}}
{{--                },--}}

{{--                staticRenderFns: shippingTemplateRenderFns,--}}

{{--                mounted: function () {--}}
{{--                    this.templateRender = shippingHtml.render;--}}

{{--                    for (var i in shippingHtml.staticRenderFns) {--}}
{{--                        shippingTemplateRenderFns.push(shippingHtml.staticRenderFns[i]);--}}
{{--                    }--}}

{{--                    eventBus.$emit('after-checkout-shipping-section-added');--}}
{{--                },--}}

{{--                render: function (h) {--}}
{{--                    return h('div', [--}}
{{--                        (this.templateRender ?--}}
{{--                            this.templateRender() :--}}
{{--                            '')--}}
{{--                        ]);--}}
{{--                },--}}

{{--                methods: {--}}
{{--                    methodSelected: function () {--}}
{{--                        this.$parent.validateForm('shipping-form');--}}

{{--                        this.$emit('onShippingMethodSelected', this.selected_shipping_method)--}}

{{--                        eventBus.$emit('after-shipping-method-selected', this.selected_shipping_method);--}}
{{--                    }--}}
{{--                }--}}
{{--            })--}}

{{--            Vue.component('payment-section', {--}}
{{--                inject: ['$validator'],--}}

{{--                data: function () {--}}
{{--                    return {--}}
{{--                        templateRender: null,--}}

{{--                        payment: {--}}
{{--                            method: ""--}}
{{--                        },--}}

{{--                        first_iteration : true,--}}
{{--                    }--}}
{{--                },--}}

{{--                staticRenderFns: paymentTemplateRenderFns,--}}

{{--                mounted: function () {--}}
{{--                    this.templateRender = paymentHtml.render;--}}

{{--                    for (var i in paymentHtml.staticRenderFns) {--}}
{{--                        paymentTemplateRenderFns.push(paymentHtml.staticRenderFns[i]);--}}
{{--                    }--}}

{{--                    eventBus.$emit('after-checkout-payment-section-added');--}}
{{--                },--}}

{{--                render: function (h) {--}}
{{--                    return h('div', [--}}
{{--                        (this.templateRender ?--}}
{{--                            this.templateRender() :--}}
{{--                            '')--}}
{{--                        ]);--}}
{{--                },--}}

{{--                methods: {--}}
{{--                    methodSelected: function () {--}}
{{--                        this.$parent.validateForm('payment-form');--}}

{{--                        this.$emit('onPaymentMethodSelected', this.payment)--}}

{{--                        eventBus.$emit('after-payment-method-selected', this.payment);--}}
{{--                    }--}}
{{--                }--}}
{{--            })--}}

{{--            Vue.component('review-section', {--}}
{{--                data: function () {--}}
{{--                    return {--}}
{{--                        error_message: '',--}}
{{--                        templateRender: null,--}}
{{--                    }--}}
{{--                },--}}

{{--                staticRenderFns: reviewTemplateRenderFns,--}}

{{--                render: function (h) {--}}
{{--                    return h(--}}
{{--                        'div', [--}}
{{--                            this.templateRender ? this.templateRender() : ''--}}
{{--                        ]--}}
{{--                    );--}}
{{--                },--}}

{{--                mounted: function () {--}}
{{--                    this.templateRender = reviewHtml.render;--}}

{{--                    for (var i in reviewHtml.staticRenderFns) {--}}
{{--                        reviewTemplateRenderFns[i] = reviewHtml.staticRenderFns[i];--}}
{{--                    }--}}

{{--                    this.$forceUpdate();--}}
{{--                }--}}
{{--            });--}}

{{--            Vue.component('summary-section', {--}}
{{--                inject: ['$validator'],--}}

{{--                staticRenderFns: summaryTemplateRenderFns,--}}

{{--                props: {--}}
{{--                    discount: {--}}
{{--                        default: 0,--}}
{{--                        type: [String, Number],--}}
{{--                    }--}}
{{--                },--}}

{{--                data: function () {--}}
{{--                    return {--}}
{{--                        changeCount: 0,--}}
{{--                        coupon_code: null,--}}
{{--                        error_message: null,--}}
{{--                        templateRender: null,--}}
{{--                        couponChanged: false,--}}
{{--                    }--}}
{{--                },--}}

{{--                mounted: function () {--}}
{{--                    this.templateRender = summaryHtml.render;--}}

{{--                    for (var i in summaryHtml.staticRenderFns) {--}}
{{--                        summaryTemplateRenderFns[i] = summaryHtml.staticRenderFns[i];--}}
{{--                    }--}}

{{--                    this.$forceUpdate();--}}
{{--                },--}}

{{--                render: function (h) {--}}
{{--                    return h('div', [--}}
{{--                        (this.templateRender ?--}}
{{--                            this.templateRender() :--}}
{{--                            '')--}}
{{--                        ]);--}}
{{--                },--}}

{{--                methods: {--}}
{{--                    onSubmit: function () {--}}
{{--                        var this_this = this;--}}
{{--                        const emptyCouponErrorText = "Please enter a coupon code";--}}
{{--                    },--}}

{{--                    changeCoupon: function () {--}}
{{--                        if (this.couponChanged == true && this.changeCount == 0) {--}}
{{--                            this.changeCount++;--}}

{{--                            this.error_message = null;--}}

{{--                            this.couponChanged = false;--}}
{{--                        } else {--}}
{{--                            this.changeCount = 0;--}}
{{--                        }--}}
{{--                    },--}}
{{--                }--}}
{{--            });--}}

{{--        })();--}}
{{--    </script>--}}
{{--@endpush--}}

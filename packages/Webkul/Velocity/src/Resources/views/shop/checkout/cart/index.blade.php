@extends('shop::layouts.master2')

@section('page_title')
    {{ __('shop::app.checkout.cart.title') }}
@stop
@section('content')

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
    <!-- Begin: Step 2 -->
    <div class="checkOutStyle">
        <div class="container-md">
            @if(!is_null($cart) && $cart->items->count() > 0)
                @foreach($cart->items as $item)
                    <div class="row cartItemCard">
                        <div class="col-sm-2">
                            @if(!is_null($img = $item->product->images()->first()))
                                <img
                                    src="{{asset('storage/'.$img->path)}}"
                                    class="img-fluid"
                                    alt="img">
                            @endif
                        </div>
                        <div class="col-md-5 col-sm-4">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="col-sm-2">
                            {{--                            @dd($item)--}}
                            <strong class="price">${{ $item->price }}</strong>
                        </div>

{{--                        <--Commented to live the project but have to fix this-->--}}


                        <div class="col-md-2 col-sm-3">
                            <div class="proCounter">
                                <span class="minus action-btn {{ $item->quantity > 1 ? 'rmvQty' : "" }}"
                                      data-id="{{ $item->id }}"
                                      data-qty="{{ $item->quantity }}">-</span>
                                <input type="text" value="{{ $item->quantity }}"/>
                                <span class="plus addQty action-btn" data-id="{{ $item->id }}"
                                      data-qty="{{ $item->quantity }}">+</span>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <a href="{{ route('shop.checkout.cart.remove', $item->id) }}" class="delete action-btn"
                               onclick="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
{{--            @dd('here')--}}
                <div class="row">
                    <div class="col-lg-12">
                        {{--                        <a href="{{ route('shop.checkout.onepage.index') }}" class="themeBtn action-btn proc-to-pay text-center">proceed to pay</a>--}}
                    </div>
                </div>
                <form id="add-to-cart" action="{{ route('cart.add',$item->id ) }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id">
                    <input type="hidden" name="quantity" value="1">
                </form>
                <form id="update-to-cart" action="{{ route('shop.checkout.cart.update') }}" method="POST">
                    @csrf
{{--                    <input type="hidden" name="rmvQty" value="1">--}}
                    <input type="hidden" name="item_id">
                    <input type="hidden" class="cart-qty" name="qty" value="1">
                </form>
            @else
                <div class="row cartItemCard">
                    <div class="col-sm-12 text-center font-weight-bold">
                        Your Cart is empty.
                    </div>
                    <br>
                </div>
                <a href="{{ route('shop.home.index') }}" class="themeBtn text-center">Go Back To Shop</a>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center shippngBTn">
                        {{--                        <button class="themeBtns my-5" onclick="window.location.href='step-2.php'">Proceed To Pay</button>--}}
                        <a class="themeBtns my-5" href="{{ route('shop.checkout.onepage.index') }}">Proceed To Pay</a>
                    </div>
                    <ul class="shipping-billing-col">
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i> The TorqStop Shop city,
                                blog, street 12345
                                <a href="" class="edit">edit</a>
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone"></i> <a href="tel:(123) 45678901">(123) 45678901</a> <a href="#"
                                                                                                               class="edit">edit</a>
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i><a href="mailto:TorqStop@gmail.com">
                                    TorqStop@gmail.com</a><a href="#" class="edit">edit</a></p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- END: Step 2 -->



@endsection

{{--@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')--}}

{{--@extends('shop::layouts.master')--}}

{{--@section('page_title')--}}
{{--    {{ __('shop::app.checkout.cart.title') }}--}}
{{--@stop--}}

{{--@section('content-wrapper')--}}
{{--    <cart-component></cart-component>--}}
{{--@endsection--}}

{{--@push('css')--}}
{{--    <style type="text/css">--}}
{{--        @media only screen and (max-width: 600px) {--}}
{{--            .rango-delete {--}}
{{--                margin-top: 10px;--}}
{{--                margin-left: -10px !important;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
{{--@endpush--}}

{{--@push('scripts')--}}
{{--    @include('shop::checkout.cart.coupon')--}}

{{--    <script type="text/x-template" id="cart-template">--}}
{{--        <div class="container">--}}
{{--            <section class="cart-details row no-margin col-12">--}}
{{--                <h2 class="fw6 col-12">{{ __('shop::app.checkout.cart.title') }}</h2>--}}

{{--                @if ($cart)--}}
{{--                    <div class="cart-details-header col-lg-7 col-md-12">--}}
{{--                        <div class="row cart-header col-12 no-padding">--}}
{{--                            <span class="col-8 fw6 fs16 pr0">--}}
{{--                                {{ __('velocity::app.checkout.items') }}--}}
{{--                            </span>--}}

{{--                            <span class="col-2 fw6 fs16 no-padding text-right">--}}
{{--                                {{ __('velocity::app.checkout.qty') }}--}}
{{--                            </span>--}}

{{--                            <span class="col-2 fw6 fs16 text-right pr0">--}}
{{--                                {{ __('velocity::app.checkout.subtotal') }}--}}
{{--                            </span>--}}
{{--                        </div>--}}

{{--                        <div class="cart-content col-12">--}}
{{--                            <form--}}
{{--                                method="POST"--}}
{{--                                @submit.prevent="onSubmit"--}}
{{--                                action="{{ route('shop.checkout.cart.update') }}">--}}

{{--                                <div class="cart-item-list">--}}
{{--                                    @csrf--}}

{{--                                    @foreach ($cart->items as $key => $item)--}}
{{--                                        @php--}}
{{--                                            $productBaseImage = $item->product->getTypeInstance()->getBaseImage($item);--}}

{{--                                            $product = $item->product;--}}

{{--                                            $productPrice = $product->getTypeInstance()->getProductPrices();--}}

{{--                                            if (is_null ($product->url_key)) {--}}
{{--                                                if (! is_null($product->parent)) {--}}
{{--                                                    $url_key = $product->parent->url_key;--}}
{{--                                                }--}}
{{--                                            } else {--}}
{{--                                                $url_key = $product->url_key;--}}
{{--                                            }--}}
{{--                                        @endphp--}}

{{--                                        <div class="row col-12">--}}
{{--                                            <a--}}
{{--                                                title="{{ $product->name }}"--}}
{{--                                                class="product-image-container col-2"--}}
{{--                                                href="{{ route('shop.productOrCategory.index', $url_key) }}">--}}

{{--                                                <img--}}
{{--                                                    class="card-img-top"--}}
{{--                                                    alt="{{ $product->name }}"--}}
{{--                                                    src="{{ $productBaseImage['large_image_url'] }}"--}}
{{--                                                    :onerror="`this.src='${this.$root.baseUrl}/vendor/webkul/ui/assets/images/product/large-product-placeholder.png'`">--}}
{{--                                            </a>--}}

{{--                                            <div class="product-details-content col-6 pr0">--}}
{{--                                                <div class="row item-title no-margin">--}}
{{--                                                    <a--}}
{{--                                                        href="{{ route('shop.productOrCategory.index', $url_key) }}"--}}
{{--                                                        title="{{ $product->name }}"--}}
{{--                                                        class="unset col-12 no-padding">--}}

{{--                                                        <span class="fs20 fw6 link-color">{{ $product->name }}</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}

{{--                                                @if (isset($item->additional['attributes']))--}}
{{--                                                    @foreach ($item->additional['attributes'] as $attribute)--}}
{{--                                                        <div class="row col-12 no-padding no-margin display-block item-attribute">--}}
{{--                                                            <label class="no-margin">--}}
{{--                                                                {{ $attribute['attribute_name'] }}:--}}
{{--                                                            </label>--}}
{{--                                                            <span>--}}
{{--                                                                {{ $attribute['option_label'] }}--}}
{{--                                                            </span>--}}
{{--                                                        </div>--}}
{{--                                                    @endforeach--}}
{{--                                                @endif--}}

{{--                                                <div class="row col-12 no-padding no-margin item-price">--}}
{{--                                                    <div class="product-price">--}}
{{--                                                        <span>{{ core()->currency($item->base_price) }}</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                @php--}}
{{--                                                    $moveToWishlist = trans('shop::app.checkout.cart.move-to-wishlist');--}}

{{--                                                    $showWishlist = core()->getConfigData('general.content.shop.wishlist_option') == "1" ? true : false;--}}
{{--                                                @endphp--}}

{{--                                                <div class="no-padding col-12 cursor-pointer fs16 item-actions">--}}
{{--                                                    @auth('customer')--}}
{{--                                                        @if ($showWishlist)--}}
{{--                                                            @if ($item->parent_id != 'null' || $item->parent_id != null)--}}
{{--                                                                <div class="d-inline-block">--}}
{{--                                                                    @include('shop::products.wishlist', [--}}
{{--                                                                        'route' => route('shop.movetowishlist', $item->id),--}}
{{--                                                                        'text' => "<span class='align-vertical-super'>$moveToWishlist</span>"--}}
{{--                                                                    ])--}}
{{--                                                                </div>--}}
{{--                                                            @else--}}
{{--                                                                <div class="d-inline-block">--}}
{{--                                                                    @include('shop::products.wishlist', [--}}
{{--                                                                        'route' => route('shop.movetowishlist', $item->child->id),--}}
{{--                                                                        'text' => "<span class='align-vertical-super'>$moveToWishlist</span>"--}}
{{--                                                                    ])--}}
{{--                                                                </div>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}
{{--                                                    @endauth--}}

{{--                                                    <div class="d-inline-block">--}}
{{--                                                        <a--}}
{{--                                                            class="unset"--}}
{{--                                                            href="{{ route('shop.checkout.cart.remove', ['id' => $item->id]) }}"--}}
{{--                                                            @click="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">--}}

{{--                                                            <span class="rango-delete fs24"></span>--}}
{{--                                                            <span class="align-vertical-super">{{ __('shop::app.checkout.cart.remove') }}</span>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="product-quantity col-3 no-padding">--}}
{{--                                                @if ($item->product->getTypeInstance()->showQuantityBox() === true)--}}
{{--                                                    <quantity-changer--}}
{{--                                                        :control-name="'qty[{{$item->id}}]'"--}}
{{--                                                        quantity="{{ $item->quantity }}"--}}
{{--                                                        quantity-text="{{ __('shop::app.products.quantity') }}">--}}
{{--                                                    </quantity-changer>--}}
{{--                                                @else--}}
{{--                                                    <p class="fw6 fs16 no-padding text-center ml15">--</p>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}

{{--                                            <div class="product-price fs18 col-1">--}}
{{--                                                <span class="card-current-price fw6 mr10">--}}
{{--                                                    {{ core()->currency( $item->base_total) }}--}}
{{--                                                </span>--}}
{{--                                            </div>--}}

{{--                                            @if (! cart()->isItemHaveQuantity($item))--}}
{{--                                                <div class="control-error mt-4 fs16 fw6">--}}
{{--                                                    * {{ __('shop::app.checkout.cart.quantity-error') }}--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

{{--                                {!! view_render_event('bagisto.shop.checkout.cart.controls.after', ['cart' => $cart]) !!}--}}
{{--                                    <div class="misc">--}}
{{--                                        <a--}}
{{--                                            class="theme-btn light fs16 text-center"--}}
{{--                                            href="{{ route('shop.home.index') }}">--}}
{{--                                            {{ __('shop::app.checkout.cart.continue-shopping') }}--}}
{{--                                        </a>--}}

{{--                                        @if ($item->product->getTypeInstance()->showQuantityBox() === true)--}}
{{--                                            <button--}}
{{--                                                type="submit"--}}
{{--                                                class="theme-btn light unset">--}}

{{--                                                {{ __('shop::app.checkout.cart.update-cart') }}--}}
{{--                                            </button>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                {!! view_render_event('bagisto.shop.checkout.cart.controls.after', ['cart' => $cart]) !!}--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                        @include ('shop::products.view.cross-sells')--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                {!! view_render_event('bagisto.shop.checkout.cart.summary.after', ['cart' => $cart]) !!}--}}

{{--                    @if ($cart)--}}
{{--                        <div class="col-lg-4 col-md-12 offset-lg-1 row order-summary-container">--}}
{{--                            @include('shop::checkout.total.summary', ['cart' => $cart])--}}

{{--                            <coupon-component></coupon-component>--}}
{{--                        </div>--}}
{{--                    @else--}}
{{--                        <div class="fs16 col-12 empty-cart-message">--}}
{{--                            {{ __('shop::app.checkout.cart.empty') }}--}}
{{--                        </div>--}}

{{--                        <a--}}
{{--                            class="fs16 mt15 col-12 remove-decoration continue-shopping"--}}
{{--                            href="{{ route('shop.home.index') }}">--}}

{{--                            <button type="button" class="theme-btn remove-decoration">--}}
{{--                                {{ __('shop::app.checkout.cart.continue-shopping') }}--}}
{{--                            </button>--}}
{{--                        </a>--}}
{{--                    @endif--}}

{{--                {!! view_render_event('bagisto.shop.checkout.cart.summary.after', ['cart' => $cart]) !!}--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </script>--}}

{{--    <script type="text/javascript" id="cart-template">--}}
{{--        (() => {--}}
{{--            Vue.component('cart-component', {--}}
{{--                template: '#cart-template',--}}

{{--                data: function () {--}}
{{--                    return {--}}
{{--                        isMobileDevice: this.isMobile(),--}}
{{--                    }--}}
{{--                },--}}

{{--                methods: {--}}
{{--                    removeLink(message) {--}}
{{--                        if (! confirm(message)) {--}}
{{--                            event.preventDefault();--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}
{{--            })--}}
{{--        })();--}}
{{--    </script>--}}
{{--@endpush--}}
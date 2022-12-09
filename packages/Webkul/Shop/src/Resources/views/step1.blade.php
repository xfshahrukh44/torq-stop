@extends('shop::layouts.master2')

@section('title', 'Step 1')

@section('content')

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/dfwBg.jpg')}}" alt="First slide">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-sm-0">
                    <div class="title">
                        <h2>Confirm Your Purchase</h2>
                    </div>
                </div>
            </div>
            <div class="row cartItemCard">
                <div class="col-md-1">
                    <img src="{{asset('themes/default/assets/images/check.jpg')}}" alt="">
                </div>
                <div class="col-md-6 text-left">
                    <h4>torqstop</h4>
                </div>
                <div class="col-md-2">
                    <strong class="price">$37.95</strong>
                </div>
                <div class="col-md-2">
                    <div class="proCounter">
                        <span class="minus">-</span>
                        <input type="text" value="1" />
                        <span class="plus">+</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="#" class="delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
            <div class="row cartItemCard">
                <div class="col-md-1">
                    <img src="{{asset('themes/default/assets/images/check.jpg')}}" alt="">
                </div>
                <div class="col-md-6 text-left">
                    <h4>torqstop </h4>
                </div>
                <div class="col-md-2">
                    <strong class="price">$37.95</strong>
                </div>
                <div class="col-md-2">
                    <div class="proCounter">
                        <span class="minus">-</span>
                        <input type="text" value="1" />
                        <span class="plus">+</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="#" class="delete"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center shippngBTn">
{{--                        <button class="themeBtns my-5" onclick="window.location.href='step-2.php'">Proceed To Pay</button>--}}
                        <a class="themeBtns my-5" href="{{route('shop.step2')}}">Proceed To Pay</a>
                    </div>
                    <ul class="shipping-billing-col">
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i> The TorqStop Shop city,
                                blog, street 12345
                                <a href="" class="edit">edit</a>
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone"></i> <a href="tel:(123) 45678901">(123) 45678901</a> <a href="#" class="edit">edit</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i><a href="mailto:TorqStop@gmail.com"> TorqStop@gmail.com</a><a href="#" class="edit">edit</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Step 1 -->

@endsection
@extends('shop::layouts.master2')

@section('title', 'Step 3')

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

    <!-- Begin: Step 3 -->
    <div class="checkOutStyle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="title text-center">
                        <h2>Payment Methods</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <form class="row formStyle">
                        <div class="col-md-12 mb-4 text-center">
                            <img src="{{asset('themes/default/assets/images/card-img.png')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <label>Card Number</label>
                            <input type="text" class="form-control" placeholder="CARD NUMBER">
                        </div>
                        <div class="col-md-6">
                            <label>name on card</label>
                            <input type="text" class="form-control" placeholder="CARD TITLE">
                        </div>
                        <div class="col-md-4">
                            <label>expiration date</label>
                            <input type="text" class="form-control" placeholder="MM/YY">
                        </div>
                        <div class="col-md-2">
                            <label>CVV</label>
                            <input type="text" class="form-control" placeholder="***">
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox mt-4">
                                <input type="checkbox" id="box-2">
                                <label for="box-2"><h5>save card</h5>information is encrypted and securely stored.</label>
                            </div>
                        </div>
                        <div class="col-md-12  shippngBTn mt-4 text-center">
                            <button class="themeBtns">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- END: Step 3 -->

@endsection
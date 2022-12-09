@extends('shop::layouts.master2')

@section('title', 'Step 2')

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

    <!-- Begin: Step 2 -->
    <div class="checkOutStyle">
        <div class="container">
            <form action="step-2.php" class="row justify-content-center formStyle">
                <div class="col-md-12">
                    <div class="title inner">
                        <h2>Billing Address</h2>
                        <h4>Fill the form below to complete your purchase</h4>
                        <p class="checkout-subheading"><span>Already Registered?</span> Click here to <a href="sign-in.php">Login now</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>first Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>email address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Phone</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>confirm password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label>address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Country</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>city</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Zip/Postal code</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>State/Province</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <div class="checkbox">
                        <input type="checkbox" id="box-1">
                        <label for="box-1">Create an account for later use</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="checkbox">
                        <input type="checkbox" id="box-2">
                        <label for="box-2">Ship to the same address mentioned above </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row order-summery no-gutters">
                        <div class="col-md-12 title my-5 text-center">
                            <h2>Order Summary</h2>
                        </div>
                        <div class="col-md-12 d-flex align-items-center justify-content-between">
                            <span>Subtotal (3 items)</span>
                            <strong>USD 75.00</strong>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-12 d-flex align-items-center justify-content-between">
                            <span>Shipping fee</span>
                            <strong>USD 5.00</strong>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-12">
                            <div class="applyCoupon">
                                <input type="text" class="form-control" placeholder="Enter Voucher Code">
                                <button class="btnStyle btn-block">Apply</button>
                            </div>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-12 d-flex align-items-center justify-content-between">
                            <span>Total</span>
                            <strong>USD 80.00</strong>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-12 text-center shippngBTn mt-4">
                            <a href="{{route('shop.step3')}}" class="themeBtns">proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Step 2 -->

@endsection
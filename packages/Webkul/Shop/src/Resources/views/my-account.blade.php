@extends('shop::layouts.master2')

@section('title', 'My Account')

@section('content')

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/dfwBg.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-8">
                                    <h2>My Account</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="accountSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="dfw.php" class="form-box">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" placeholder="your@email.com">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" placeholder="************">
                        </div>
                        <div class="btnSec">
                            <div class="checkBox">
                                <input type="checkbox" id="two">
                                <label for="two">Remember me</label>
                            </div>
                            <button class="themeBtn22">Login</button>
                        </div>
                    </form>
                    <div class="form-box mt-5">
                        <h4>Forgot Your password?</h4>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" placeholder="************">
                        </div>
                        <div class="checkBox my-2">
                            <input type="checkbox" id="one">
                            <label for="one">Remember me</label>
                        </div>
                        <p>Please enter your e-mail address associated with your
                            Dynamicfriction Account into the fieid below. We'll e-mail you
                            instructions to reset your password. </p>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" placeholder="your@email.com">
                        </div>
                        <div class="text-right">
                            <button class="themeBtn22">Send Request</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="profile.php" class="form-box">
                        <div class="form-group">
                            <label>First Name *</label>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label>Company Name *</label>
                            <input type="text" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label>Phone Number *</label>
                            <input type="text" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Passwaord *</label>
                            <input type="password" placeholder="***********">
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <input type="text" placeholder="Address">
                        </div>
                        <figure>
                            <img src="{{asset('themes/default/assets/images/rebort.jpg')}}" class="img-fluid" alt="">
                        </figure>
                        <a href=""></a>
                        <button class="themeBtn22 mt-4">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
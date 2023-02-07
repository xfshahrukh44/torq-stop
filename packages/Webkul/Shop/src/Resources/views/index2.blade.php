@extends('shop::layouts.master2')

@section('title', 'Home')

@section('content')

    <div class="preLoader black">
        <img src="{{asset("themes/default/assets/images/pre12.png")}}" alt="">
    </div>
    <div class="preLoader white"></div>
    <div class="main-slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div data-interval="5000" class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/mainBanner.jpg')}}"
                         alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-6">
                                    <h2>TorqStop
                                        Products</h2>
                                    <p>PROTECT YOUR INVESTMENT AND KEEP <br>
                                        YOUR FLEET RUNNING STRONG.</p>
                                    {{--                                    <a href="" class="themeBtn"><span>Shop Now</span></a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-interval="5000" class="carousel-item">
                    <video autoplay loop muted>
                        <source src="{{asset('themes/default/assets/images/slide1.mp4')}}">
                    </video>
                    {{--                    <div class="carousel-caption">--}}
                    {{--                        <div class="container">--}}
                    {{--                            <div class="row align-items-center justify-content-between">--}}
                    {{--                                <div class="col-md-6">--}}
                    {{--                                    <h2>TorqStop--}}
                    {{--                                        Products</h2>--}}
                    {{--                                    <p>PROTECT YOUR INVESTMENT AND KEEP <br>--}}
                    {{--                                        YOUR FLEET RUNNING STRONG.</p>--}}
                    {{--                                    --}}{{--                                    <a href="" class="themeBtn"><span>Shop Now</span></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div data-interval="5000" class="carousel-item">
                    <video autoplay loop muted>
                        <source src="{{asset('themes/default/assets/images/slide2.mp4')}}">
                    </video>
                </div>
                <div data-interval="5000" class="carousel-item">
                    <video autoplay loop muted>
                        <source src="{{asset('themes/default/assets/images/slide3.mp4')}}">
                    </video>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fas fa-angle-left"></i>
                <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fas fa-angle-right"></i>
                <!-- <span class="sr-only">Next</span> -->
            </a>
        </div>
    </div>

    <section class="taglineSec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <span>With over 80 years manufacturing experience,</span> OPC Parts produces OE-quality, 100% NEW Light,
                        Medium and Heavy-Duty Commercial Vehicle brake components under the <span>TorqStop™</span> brand or under
                        your own Private Label.
                    </p>
                    <p>
                        OPC Parts believes in building longstanding, mutually beneficial relationships. Customer
                        service is paramount. Our products are high-quality, competitively priced, and readily available
                        to keep your equipment running and safe.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="cardsSec">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{asset('themes/default/assets/images/aboutImg.jpg')}}" alt="">
                            <div class="iconOverlay">
                                <i class="fas fa-file"></i>
                            </div>
                        </figure>
                        <div class="content">
                            <h4>
                                Catalogs and Literature
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{asset('themes/default/assets/images/aboutImg.jpg')}}" alt="">
                            <div class="iconOverlay">
                                <i class="fas fa-file"></i>
                            </div>
                        </figure>
                        <div class="content">
                            <h4>
                                Distributor Portal
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{asset('themes/default/assets/images/aboutImg.jpg')}}" alt="">
                            <div class="iconOverlay">
                                <i class="fas fa-file"></i>
                            </div>
                        </figure>
                        <div class="content">
                            <h4>
                                e-CATALOG
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{asset('themes/default/assets/images/aboutImg.jpg')}}" alt="">
                            <div class="iconOverlay">
                                <i class="fas fa-file"></i>
                            </div>
                        </figure>
                        <div class="content">
                            <h4>
                                CONTACT YOUR TERRITORY REPRESENTATIVE
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{asset('themes/default/assets/images/aboutImg.jpg')}}" alt="">
                            <div class="iconOverlay">
                                <i class="fas fa-file"></i>
                            </div>
                        </figure>
                        <div class="content">
                            <h4>
                                Find a Distributor
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <section class="productSec">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro1.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro2.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro3.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro4.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro5.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro6.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro7.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro8.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro9.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro10.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro11.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro12.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro5.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro6.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro7.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3">--}}
    {{--                    <a href="#" class="productBox">--}}
    {{--                        <figure class="reveal">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/pro8.png')}}" class="img-fluid" alt="">--}}
    {{--                        </figure>--}}
    {{--                    </a>--}}
    {{--                    <h4>CARBON ALLOY ROTORS</h4>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <section class="aboutSec">--}}
    {{--        <div class="container-fluid px-0">--}}
    {{--            <div class="row no-gutters align-items-center justify-content-end">--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <div class="aboutContent">--}}
    {{--                        <h2 class="secHeading">About</h2>--}}
    {{--                        <p><strong>Los Angeles,CA</strong></p>--}}
    {{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting--}}
    {{--                            industry has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
    {{--                            printer took a galley of type and remaining essentially unchanged. </p>--}}
    {{--                        <p>It is a long established fact that a reader will be distracted by the readable content of a--}}
    {{--                            page--}}
    {{--                            when looking at point of using Ipsum is that it has a of more-or-less normal distribution of--}}
    {{--                            letters.</p>--}}
    {{--                        <a href="" class="themeBtns"><span>Read More</span></a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-6">--}}
    {{--                    <figure class="reveal">--}}
    {{--                        <img src="{{asset('themes/default/assets/images/aboutImg.jpg')}}" class="img-fluid w-100"--}}
    {{--                             alt="">--}}
    {{--                    </figure>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <section class="shopSec">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <h2 class="secHeading">OUR SHOP</h2>--}}
    {{--                    <h3>Sort by Categories</h3>--}}
    {{--                    <ul>--}}
    {{--                        <li><a href="javascript:;" id="all-tab" data-toggle="pill" data-target="#pills-all"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">All</a></li>--}}

    {{--                        <li><a href="javascript:;" id="pads-tab" data-toggle="pill" data-target="#pills-pads"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Pads</a></li>--}}

    {{--                        <li><a href="javascript:;" id="rotors-tab" data-toggle="pill" data-target="#pills-rotors"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Rotors</a></li>--}}

    {{--                        <li><a href="javascript:;" id="caliper-tab" data-toggle="pill" data-target="#pills-caliper"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Caliper</a></li>--}}

    {{--                        <li><a href="javascript:;" id="hydraulics-tab" data-toggle="pill"--}}
    {{--                               data-target="#pills-hydraulics" type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Hydraulics</a></li>--}}

    {{--                        <li><a href="javascript:;" id="parts-tab" data-toggle="pill" data-target="#pills-parts"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Other Parts</a></li>--}}

    {{--                        <li><a href="javascript:;" id="awards-tab" data-toggle="pill" data-target="#pills-awards"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Awards</a></li>--}}

    {{--                        <li><a href="javascript:;" id="video-tab" data-toggle="pill" data-target="#pills-video"--}}
    {{--                               type="button"--}}
    {{--                               role="tab" aria-controls="pills-home" aria-selected="true">Video</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="tab-content" id="pills-tabContent">--}}
    {{--                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="all-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-pads" role="tabpanel" aria-labelledby="pads-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-rotors" role="tabpanel" aria-labelledby="rotors-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-caliper" role="tabpanel" aria-labelledby="caliper-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-hydraulics" role="tabpanel" aria-labelledby="hydraulics-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-parts" role="tabpanel" aria-labelledby="parts-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-awards" role="tabpanel" aria-labelledby="awards-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="video-tab">--}}
    {{--                    <div class="row mt-5">--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-3">--}}
    {{--                            <a href="javascript:;" class="productBox">--}}
    {{--                                <figure class="reveal">--}}
    {{--                                    <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid"--}}
    {{--                                         alt="">--}}
    {{--                                </figure>--}}
    {{--                            </a>--}}
    {{--                            <div class="shopContent">--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of--}}
    {{--                                    the printing and typesetting...<span>$200</span></p>--}}
    {{--                                <a href="">aDD TO CART</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 text-center">--}}
    {{--                            <img src="{{asset('themes/default/assets/images/loading.png')}}" class="img-fluid" alt="">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <section class="testimonialSec">--}}
    {{--        <div class="container">--}}
    {{--            <h2 class="secHeading text-center mb-5">TESTIMONIALS</h2>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="testimonialSlider">--}}
    {{--                        <div class="testimonialBox">--}}
    {{--                            <figure>--}}
    {{--                                <img src="{{asset('themes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
    {{--                            </figure>--}}
    {{--                            <h4>David kennedy<span>Truck driver</span></h4>--}}
    {{--                            <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor--}}
    {{--                                consectetur--}}
    {{--                                adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat--}}
    {{--                                psum.</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="testimonialBox">--}}
    {{--                            <figure>--}}
    {{--                                <img src="{{asset('themes/default/assets/images/user2.png')}}" class="img-fluid" alt="">--}}
    {{--                            </figure>--}}
    {{--                            <h4>David kennedy<span>Truck driver</span></h4>--}}
    {{--                            <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor--}}
    {{--                                consectetur--}}
    {{--                                adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat--}}
    {{--                                psum.</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="testimonialBox">--}}
    {{--                            <figure>--}}
    {{--                                <img src="{{asset('themes/default/assets/images/user3.png')}}" class="img-fluid" alt="">--}}
    {{--                            </figure>--}}
    {{--                            <h4>David kennedy<span>Truck driver</span></h4>--}}
    {{--                            <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor--}}
    {{--                                consectetur--}}
    {{--                                adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat--}}
    {{--                                psum.</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="testimonialBox">--}}
    {{--                            <figure>--}}
    {{--                                <img src="{{asset('themes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
    {{--                            </figure>--}}
    {{--                            <h4>David kennedy<span>Truck driver</span></h4>--}}
    {{--                            <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor--}}
    {{--                                consectetur--}}
    {{--                                adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat--}}
    {{--                                psum.</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <img src="{{asset('themes/default/assets/images/testimonialBg.png')}}" class="img-fluid testimonialBottom"--}}
    {{--             alt="">--}}
    {{--    </section>--}}

    <section class="signupSec">
        <img src="{{asset('themes/default/assets/images/truck.png')}}" class="img-fluid truck" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2>Sign Up For <br>
                        Our Newsletter</h2>
                    <a href="" class="themeBtns"><span>Shop Now</span></a>
                </div>
            </div>
        </div>
    </section>

@endsection
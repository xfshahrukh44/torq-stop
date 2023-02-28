@extends('shop::layouts.master2')

@section('title', 'About')

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
                                    <h2>About us</h2>
                                </div>
{{--                                <div class="col-md-6">--}}
{{--                                    <figure class="blast">--}}
{{--                                        <img src="{{asset('themes/default/assets/images/abt1.png')}}" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutInner">
        <div class="container">
{{--            <div class="row align-items-center mb-5">--}}
{{--                <div class="col-12">--}}
{{--                    <figure class="reveal">--}}
{{--                        <a href="{{asset('themes/default/assets/images/abt2.jpg')}}" data-fancybox="group">--}}
{{--                            <img src="{{asset('themes/default/assets/images/abt2.jpg')}}"/>--}}
{{--                        </a>--}}
{{--                    </figure>--}}
{{--                    <div class="playBtn">--}}
{{--                        <a href="#"><i class="fas fa-play"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row align-items-center">
                <div class="col-md-6">
                    <figure class="reveal">
                        <img src="{{asset('themes/default/assets/images/aboutIntro.jpg')}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <p>With over 80 years combined experience in the
                        automotive and heavy-duty aftermarket, the founders of OPC Parts had a vision to bring the next
                        level of quality, value and service to the industry. </p>
                </div>
                <div class="col-md-12">
                    <p>TorqStop™ offers a wide range of premium brake products, manufactured in ISO 9001:2015 and
                        IATF16949: 2016 certified factories. All of our light, medium and heavy-duty brake products
                        conform to applicable FMVSS 105, FMVSS 135, FMVSS 121 and ECE R90requirements. Our broad
                        coverage, outstanding value and user-friendly lookup tools make TorqStop™ an easy choice for all
                        of your commercial vehicle brake parts needs. All products are 100% NEW and CORE-FREE – saving
                        you time, money and unnecessary handling of dirty, expensive cores.</p>
                </div>
                <div class="col-md-7">
                    <h2 class="secHeading">WHY CHOOSE US
                    </h2>
                    <p>First three reasons: Quality, Quality and Quality. We do not compromise on this subject.</p>
                    <ul class="chooselist1">
                        <li> IATF 16949:2016 Certified Factories</li>
                        <li> ISO 9001:2015 Certified</li>
                        <li> FMVSS 121 Compliant</li>
                        <li> ECE R90 Compliant</li>
                    </ul>
                    <ul class="chooselist2">
                        <li>Focused on long-term relationships, not short-term profits</li>
                        <li>Strong belief in integrity and transparency</li>
                        <li>Low Overhead allows for competitive programs</li>
                        <li>Speed to market on New Product Introduction</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <figure>
                        <img src="{{asset('themes/default/assets/images/about1.jpg')}}" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-12">
                    <h2 class="secHeading">Our Vision
                    </h2>
                    <p>To be a leading aftermarket supplier, widely recognized for providing high-quality brake
                        components and world-class customer service at competitive prices; delivering maximum value to
                        our customers</p>

                </div>
                <div class="col-md-6">
                    <figure class="reveal">
                        <img src="{{asset('themes/default/assets/images/about2.jpg')}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h2 class="secHeading">Our
                        Mission</h2>
                    <p>To exceed our customer’s expectations in quality, delivery, and cost, through close customer
                        interaction and continuous improvement. We will offer best-in-class cataloging, website, and
                        product data in order to ensure our customers get the right part, on time, at the right
                        price</p>
                </div>
{{--                <div class="col-12">--}}
{{--                    <h2 class="secHeading">WHO WE ARE?</h2>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the--}}
{{--                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and--}}
{{--                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the--}}
{{--                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the--}}
{{--                        1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>--}}
{{--                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the--}}
{{--                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and--}}
{{--                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the--}}
{{--                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the--}}
{{--                        1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="abtContnt">--}}
{{--                        <h4>HAPPY CLIENTS</h4>--}}
{{--                        <span>95%</span>--}}
{{--                    </div>--}}
{{--                    <div class="abtContnt">--}}
{{--                        <h4>COMPLETED GOALS</h4>--}}
{{--                        <span>100%</span>--}}
{{--                    </div>--}}
{{--                    <div class="abtContnt">--}}
{{--                        <h4>DISCOUNT SALES</h4>--}}
{{--                        <span>95%</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>


    <section class="signupSec">
        <img src="{{asset('themes/default/assets/images/truck.png')}}" class="img-fluid truck" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2>Sign Up For <br>
                        Our Newsletter</h2>
{{--                    <a href="" class="themeBtns"><span>Shop Now</span></a>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
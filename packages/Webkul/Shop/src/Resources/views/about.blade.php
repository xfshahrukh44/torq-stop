@extends('shop::layouts.master2')

@section('title', 'About')

@section('content')

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/innerBg.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-6">
                                    <h2>About us</h2>
                                </div>
                                <div class="col-md-6">
                                    <figure class="blast">
                                        <img src="{{asset('themes/default/assets/images/abt1.png')}}" class="img-fluid" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutInner">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-12">
                    <figure class="reveal">
                        <a href="{{asset('themes/default/assets/images/abt2.jpg')}}" data-fancybox="group">
                            <img src="{{asset('themes/default/assets/images/abt2.jpg')}}"/>
                        </a>
                    </figure>
                    <div class="playBtn">
                        <a href="#"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <figure class="reveal">
                        <img src="{{asset('themes/default/assets/images/abt3.png')}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h2 class="secHeading">About</h2>
                    <p>Our mission is to provide superior customer service matched by excellence in our products. From
                        semi-truck brush to grille guards, our team at TorqStop is ready to face any challenge. At the
                        end of the day, we want to offer you products that will take you safely on your journey,
                        wherever it may be.</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-12">
                    <h2 class="secHeading">WHY CHOOSE US
                    </h2>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-md-6">
                    <figure class="reveal">
                        <img src="{{asset('themes/default/assets/images/abt4.jpg')}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h2 class="secHeading">Our
                        Mission</h2>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                </div>
                <div class="col-12">
                    <h2 class="secHeading">WHO WE ARE?</h2>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                </div>
                <div class="col-md-6">
                    <div class="abtContnt">
                        <h4>HAPPY CLIENTS</h4>
                        <span>95%</span>
                    </div>
                    <div class="abtContnt">
                        <h4>COMPLETED GOALS</h4>
                        <span>100%</span>
                    </div>
                    <div class="abtContnt">
                        <h4>DISCOUNT SALES</h4>
                        <span>95%</span>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <h2 class="secHeading">MEET OUR TEAM</h2>
                <div class="col-md-4">
                    <div class="teamBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/team1.jpg')}}" class="img-fluid" alt="">
                        </figure>
                        <p>- David Joe</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teamBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/team2.jpg')}}" class="img-fluid" alt="">
                        </figure>
                        <p>- Peeter</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teamBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/team3.jpg')}}" class="img-fluid" alt="">
                        </figure>
                        <p>- Jhon Doe</p>
                    </div>
                </div>
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
                    <a href="" class="themeBtns"><span>Shop Now</span></a>
                </div>
            </div>
        </div>
    </section>

@endsection
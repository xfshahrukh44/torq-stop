@extends('shop::layouts.master2')

@section('title', 'About')

@section('content')
    @php
        $decoded_content = json_decode($about->content);
    @endphp

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
                                    <h2>{{$about->page_title}}</h2>
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
                        <img src="{{optional($about->page->getMedia('about_Section_Image2')->first())->getUrl()}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    {!! $decoded_content->about_sec_des ?? ''!!}
                </div>
                <div class="col-md-12">
                    {!! $decoded_content->about_sec_des2 ?? ''!!}
                </div>
                <div class="col-md-7">
                    <h2 class="secHeading"> {!! $decoded_content->aboutHeading1 ?? ''!!}
                    </h2>
                    {!! $decoded_content->about_sec_des3 ?? ''!!}
                    <h2 class="secHeading">
                        {!! $decoded_content->aboutHeading2 ?? ''!!}
                    </h2>
                    {!! $decoded_content->about_sec_des4 ?? ''!!}
                </div>
                <div class="col-md-5">
                    <figure>
                        <img src="{{asset('themes/default/assets/images/about1.jpg')}}" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-12">
                    <h2 class="secHeading">{{$decoded_content->aboutHeading3 ?? ''}}
                    </h2>
                    <p>  {!! $decoded_content->about_sec_des5 ?? ''!!}</p>

                </div>
                <div class="col-md-6">
                    <figure class="reveal">
                        <img src="{{optional($about->page->getMedia('about_Section_Image3')->first())->getUrl()}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h2 class="secHeading">  {!! $decoded_content->aboutHeading4 ?? ''!!}</h2>
                    <p>  {!! $decoded_content->about_sec_des6 ?? ''!!}</p>
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
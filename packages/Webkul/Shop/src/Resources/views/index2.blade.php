@extends('shop::layouts.master2')

@section('title', 'Home')

@section('content')
@php
    $decoded_content = json_decode($home->content);
@endphp
    <div class="preLoader black">
        {{--        <img src="{{asset("themes/default/assets/images/pre12.png")}}" alt="">--}}
        <img src="{{optional($home->page->getMedia('logo')->first())->getUrl()}}" alt="">
    </div>
    <div class="preLoader white"></div>
    <div class="main-slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                {{--                <div data-interval="5000" class="carousel-item active">--}}
                {{--                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/mainBanner.jpg')}}"--}}
                {{--                         alt="First slide">--}}
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
                {{--                </div>--}}
                <div data-interval="5000" class="carousel-item active">
                    <video autoplay loop muted>
                        <source src="{{optional($home->page->getMedia('slider_image1')->first())->getUrl()}}">
                    </video>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-8">
{{--                                    <h2>TorqStop--}}
{{--                                        Products</h2>--}}
                                    <img src="{{optional($home->page->getMedia('logo')->first())->getUrl()}}" alt="" class="img-fluid">
                                    <p>{!!  $decoded_content->sliderHeading0 ?? '' !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-interval="5000" class="carousel-item">
                    <video autoplay loop muted>
                        <source src="{{optional($home->page->getMedia('slider_image2')->first())->getUrl()}}">
                    </video>
                    <div class="carousel-caption  text-white">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-8">
                                    <img src="{{optional($home->page->getMedia('logo')->first())->getUrl()}}" alt="" class="img-fluid">
                                    <h2 class="text-white">
                                        {!!  $decoded_content->sliderHeading1 ?? '' !!}
                                    </h2>
                                    <p>
                                        {!!  $decoded_content->sliderDes1 ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-interval="5000" class="carousel-item">
                    <img class="img-fluid w-100" src="{{optional($home->page->getMedia('slider_image3')->first())->getUrl()}}"
                         alt="First slide">
                    <div class="carousel-caption text-white">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-10">
                                    <img src="{{optional($home->page->getMedia('logo')->first())->getUrl()}}" alt="" class="img-fluid">
                                    <h2 class="text-white">
                                        {!!  $decoded_content->sliderHeading2 ?? '' !!}
                                    </h2>
                                    <p>
                                        {!!  $decoded_content->sliderDes2 ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        {!! $decoded_content->content ?? '' !!}
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
                            {{--                            <a href="{{asset('themes/default/assets/images/torqStop-R7.jpg')}}" data-fancybox="PDF"--}}
                            {{--                            <a target="_blank" href="{{asset('pdf/torq.pdf')}}" data-fancybox="PDF" data-download-src="{{asset('themes/default/assets/images/torqStop-R7.jpg')}}">--}}

                            <img src="{{optional($home->page->getMedia('info_image1')->first())->getUrl()}}" alt="">
                            <div class="iconOverlay">
                                <div class="dropdown">
                                    <button type="button" data-toggle="dropdown" aria-expanded="false"><i
                                            class="fas fa-file"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{asset('pdf/pfa.pdf')}}" data-fancybox="PDF"
                                           >Product Flyer </a>
                                        <a class="dropdown-item" href="{{route("catalogue")}}">QR Catalog</a>
                                    </div>
                                </div>
                            </div>

                        </figure>
                        <div class="content">
                            <h4>
                                {!!  $decoded_content->infoHeading0 ?? '' !!}
                            </h4>
                        </div>
                        {{--                        <div class="collapse" id="collapseExample">--}}
                        {{--                            <div class="card card-body" style="background: #ed7d20;">--}}
                        {{--                                <ul class="text-center">--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="{{asset('pdf/pfa.pdf')}}" data-fancybox="PDF" style="color: white;">Flyer (PFA)</a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="{{asset('pdf/torq.pdf')}}" data-fancybox="PDF" style="color: white;">PDF 2</a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{optional($home->page->getMedia('info_image2')->first())->getUrl()}}" alt="">
                            <a href="https://torqstop-ecat.com/Login.aspx?indexlog=logon" target="_blank">
                                <div class="iconOverlay">
                                    <i class="fas fa-file"></i>
                                </div>
                            </a>
                        </figure>
                        <div class="content">
                            <h4>
                                {!!  $decoded_content->infoHeading1 ?? '' !!}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{optional($home->page->getMedia('info_image3')->first())->getUrl()}}" alt="">
                            <a href="https://torqstop-ecat.com" target="_blank">
                                <div class="iconOverlay">
                                    <i class="fas fa-file"></i>
                                </div>
                            </a>
                        </figure>
                        <div class="content">
                            <h4>
                                {!!  $decoded_content->infoHeading2 ?? '' !!}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{optional($home->page->getMedia('info_image4')->first())->getUrl()}}" alt="">
                            <a href="#" class="anchor_find_a_distributor">
                                <div class="iconOverlay">
                                    <i class="fas fa-file"></i>
                                </div>
                            </a>
                        </figure>
                        <div class="content">
                            <h4>
                                {!!  $decoded_content->infoHeading3 ?? '' !!}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infoCard">
                        <figure>
                            <img src="{{optional($home->page->getMedia('info_image5')->first())->getUrl()}}" alt="">
                            <a href="#" class="anchor_find_a_distributor">
                                <div class="iconOverlay">
                                    <i class="fas fa-file"></i>
                                </div>
                            </a>
                        </figure>
                        <div class="content">
                            <h4>
                                {!!  $decoded_content->infoHeading4 ?? '' !!}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="signupSec">--}}
{{--        <img src="{{asset('themes/default/assets/images/truck.png')}}" class="img-fluid truck" alt="">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <h2>Sign Up For <br>--}}
{{--                        Our Newsletter</h2>--}}
{{--                    --}}{{--                    <a href="" class="themeBtns"><span>Shop Now</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection

@section('script')
    <script>
        $(document).ready(function() {

            // 'principal': 'Don Orrell',
            // 'rep_group': 'OPC Parts',
            // 'phone': '704-996-6896',
            // 'email': 'don@opcparts.com',
            // 'territory': 'AK',

            let stateData = [
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'AK',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'AL',
                },
                {
                    'principal': 'Kyle K. Jones',
                    'rep_group': 'Cree & Cree',
                    'phone': '214-850-7331',
                    'email': 'kjones@ccisales.com',
                    'territory': 'AR',
                },
                {
                    'principal': 'Lance Smaw',
                    'rep_group': 'Tri-Plus Sales',
                    'phone': '480-797-6785',
                    'email': 'lance@triplussales.com',
                    'territory': 'AZ',
                },
                {
                    'principal': 'Ron Bessette',
                    'rep_group': 'GJC Sales',
                    'phone': '510-774-3394',
                    'email': 'ronbessette@sbcglobal.net',
                    'territory': 'CA',
                },
                {
                    'principal': 'Lance Smaw',
                    'rep_group': 'Tri-Plus Sales',
                    'phone': '480-797-6785',
                    'email': 'lance@triplussales.com',
                    'territory': 'CO',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'CT',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'DE',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'FL',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'GA',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'HI',
                },
                {
                    'principal': 'Larry Smith',
                    'rep_group': 'Industry Sales & Solutions',
                    'phone': '913-522-9088',
                    'email': 'Lwsmith56@yahoo.com',
                    'territory': 'IA',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'ID',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'IL',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'IN',
                },
                {
                    'principal': 'Larry Smith',
                    'rep_group': 'Industry Sales & Solutions',
                    'phone': '913-522-9088',
                    'email': 'Lwsmith56@yahoo.com',
                    'territory': 'KS',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'KY',
                },
                {
                    'principal': 'Kyle K. Jones',
                    'rep_group': 'Cree & Cree',
                    'phone': '214-850-7331',
                    'email': 'kjones@ccisales.com',
                    'territory': 'LA',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'MA',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'MD',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'ME',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'MI',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'MN',
                },
                {
                    'principal': 'Larry Smith',
                    'rep_group': 'Industry Sales & Solutions',
                    'phone': '913-522-9088',
                    'email': 'Lwsmith56@yahoo.com',
                    'territory': 'MO',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'MT',
                },
                {
                    'principal': 'Kyle K. Jones',
                    'rep_group': 'Cree & Cree',
                    'phone': '214-850-7331',
                    'email': 'kjones@ccisales.com',
                    'territory': 'MS',
                },
                {
                    'principal': 'Gary Taylor',
                    'rep_group': 'Gary Taylor Sales',
                    'phone': '540-520-2285',
                    'email': 'gtayloerep@gmail.com',
                    'territory': 'NC',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'ND',
                },
                {
                    'principal': 'Larry Smith',
                    'rep_group': 'Industry Sales & Solutions',
                    'phone': '913-522-9088',
                    'email': 'Lwsmith56@yahoo.com',
                    'territory': 'NE',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'NH',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'NJ',
                },
                {
                    'principal': 'Lance Smaw',
                    'rep_group': 'Tri-Plus Sales',
                    'phone': '480-797-6785',
                    'email': 'lance@triplussales.com',
                    'territory': 'NM',
                },
                {
                    'principal': 'Lance Smaw',
                    'rep_group': 'Tri-Plus Sales',
                    'phone': '480-797-6785',
                    'email': 'lance@triplussales.com',
                    'territory': 'NV',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'NY',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'OH',
                },
                {
                    'principal': 'Kyle K. Jones',
                    'rep_group': 'Cree & Cree',
                    'phone': '214-850-7331',
                    'email': 'kjones@ccisales.com',
                    'territory': 'OK',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'OR',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'PA',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'PR',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'RI',
                },
                {
                    'principal': 'Gary Taylor',
                    'rep_group': 'Gary Taylor Sales',
                    'phone': '540-520-2285',
                    'email': 'gtayloerep@gmail.com',
                    'territory': 'SC',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'SD',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'TN',
                },
                {
                    'principal': 'Kyle K. Jones',
                    'rep_group': 'Cree & Cree',
                    'phone': '214-850-7331',
                    'email': 'kjones@ccisales.com',
                    'territory': 'TX',
                },
                {
                    'principal': 'Lance Smaw',
                    'rep_group': 'Tri-Plus Sales',
                    'phone': '480-797-6785',
                    'email': 'lance@triplussales.com',
                    'territory': 'UT',
                },
                {
                    'principal': 'Gary Taylor',
                    'rep_group': 'Gary Taylor Sales',
                    'phone': '540-520-2285',
                    'email': 'gtayloerep@gmail.com',
                    'territory': 'VA',
                },
                {
                    'principal': 'Gary Taylor',
                    'rep_group': 'Gary Taylor Sales',
                    'phone': '540-520-2285',
                    'email': 'gtayloerep@gmail.com',
                    'territory': 'WV',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'VT',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'WA',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'WI',
                },
                {
                    'principal': 'Don Orrell',
                    'rep_group': 'OPC Parts',
                    'phone': '704-996-6896',
                    'email': 'don@opcparts.com',
                    'territory': 'WV',
                },
            ];

            $('#map').usmap({
                stateStyles: {fill: '#ed7d20'},
                stateHoverStyles: {fill: 'red'},
                stateHoverAnimation: 300,
                click: function(event, data) {
                    // console.log('data', data);
                    $('#body_modal_state_vendors').html('');
                    $('#exampleModalLongTitle2').html('Vendor Across State ('+data.name+')');

                    stateData.forEach((item) => {
                        console.log(item.territory == data.name);
                        if (item.territory == data.name) {
                            $('#body_modal_state_vendors').append(`<tr>
                                                                        <td>`+item.principal+`</td>
                                                                        <td>`+item.rep_group+`</td>
                                                                        <td>
                                                                            <a href="tel:`+item.phone+`">`+item.phone+`</a>
                                                                        </td>
                                                                        <td>`+item.email+`</td>
                                                                    </tr>`);
                        }
                    })

                    $('#modal_state_vendors').modal('show');
                }
            });

            $('.anchor_find_a_distributor').on('click', function () {
                $('#modal_us_map').modal('show');
            });
        });
    </script>
@endsection
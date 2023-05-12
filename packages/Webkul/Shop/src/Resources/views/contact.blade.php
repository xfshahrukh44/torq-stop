@extends('shop::layouts.master2')

@section('title', 'Contact')

@section('content')
    @php
        $decoded_content = json_decode($contact->content);
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
                                <div class="col-md-7">
                                    <h2>Contact Us</h2>
                                </div>
{{--                                <div class="col-md-5">--}}
{{--                                    <figure class="blast">--}}
{{--                                        <img src="{{asset('themes/default/assets/images/abt1.png')}}" class="img-fluid" alt="">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contactInner">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="300">
                    <a href="tel:18889966896" class="cntctInfo"><i class="{{$decoded_content->phoneIcon ?? ''}}"></i>{{$decoded_content->trollNum ?? ''}}(Toll-Free)</a>
                    <a href="tel:19809877272" class="cntctInfo">{{$decoded_content->localNum ?? ''}}(Local)</a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2500" data-aos-offset="300">
                    <a href="javascript:void(0)" class="cntctInfo"><i class="{{$decoded_content->addIcon ?? ''}}"></i>{{$decoded_content->address ?? ''}}</a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="300">
                    <a href="mailto:info@torqStop.com" class="cntctInfo"><i class="{{$decoded_content->emailIcon ?? ''}}"></i>{{$decoded_content->email ?? ''}}</a>
                </div>
{{--                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="300">--}}
{{--                    <a href="tel:19809877272" class="cntctInfo"><i class="fas fa-phone-alt"></i>1-980-987-7272 (Local)</a>--}}
{{--                </div>--}}
            </div>
            <div class="row getContnt">
                <form class="row getContnt" action="{{route('front.send_mail')}}" method="POST">
                    <div class="col-12">
                        <h4>Contact Form</h4>
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="Full Name" name="name" required style="color: white;">
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="Phone Number" name="phone" required style="color: white;">
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="Company name" name="company" required style="color: white;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Email adddress" name="email" required style="color: white;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Subject" name="subject" required style="color: white;">
                    </div>
                    <div class="col-12">
                        <textarea  rows="10" placeholder="Message" name="message" required style="color: white;"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

{{--    <section class="mapSec p-0">--}}
{{--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004069.896900944!2d-104.65611544442767!3d37.27565371492453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1663715818534!5m2!1sen!2s" width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--    </section>--}}

{{--    <section class="signupSec">--}}
{{--        <img src="{{asset('themes/default/assets/images/truck.png')}}" class="img-fluid truck" alt="">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <h2>Sign Up For <br>--}}
{{--                        Our Newsletter</h2>--}}
{{--                    <a href="" class="themeBtns"><span>Shop Now</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
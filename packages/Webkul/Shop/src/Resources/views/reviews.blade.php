@extends('shop::layouts.master2')

@section('title', 'Reviews')

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
                                <div class="col-md-7">
                                    <h2>Reviews</h2>
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


    <section class="reviewSec">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('themes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('themes/default/assets/images/user2.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('themes/default/assets/images/user3.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('themes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('themes/default/assets/images/user2.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('themes/default/assets/images/user3.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user2.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user3.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user2.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user3.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user1.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user2.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="testimonialBox">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('temes/default/assets/images/user3.png')}}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <h4>David kennedy<span>Truck driver</span></h4>--}}
{{--                        <p>Lorem ipsum dolor sit a consectetur adipiscing ex ea consequat Lorem ipsum dolor consectetur--}}
{{--                            adipiscing ex ea commodo consequat psum consectetur adipiscing commodo consequat psum.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">

                <div class="col-md-12">
                    <form class="reviewForm" method="POST" action="{{route('reviewForm.shop')}}" enctype="multipart/form-data">
                        @csrf
                        <h4>Submit A Review</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <input name="customer_name" type="text" placeholder="Name" required style="color: white;">
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Email" required style="color: white;">
                            </div>
                            <div class="col-md-12">
                                <input name="company_name" type="text" placeholder="Company Name" style="color: white;">
                            </div>
                            <div class="col-md-12">
                                <textarea name="review" rows="7" style="color: white;"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
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
                    {{--                    <a href="" class="themeBtns"><span>Shop Now</span></a>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
@extends('shop::layouts.master2')

@section('title', 'Shop')

@section('content')

    <div class="main-slider innerbaner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100" src="{{asset('themes/default/assets/images/innerBg.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-7">
                                    <h2>Shop</h2>
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

    <section class="shopSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="secHeading">OUR SHOP</h2>
                    <h3>Sort by Categories</h3>
                    <ul>
                        <li><a href="">All</a></li>
                        <li><a href="">Pads</a></li>
                        <li><a href="">Rotors</a></li>
                        <li><a href="">Caliper</a></li>
                        <li><a href="">Hydraulics</a></li>
                        <li><a href="">Other Parts</a></li>
                        <li><a href="">Awards</a></li>
                        <li><a href="">Video</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop5.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop6.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop7.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop8.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop2.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop3.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="productBox">
                        <figure class="reveal">
                            <img src="{{asset('themes/default/assets/images/shop4.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="shopContent">
                        <p>Lorem Ipsum is simply dummy text of
                            the printing and typesetting...<span>$200</span></p>
                        <a href="">aDD TO CART</a>
                    </div>
                </div>

            </div>
        </div>
        <figure class="shadowSec">
            <img src="{{asset('themes/default/assets/images/productBg.png')}}" alt="">
        </figure>
    </section>

    <section class="dfwSec">
        <div class="container-fluid">
            {{--categories--}}
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @if($categories)
                    @foreach($categories as $category)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link btn_category {!! $data['category_id'] && $category->id == $data['category_id'] ? 'active' : '' !!}" data-id="{{$category->id}}" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                {{$category->name ?? ''}}
                            </button>
                        </li>
                    @endforeach
                @endif
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    {{--filters--}}
                    <div class="row getForm">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center w-100">
                                <div class="frictionForm">
                                    <select class="year" id="select_year">
                                        <option value="">YEAR</option>
                                        @foreach($year_options as $year_option)
                                            <option value="{{$year_option->field_value}}" {!! $data['year'] && $data['year'] == $year_option->field_value ? 'selected' : '' !!}>{{$year_option->field_value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year" id="select_make">
                                        <option value="">Make</option>
                                        @foreach($make_options as $make_option)
                                            <option value="{{$make_option->field_value}}" {!! $data['make'] && $data['make'] == $make_option->field_value ? 'selected' : '' !!}>{{$make_option->field_value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="frictionForm">
                                    <select class="year" id="select_model">
                                        <option value="">Model</option>
                                        @foreach($model_options as $model_option)
                                            <option value="{{$model_option->field_value}}" {!! $data['model'] && $data['model'] == $model_option->field_value ? 'selected' : '' !!}>{{$model_option->field_value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex align-items-center">
                                <div class="frictionForm">
                                    <input type="text" id="input_name" placeholder="Enter Part Number" value="{{$data['name'] ?? ''}}">
                                </div>
                                <button class="btnform" id="btn_submit">Search</button>
                            </div>
                        </div>

                        {{--hidden form--}}
                        <form id="main_form" action="{{route('shop.shop')}}" method="POST" hidden>
                            @csrf
                            <input type="hidden" id="form_name" name="name" value="{{$data['name'] ?? ''}}">
                            <input type="hidden" id="form_category_id" name="category_id" value="{{$data['category_id'] ?? ''}}">
                            <input type="hidden" id="form_year" name="year" value="{{$data['year'] ?? ''}}">
                            <input type="hidden" id="form_make" name="make" value="{{$data['make'] ?? ''}}">
                            <input type="hidden" id="form_model" name="model" value="{{$data['model'] ?? ''}}">
                        </form>
{{--                        <div class="col-12">--}}
{{--                            <div class="radioBox">--}}
{{--                                <input type="radio" name="one" id="1st">--}}
{{--                                <label for="1st">Exactt match</label>--}}
{{--                                <input type="radio" name="one" id="2nd">--}}
{{--                                <label for="2nd">Base ntumber match</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    {{--products--}}
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Please Select - Year Make & Model First</h2>
                            <h4>Product Group</h4>
                        </div>
                        @foreach($products as $chunk)
                            <div class="col-md-3">
                                @foreach($chunk as $product)
                                    <a href="{{route('shop.product_detail', $product['id'])}}" class="Btngroup">{{$product['name']}}</a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--shop section--}}

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

@section('script')
    <script>
        $(document).ready(function () {
            function submitForm() {
                $('#main_form').submit();
            }

            $('#select_year').trigger('change');
            $('#select_make').trigger('change');
            $('#select_model').trigger('change');

            //btn_submit
            $('#btn_submit').on('click', function() {
                submitForm();
            });

            //input_name
            $('#input_name').on('change', function() {
                $('#form_name').val($(this).val());
            });

            //btn_category
            $('.btn_category').on('click', function () {
                //assign value to hidden form
                $('#form_category_id').val($(this).data('id'));

                //active button
                $('.btn_category').each(function () {
                    $(this).removeClass('active')
                });
                $(this).addClass('active')

                submitForm();
            });

            //select_year
            $('#select_year').on('change', function() {
                $('#form_year').val($(this).val());
            });
            //select_make
            $('#select_make').on('change', function() {
                $('#form_make').val($(this).val());
            });
            //select_model
            $('#select_model').on('change', function() {
                $('#form_model').val($(this).val());
            });
        });
    </script>
@endsection
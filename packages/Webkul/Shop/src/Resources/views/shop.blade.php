@extends('shop::layouts.master2')

@section('title', 'Shop')

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
                                    <h2>Our Products</h2>
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
                </div>
            </div>
            <div class="row mt-5">
                @forelse($categories as $category)
                    <div class="col-md-3">
                        <div class="productBox">
                            <figure class="reveal">
                                <a href="{{route('shop.shopByCategory')}}?cate={{$category->id}}">
                                    <img
                                        src="{{ is_null($category->image) ? asset('themes/default/assets/images/default.png') : $category->image_url }}"
                                        class="img-fluid" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="shopContent">
                            <h3>
                                <a href="{{route('shop.shopByCategory')}}?cate={{$category->id}}">{{$category->name}}</a>
                            </h3>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p class="alert alert-info text-center">No category found</p>
                    </div>
                @endforelse
            </div>
        </div>
        <figure class="shadowSec">
            <img src="{{asset('themes/default/assets/images/productBg.png')}}" alt="">
        </figure>
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
            $('#btn_submit').on('click', function () {
                submitForm();
            });

            //input_name
            $('#input_name').on('change', function () {
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
            $('#select_year').on('change', function () {
                $('#form_year').val($(this).val());
            });
            //select_make
            $('#select_make').on('change', function () {
                $('#form_make').val($(this).val());
            });
            //select_model
            $('#select_model').on('change', function () {
                $('#form_model').val($(this).val());
            });
        });
    </script>
@endsection
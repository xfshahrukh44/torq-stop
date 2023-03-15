@extends('shop::layouts.master2')

@section('title', 'Shop')

@section('content')


    @if($category->id == 37)
        @include('shop::air-brake')
    @elseif($category->id == 33)
        @include('shop::air-disc')
    @elseif($category->id == 32)
        @include('shop::brake-rotors')
    @elseif($category->id == 34)
        @include('shop::brake-shoe')
    @elseif($category->id == 35)
        @include('shop::brake-chamber')
    @elseif($category->id == 36)
        @include('shop::misc-hardware')
    @else
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
                                        <h2>{{$category->name}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('shop::product-listings')
    @endif

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
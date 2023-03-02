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
                                    <h2>Shop</h2>
                                </div>
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
                    <h2 class="secHeading">{{$category->name}}</h2>
                    @if (count($categories) > 0)
                        <h3>Sort by Categories</h3>
                    @endif
                    <ul>
                        @if (count($categories) > 0)
                            <li><a href="{{route('shop.shopByCategory')}}?cate={{$category->id}}">All</a></li>
                        @endif
                        @foreach($categories as $category)
                            <li class="nav-item {{request('cate') == $category->id ? 'active': ''}}" role="presentation">
                                <a href="{{route('shop.shopByCategory')}}?cate={{$category->id}}">
                                    {{$category->name ?? ''}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                @forelse($products as $product)
                    <div class="col-md-3">
                        <div class="productBox">
                            <figure class="reveal">
                                <a href="{{route('shop.product_detail', $product['id'])}}">
                                    <img src="{{asset('themes/default/assets/images/shop1.png')}}" class="img-fluid"
                                         alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="shopContent">
                            <p>{{$product['name']}}<span>${{$product['price']}}</span></p>
                            <a href="{{route('shop.step1')}}">ADD TO CART</a>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p class="alert alert-info text-center">No product found.</p>
                    </div>
                @endforelse
            </div>
        </div>
        <figure class="shadowSec">
            <img src="{{asset('themes/default/assets/images/productBg.png')}}" alt="">
        </figure>

{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                {{$products->appends(request()->input())->links()}}--}}
{{--            </div>--}}
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
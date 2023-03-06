@extends('shop::layouts.master2')

@section('title', 'Product Detail')

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
                                    <h2>Product detail</h2>
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

    <section class="productDetail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="productImgMain">
                        <div class="product-detail-slider">
                            @foreach($product['images'] as $image)
                                <div>
                                    <img class="ml-10" src="{{ $image['url'] ?? asset('themes/default/assets/images/default.png')}}" class="" alt="">
                                </div>
                            @endforeach
                        </div>
                        @if(count($product['images']) > 0)
                            <div class="product-detail-nav">
                                @foreach($product['images'] as $image)
                                    <div>
                                        <img class="ml-10" src="{{ $image['url'] ?? asset('themes/default/assets/images/default.png')}}" class="" alt="">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="prodctdetailContent">
                        <h2>{{$product['name']}}
                        </h2>
                        <span>${{round($product['price'], 2)}} – ${{round($product['price'], 3)}}
                        </span>
                        <p>{!! $product['description'] !!}</p>
                    </div>
                    <div class="proCounter count mr-4">
                        <span class="minus"><i class="fa fa-angle-down"></i></span>
                        <input type="text" value="1" />
                        <span class="plus"><i class="fa fa-angle-up"></i></span>
                        <div class="cartBtn">
                            <!-- <a href="step1.php" class="themeBtn">Bulk Product </a> -->
                            <button type="button" class="themeBtn" data-toggle="modal" data-target="#exampleModal">Bulk Product
                            </button>

                        </div>
                        <div class="cartBtn">
                            <a href="{{route('shop.step1')}}" class="themeBtn">Add to Cart</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-sm table-bordered text-white">
                                <tr class="text-center">
                                    <th colspan="2">Details</th>
                                </tr>
                                @foreach($product['product_category_fields'] as $product_category_field)
                                    <tr>
                                        <th>{{$product_category_field['field_name']}}</th>
                                        <td>{{$product_category_field['field_value']}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="sku">
                    <p>SKU: {{$product['sku'] ?? ''}} Category: <a href="#">{{$product['categories'][0]['category']['translations'][0]['name'] ?? ''}}</a>
                    </p>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email </label>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quantity </label>
                            <select class="form-control" id="exampleFormControlSelect1" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">description </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="themeBtn">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
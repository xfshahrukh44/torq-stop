
<section class="shopSec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="secHeading">Product Details</h2>
                @if (count($categories) > 0)
                    <h3>Sort by Categories</h3>
                @endif
                <ul>
                    @if (count($categories) > 0)
                        <li><a href="{{route('shop.shopByCategory')}}?cate={{$category->id}}">All</a></li>
                    @endif
                    @foreach($categories as $category)
                        <li class="nav-item {{request('cate') == $category->id ? 'active': ''}}"
                            role="presentation">
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
                                <img
                                    src="{{ $product['images'][0]['url'] ?? asset('themes/default/assets/images/default.png')}}"
                                    class="img-fluid"
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
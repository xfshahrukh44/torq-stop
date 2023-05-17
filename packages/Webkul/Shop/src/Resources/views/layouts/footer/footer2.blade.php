<footer>
    @php
        $decoded_content = json_decode($footer->content);
    @endphp
{{--    @dd($decoded_content)--}}

    <section class="signupSec">
        <img src="{{optional($footer->page->getMedia('news_Image')->first())->getUrl()}}" class="img-fluid truck" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2>{{$decoded_content->newsTitle ?? ''}}</h2>
                    {{--                    <a href="" class="themeBtns"><span>Shop Now</span></a>--}}
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="300">
                <a href="tel:8889966896" class="cntctInfo"><i class="{{$decoded_content->phoneIcon ?? ''}}"></i>{{$decoded_content->trollNum ?? ''}}</a>
                <a href="tel:19809877272" class="cntctInfo">{{$decoded_content->localNum ?? ''}}</a>
            </div>
{{--            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="300">--}}
{{--                <a href="tel:19809877272" class="cntctInfo"><i class="fas fa-phone-alt"></i>1-980-987-7272 (Local)</a>--}}
{{--            </div>--}}
{{--            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2500" data-aos-offset="300">--}}
{{--                <a href="javascript:void(0)" class="cntctInfo"><i class="fas fa-map-marker-alt"></i>The TorqStop Shop city, <br>--}}
{{--                    blog, street 12345</a>--}}
{{--            </div>--}}
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="300">
                <a href="mailto:info@torqstop.com" class="cntctInfo"><i class="{{$decoded_content->emailIcon ?? ''}}"></i>{{$decoded_content->email ?? ''}}</a>
            </div>
        </div>
        <div class="row justify-content-between border-top">
            <div class="col-md-4">
                <a href="#" class="d-block text-center"><img src="{{optional($footer->page->getMedia('logo')->first())->getUrl()}}" alt=""></a>
            </div>
            <div class="col-md-2">
                <h3>Quick Links</h3>
                <ul class="links">
                    <li><a href="{{route('shop.home.index')}}">Home</a></li>
                    <li><a href="{{route('shop.about')}}">About us</a></li>
                    <!-- <li><a href="categories.php">CATEGORIES</a></li> -->
                    <li><a href="{{route('shop.shop')}}">Shop</a></li>
                    <li><a href="{{route('shop.reviews')}}">reviews</a></li>
                    <li><a href="{{route('shop.contact')}}">Contact us</a></li>
                    <li><a href="{{asset('pdf/terms-of-use.pdf')}}" data-fancybox="PDF">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>SIGN UP FOR OUR NEWSLETTER</h3>
                <div class="form-group">
                    <i class="fal fa-envelope"></i>
                    <input type="email" placeholder="your@email.com">
                    <button><i class="fas fa-paper-plane"></i></button>
                </div>
                <ul class="socialList">
                    <li><a href="{{$decoded_content->faceLink ?? ''}}"><i class="{{$decoded_content->faceIcon ?? ''}}"></i></a></li>
                    <li><a href="{{$decoded_content->twitLink ?? ''}}"><i class="{{$decoded_content->twitIcon ?? ''}}"></i></a></li>
                    <li><a href="{{$decoded_content->instaLink ?? ''}}"><i class="{{$decoded_content->instaIcon ?? ''}}"></i></a></li>
                    <li><a href="{{$decoded_content->youtLink ?? ''}}"><i class="{{$decoded_content->youtIcon ?? ''}}"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row copyRight">
            <div class="col-md-12">
                <p>{{$decoded_content->copyRight ?? ''}}</p>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('themes/default/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/popper.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/gsap.js')}}"></script>
<script src="{{asset('themes/default/assets/js/swiper.js')}}"></script>
<script src="{{asset('themes/default/assets/js/scrollTrigger.js')}}"></script>
<script src="{{asset('themes/default/assets/js/slick.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/custom.min.js')}}"></script>
<script src="{{asset('plugins/us-map-1.0.1/lib/raphael.js')}}"></script>
<script src="{{asset('plugins/us-map-1.0.1/jquery.usmap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(session()->has('success'))
    <script type="text/javascript">  toastr.success('{{ session('success')}}');</script>
    @php session()->remove('success'); @endphp
@endif
@if(session()->has('error'))
    <script type="text/javascript"> toastr.error('{{ session('error')}}');</script>
    @endif
@yield('script')


</body>

</html>
<footer>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="300">
                <a href="tel:8889966896" class="cntctInfo"><i class="fas fa-phone-alt"></i>1-888-996-6896</a>
            </div>
{{--            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2500" data-aos-offset="300">--}}
{{--                <a href="javascript:void(0)" class="cntctInfo"><i class="fas fa-map-marker-alt"></i>The TorqStop Shop city, <br>--}}
{{--                    blog, street 12345</a>--}}
{{--            </div>--}}
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="300">
                <a href="mailto:info@torqstop.com" class="cntctInfo"><i class="fas fa-envelope"></i>info@torqstop.com</a>
            </div>
        </div>
        <div class="row justify-content-between border-top">
            <div class="col-md-4">
                <a href="#" class="d-block text-center"><img src="{{asset("themes/default/assets/images/logo11.png")}}" alt=""></a>
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
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row copyRight">
            <div class="col-md-12">
                <p>Copyright © 2022. All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('themes/default/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/popper.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/gsap.js')}}"></script>
<script src="{{asset('themes/default/assets/js/swiper.js')}}"></script>
<script src="{{asset('themes/default/assets/js/scrollTrigger.js')}}"></script>
<script src="{{asset('themes/default/assets/js/slick.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('themes/default/assets/js/custom.min.js')}}"></script>
@yield('script')


</body>

</html>
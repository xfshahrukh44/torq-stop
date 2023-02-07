<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<?= ($activePage == '') ? 'active' : ''; ?>
<!-- Begin: Header -->
<div class="custom-cursor"></div>
<header class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" href="{{route('shop.home.index')}}">
                        <img src="{{asset('themes/default/assets/images/logo11.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.home.index')}}"><span>Home</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.about')}}"><span>About Us</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('shop') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.shop')}}"><span>PRODUCTS</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('reviews') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.reviews')}}"><span>CATALOG</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('reviews') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.reviews')}}"><span>REVIEWS</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('reviews') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.reviews')}}"><span>DISTRIBUTOR PORTAL</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('shop.contact')}}"><span>Contact us</span></a>
                            </li>
                        </ul>
                        <div class="forminline">
                            <a href=""><i class="fas fa-shopping-cart"></i><span>0</span></a>
                            <a href="{{route('shop.my-account')}}"><i class="fas fa-user"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


</header>

<!-- END: Header -->
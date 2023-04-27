@include('shop::layouts.header.index2')
{{--<title>{{$setting->company_name}} - @yield('title')</title>--}}
<title>Torqstop Ecommerce | @yield('title')</title>

<style>
    img {
        pointer-events: none;
    }
</style>

<body>

    @include('shop::layouts.menu')

    @yield('content')

    @include('shop::layouts.footer.footer2')
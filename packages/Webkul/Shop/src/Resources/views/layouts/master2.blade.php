@include('shop::layouts.header.index2')
{{--<title>{{$setting->company_name}} - @yield('title')</title>--}}
<title>Torqstop Ecommerce | @yield('title')</title>


<body>

    @include('shop::layouts.menu')

    @yield('content')

    @include('shop::layouts.footer.footer2')
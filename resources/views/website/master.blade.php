<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - @yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    @include('website.layouts.heading-link')
    @stack('link')
</head>

<body>


@include('website.layouts.header')

@yield('body')

@include('website.layouts.footer')

@include('website.layouts.footer-link')

@stack('script')
</body>
</html>

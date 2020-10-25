<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"  >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('theme::site.partials.styles')
</head>
<body class="bg-black white roboto  ">
<div id="beanEater" class="flex justify-center items-center min-vh-100 w-100 fixed z-max bg-black">
    <img src="{{ Asset::load('/img/bean_eater.svg') }}" alt="">
</div>

<div id="app" >
    @include('theme::site.partials.header')
    <products-list></products-list>

</div>
@yield('content')
@include('theme::site.partials.footer')
@include('theme::site.partials.scripts')


</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TechAsia - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap4_3_1.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    @yield('style-libraries')
</head>
<body>
    @include('AdminStore.partial.header')
    @include('AdminStore.partial.tabControl')
    <main id="wrap-main">
        <div class="wrapper">
            <div class="wrap-form">
                @yield('content')
            </div>
        </div>
    </main>
    @include('AdminStore.partial.footer')
</body>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
@yield('scripts')
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        {{-- Author --}}
        <meta name="author" content="Youssef Amjad, Yousef Mo Gaber, Mohamed Elsayad" />
        {{-- Keywords --}}
        <meta name="keywords" content="school,schools,K-Link,schools-K-Link,alkamal,kamal,Technology school" />
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{-- Title --}}
        <title>@yield('title')</title>
        {{-- favicon Icon --}}
        <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon" />
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js" defer></script> --}}
        @vite('resources/js/swiper.js')
        {{-- Scripts And Styles --}}
        @vite('resources/js/app.js')
        @yield('scripts')
    </head>
    <body>
        <!-- Start Splash -->
        <div class="splash" id="splash">
            <div class="splash-ring"></div>
            <span class="text-splash">loading...</span>
        </div>
        <!-- End Splash -->

        @yield('content')
    </body>
</html>

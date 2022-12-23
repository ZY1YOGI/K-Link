@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
    @include('admin._header')

    <section class="container_cards">
        <div class="card">
            <div class="text">
                <h1>عدد الطلاب في قسم الاثاث | 49</h1>
                <p>هنا كل ما يخص عدد الطلاب في قسم الاثاث</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب في قسم الحاسب | 36</h1>
                <p>هنا كل ما يخص عدد الطلاب في قسم الحاسب</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد المدرسين | 7</h1>
                <p>هنا كل ما يخص عدد المدرسين</p>

            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد العمال | 3</h1>
                <p>هنا كل ما يخص عدد العمال</p>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    @vite('resources/js/Admin/main.js')
@endsection

{{-- <div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img class="card-img" src="{{ Vite::asset('resources/img/Youssef.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Youssef Amjad</h2>
                    <p class="description">Full Stack Web developer</p>
                    <div class="links">
                        <a href="https://www.facebook.com/ZY1YOGi" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/YoussefAmjad6" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/zy1yogi" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img class="card-img" src="{{ Vite::asset('resources/img/Mohamed.jpg') }}" alt="">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Mohamed</h2>
                    <p class="description">Front End developer</p>
                    <div class="links">
                        <a href="https://www.facebook.com/profile.php?id=100019727234673" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/medosayad56" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img class="card-img" src="{{ Vite::asset('resources/img/YoussefMo.jpg') }}" alt="">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Youssef</h2>
                    <p class="description">DevOps developer</p>
                    <div class="links">
                        <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="swiper-pagination"></div>
</div> --}}

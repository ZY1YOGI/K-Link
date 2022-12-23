@extends('layouts.app')
@section('title', 'Teachers')
@section('content')
    @include('admin._header')

    <section class="container_cards">
        <div class="card">
            <div class="text">
                <h1>عدد المعلمين | 7</h1>
                <p>هنا كل ما يخص عدد المعلمين</p>
            </div>
        </div>
        <div class="card">
            <div class="text">
                <h1>عدد الشكؤي من المعلم للطالب | 0</h1>
                <p>هنا كل ما يخص عدد الشكؤي من المعلم للطالب</p>
            </div>
        </div>
        <div class="card">
            <div class="text">
                <h1>عدد الشكؤي من الطالب للمعلم | 1</h1>
                <p>هنا كل ما يخص عدد الشكؤي من الطالب للمعلم </p>
            </div>
        </div>

    </section>

    <section class="sec-team">
        <div class="sect-head">
            <h1>المعلمون</h1>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">

                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="{{ Vite::asset('resources/img/Youssef.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Mr.Youssef</h2>
                            <p class="description">معلم اللغة العربية</p>
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
                                <img class="card-img" src="{{ Vite::asset('resources/img/student.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Miss.Mona</h2>
                            <p class="description">معلمة الحاسب الألي</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
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
                            <h2 class="name">Mr.Essam</h2>
                            <p class="description">معلم الحاسب الألي</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100019727234673" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/medosayad56" target="_blank"><i
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
                            <h2 class="name">Mr.Mohamed Jamal</h2>
                            <p class="description">معلم الهندسة الكهربائية</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="{{ Vite::asset('resources/img/student.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Miss.Youssef</h2>
                            <p class="description">معلمة الميكانيكا</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="{{ Vite::asset('resources/img/student.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Miss.Youssef</h2>
                            <p class="description">معلمة الرياضيات</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img class="card-img" src="{{ Vite::asset('resources/img/student.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Mr.Mansour</h2>
                            <p class="description">معلم هندسة الالكترونيات</p>
                            <div class="links">
                                <a href="https://www.facebook.com/profile.php?id=100035824070507" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/yoseef_mo_gaber" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

@endsection

@section('scripts')
    @vite('resources/js/Admin/main.js')
@endsection

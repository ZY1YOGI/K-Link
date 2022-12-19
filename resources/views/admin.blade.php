@extends('layouts.app')
@section('title', 'Admin')
@section('content')
    <!-- Start Header -->
    <header>
        <nav>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/Youssef.jpg') }}" />
                <h1>Manager</h1>
            </div>
            <ul class="nav-links">
                <li class="nav-link" id="home_link"><a href="{{ route('admin') }}">Home</a></li>
                <li class="nav-link" id="logout" type="button"><a href="#">Logout</a></li>
                <li class="nav-link" id="switch-mode">Dark</li>
                <form method="POST" action="{{ route('logout') }}" id="logout-form">@csrf</form>
            </ul>
        </nav>
    </header>
    <!-- End Header -->


    <section class="container_cards">
            <div class="card">
                <div class="text">
                    <h1>عدد الطلاب | 167</h1>
                    <p>هنا كل ما  يخص عدد الطلاب</p>
                </div>
            </div>

            <div class="card">
                <div class="text">
                    <h1>عدد المدرسين | 7</h1>
                    <p>هنا كل ما  يخص عدد المدرسين</p>

                </div>
            </div>

            <div class="card">
                <div class="text">
                    <h1>عدد العمال | 3</h1>
                    <p>هنا كل ما  يخص عدد العمال</p>
                </div>
            </div>
    </section>

    <section class="students">
        <div class="input_form">
            <input type="search" placeholder="Search for Students ?"/>
        </div>
        <div class="container_student">


            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/Mohamed.jpg') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name">Mohamed</h1>
                    <h1 class="phone">01101187100</h1>
                </div>
            </div>

        </div>
    </section>


@endsection

@section('scripts')
    @vite('resources/js/Admin/admin.js')
@endsection

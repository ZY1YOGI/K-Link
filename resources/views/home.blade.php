@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Start Header -->
        @include('layouts.header')
    <!-- End Header -->

    <!--START HOME -->
    <div id="main">
        <h1>{{ Auth::user()->name }} اهلا</h1>
        <div class="container">

            <div class="box">
                <div class="img">
                    <img src="{{ Vite::asset('resources/img/student_statistics.png') }}" alt="student statistics">
                </div>
                <div class="text">
                    <a href=""> <span>اكتشف درجاتك لهاذا الشهر</span></a>
                    <p>اعرف درجاتك في الامتحانات الشهريه عن طريق الكود الخاص بك</p>
                    <a href="#" class="btn">اكتشف</a>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="https://www.wikihow.com/images_en/thumb/9/9b/Become-a-College-Professor-Step-32.jpg/v4-460px-Become-a-College-Professor-Step-32.jpg.webp"
                        alt="">
                </div>
                <div class="text">
                    <a href=""> <span>اعرف سلوكك مع المعلم</span></a>
                    <p>اكتشف تقيم المعلم الخاص بك و حاول التقدم بنفسك من خلال النصائح التي تقدم لك</p>
                    <a href="#" class="btn">اعرف</a>
                </div>
            </div>

            {{-- <div class="box">
                <div class="img">
                    <img src="{{ Vite::asset('resources/img/gdawl.jpg') }}" alt="">
                </div>
                <div class="text">
                    <a href=""> <span>مواعيد المحاضرات</span></a>
                    <p>نقدم لدينا في هذا القسم مواعيد المحاضرات لجميع الاقسام داخل الاكاديمية</p>
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div> --}}

        </div>
    </div>
    <!-- END HOME -->
@endsection

@section('scripts')
    @vite('resources/js/Home/home.js')
@endsection

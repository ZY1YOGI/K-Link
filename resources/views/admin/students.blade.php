@extends('layouts.app')
@section('title', 'students')
@section('content')
    @include('admin._header')
    <section class="container_cards">

        <div class="card">
            <div class="text">
                <h1>المجموع الكلي للطلاب في الصف الاول | 163</h1>
                <p>هنا مجموع عدد كل الطلاب في كل الاقسام</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب في قسم الحاسب | 69</h1>
                <p>هنا مجموع عدد كل الطلاب في قسم الحاسب</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب البنين في قسم الحاسب | 61</h1>
                <p>هنا كل ما يخص عدد الطلاب البنين في قسم الحاسب</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب البنات في قسم الحاسب | 8</h1>
                <p>هنا كل ما يخص عدد الطلاب البنات في قسم الحاسب</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب في قسم الاثاث | 94</h1>
                <p>هنا مجموع عدد كل الطلاب في قسم الاثاث</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب البنين في قسم الاثاث | 80</h1>
                <p>هنا كل ما يخص عدد الطلاب البنين في قسم الاثاث</p>
            </div>
        </div>

        <div class="card">
            <div class="text">
                <h1>عدد الطلاب البنات في قسم الاثاث | 14</h1>
                <p>هنا كل ما يخص عدد الطلاب البنات في قسم الحاسب</p>
            </div>
        </div>

    </section>

    <section class="section_students">

        <div class="input_form">
            <input type="search" placeholder="Search for Students ?" />
        </div>

        <div class="container_students">

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/Youssef.jpg') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Youssef</h1>
                    <h1 class="phone"><span>Phone: </span>01003337432</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 10</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 9</h1>
                    <h1 class="monthly_expenses"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/Mohamed.jpg') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Youssef</h1>
                    <h1 class="phone"><span>Phone: </span>01003337432</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 8</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 7</h1>
                    <h1 class="monthly_expenses"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/YoussefMo.jpg') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Youssef</h1>
                    <h1 class="phone"><span>Phone: </span>01003337432</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 9</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 14</h1>
                    <h1 class="monthly_expenses"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Mona</h1>
                    <h1 class="phone"><span>Phone: </span>01000000000</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 8</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 13</h1>
                    <h1 class="monthly_expenses"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Nada</h1>
                    <h1 class="phone"><span>Phone: </span>01003337432</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 6</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 14</h1>
                    <h1 class="monthly_expenses no"><span>Expenses: </span>12 | No</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Fouad</h1>
                    <h1 class="phone"><span>Phone: </span>01000000000</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 7</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 23</h1>
                    <h1 class="monthly_expenses true"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Saif</h1>
                    <h1 class="phone"><span>Phone: </span>01000000000</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 9</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 17</h1>
                    <h1 class="monthly_expenses no"><span>Expenses: </span>12 | No</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Youssef</h1>
                    <h1 class="phone"><span>Phone: </span>01003337432</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 8</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 9</h1>
                    <h1 class="monthly_expenses"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Marwan</h1>
                    <h1 class="phone"><span>Phone: </span>01000000000</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 3</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 18</h1>
                    <h1 class="monthly_expenses"><span>Expenses: </span>12 | Yes</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

            <div class="student">
                <div class="student_img">
                    <img src="{{ Vite::asset('resources/img/student.png') }}" />
                </div>
                <div class="info_student">
                    <h1 class="name"><span>Name: </span>Hussain</h1>
                    <h1 class="phone"><span>Phone: </span>01000000000</h1>
                    <h1 class="weekly_average"><span>Weekly Average: </span>10 | 7</h1>
                    <h1 class="absence_days"><span>Absence Days: </span>29 | 18</h1>
                    <h1 class="monthly_expenses no"><span>Expenses: </span>12 | No</h1>
                    <a href="#">Profile</a>
                </div>
            </div>

        </div>

    </section>

@endsection

@section('scripts')
    @vite('resources/js/Admin/main.js')
@endsection

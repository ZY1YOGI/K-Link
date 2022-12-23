<!-- Start Header -->
<header>
    <nav>
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/Youssef.jpg') }}" />
            <h1>Manager</h1>
        </div>
        <ul class="nav-links">
            <li class="nav-link" id="home_link"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="nav-link" id="teachers_link"><a href="{{ route('admin.teachers') }}">Teachers</a></li>
            <li class="nav-link" id="students_link"><a href="{{ route('admin.students') }}">Students</a></li>
            <li class="nav-link" id="logout" type="button"><a href="#">Logout</a></li>
            <li class="nav-link" id="switch-mode">Dark</li>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">@csrf</form>
        </ul>
    </nav>
</header>
<!-- End Header -->

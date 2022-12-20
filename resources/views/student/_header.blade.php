<header>
    <nav>
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/student.png') }}" />
            <h1>{{ explode(' ', Auth::user()->name)[0] }}</h1>
        </div>
        <ul class="nav-links">
            <li class="nav-link" id="home_link"><a href="{{ route('student.home') }}">Home</a></li>
            <li class="nav-link" id="profile_link"><a href="{{ route('student.profile') }}">Profile</a></li>
            <li class="nav-link" id="logout" type="button"><a href="#">Logout</a></li>
            <li class="nav-link" id="switch-mode">Dark</li>
            <form method="POST" action="{{ route('auth.logout') }}" id="logout-form">@csrf</form>
        </ul>
    </nav>
</header>

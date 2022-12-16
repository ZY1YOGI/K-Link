<header>
    <nav>
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/Youssef.jpg') }}" />
            <h1>{{ explode(' ', Auth::user()->name)[0] }}</h1>
            <div class="auth"></div>
        </div>
        <ul class="nav-links">
            <li class="nav-link" id="home_link"><a href="{{ route('home') }}">Home</a></li>
            <li class="nav-link" id="profile_link"><a href="{{ route('profile') }}">Profile</a></li>
            <li class="nav-link" id="logout" type="button"><a href="#">Logout</a></li>
            <li class="nav-link" id="switch-mode">Dark</li>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">@csrf</form>
        </ul>
    </nav>
</header>

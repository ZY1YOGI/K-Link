@extends('layouts.app')
@section('title', 'Auth')
@section('content')
    @if (session('success'))
        <h1>{{ session('success') }}</h1>
    @endif
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    @error('password')<h2 role="alert" class="error-field">{{ $message }}</h2>@enderror
                    @error('email')<h2 role="alert" class="error-field">{{ $message }}</h2>@enderror
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <label for="remember">Remember Me</label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <input type="submit" value="Login" class="btn solid">
                    <p class="social-text">Or Sign in with social Platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                    </div>
                </form>

                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    @error('name')<span role="alert" class="error-field">{{ $message }}</span>@enderror
                    @error('email')<span role="alert" class="error-field">{{ $message }}</span>@enderror
                    @error('password')<span role="alert" class="error-field">{{ $message }}</span>@enderror
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="UserName" value="{{ old('name') }}" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Password"required>
                    </div>
                    <input type="submit" value="Sign up" class="btn solid">
                    <p class="social-text">Or Sign up with social Platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eos corporis repellendus.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="{{ Vite::asset('resources/img/undraw_education_f8ru.svg') }}" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eos corporis repellendus.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>

                <img src="{{ Vite::asset('resources/img/register.svg') }}" class="image" alt="">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/Auth/auth.js')
@endsection

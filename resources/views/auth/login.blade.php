@extends('layouts.frontendLayoutClean')

@section('title', 'Login :: Fajr Quran Centre - FQC - Islamic Online Education')

@section('content')
    <div class="mainContent contentLogin">
        <a href="{{ URL::to('/') }}/" class="logoPageClean"><img src="{{ URL::to('/') }}/themeImages/logo.svg" alt="Fajr Quran Centre"></a>

        <div class="backgroundAnimation">
            <img src="{{ URL::to('/') }}/themeImages/bgLogin.png" alt="" />
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-none d-sm-block">
                    <h1 class="title">Sign in <br>For something useful</h1>
                    <p class="description">Get to know us more deeply, then you will love us The reason behind our startup
                        here is to actualise
                        our dreams in spreading knowledge that is beneficial to the ummah and helps each other for the
                        needy.</p>
                </div>
                <div class="col-md-6 col-sm-12 bg-primary1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4"><h3 class="d-table ml-auto mr-auto mb-5">Login</h3></div>
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your Email" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Enter your password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-block" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

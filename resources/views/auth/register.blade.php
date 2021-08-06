@extends('layouts.frontendLayoutClean')

@section('title', 'Register :: Fajr Quran Centre - FQC - Islamic Online Education')

@section('content')
<div class="mainContent contentLogin">
    <a href="{{ URL::to('/') }}/" class="logoPageClean"><img src="{{ URL::to('/') }}/themeImages/logo.svg" alt="Fajr Quran Centre"></a>

    <div class="backgroundAnimation">
        <img src="{{ URL::to('/') }}/themeImages/bgRegister.png" alt="" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-none d-sm-block">
                <h1 class="title">Register <br>Make the best of it</h1>
                <p class="description">Get to know us more deeply, then you will love us The reason behind our startup here is to actualise our dreams in spreading knowledge that is beneficial to the ummah and helps each other for the needy.</p>
            </div>
            <div class="col-md-6 col-sm-12 bg-primary1">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4"><h3 class="d-table ml-auto mr-auto mb-5">Register</h3></div>
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your Name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm your password" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 col-sm-12 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>

                                <a class="btn btn-block" href="{{ route('login') }}">
                                    {{ __('You have account? Login here') }}
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

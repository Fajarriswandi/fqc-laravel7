@extends('layouts.frontendLayoutClean')

@section('title', 'Login :: Fajr Quran Centre - FQC - Islamic Online Education')

@section('content')
    <div class="mainContent">
        <a href="{{ URL::to('/') }}/" class="logoPageClean ml-5"><img src="{{ URL::to('/') }}/themeImages/logo.svg" alt="Fajr Quran Centre" ></a>
        <div class="container mt-5">
            <h1 class="d-table ml-auto mr-auto">Form Register here</h1>
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLSdGG8A_alDau4LLt96ObQaB4Wplezr2cVtEowW0M1mVAh5PFg/viewform?embedded=true"
                width="640" height="1458" frameborder="0" marginheight="0" marginwidth="0" class="d-table ml-auto mr-auto">Loading…</iframe>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{URL::to('/')}}/themeImages/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

@include('layouts.components.frontend.header')

<!--Main Layout-->
<div class="mainLayout">
    @include('layouts.components.frontend.sidebarLeftNav')
    @yield('content')
</div>

@include('layouts.components.frontend.footer')

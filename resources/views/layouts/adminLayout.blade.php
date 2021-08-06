<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::to('/') }}/themeImages/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @toastr_css
</head>

<body class="adminDashboard">

    <div id="layoutDashboardAdmin" class="container-fluid">

        {{-- Navbar Top --}}
        @include('layouts.components.navbarTop')
        <div class="row">
            {{-- SIDEBAR LEFT @YIELD --}}
            @include('layouts.components.sidebarLeft')

            {{-- MAIN @YIELD --}}
            @yield('main')

        </div>
    </div>


</body>
@jquery
@toastr_js
@toastr_render
{{-- <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .then(editor => {
            console.log(editor);
            editor.ui.view.editable.element.style.height = '400px';
        })
        .catch(error => {
            console.error(error);
        });
</script>

</html>

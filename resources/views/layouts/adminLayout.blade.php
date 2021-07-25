<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.8.2/tinymce.min.js"
        integrity="sha512-laacsEF5jvAJew9boBITeLkwD47dpMnERAtn4WCzWu/Pur9IkF0ZpVTcWRT/FUCaaf7ZwyzMY5c9vCcbAAuAbg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tinymce.init({
            selector: 'textarea#textEditor',
            plugins: "casechange advcode advlist lists spellchecker formatpainter autoresize visualblocks tinydrive image link media imagetools wordcount",
            min_height: 380,
            menubar: false,
            setContent: "text",
            toolbar: [
                "bold italic underline | forecolor | formatselect | alignleft aligncenter alignright | bullist numlist",
                "cut copy paste formatpainter removeformat | casechange visualblocks | spellchecker | link image media | code"
            ]
        });
    </script>
</body>

</html>

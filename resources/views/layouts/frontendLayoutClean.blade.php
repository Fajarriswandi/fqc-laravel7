<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::to('/') }}/themeImages/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

    <!--Main Layout-->
    <div class="mainLayout">
        @include('layouts.components.frontend.sidebarLeftNav')
        @yield('content')
    </div>



    <script src="{{ URL::to('/') }}/js/jquery-3.5.1.slim.min.js"></script>
    {{-- <script src="js/bootstrap.bundle.js"></script> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.refresh();
    </script>

    <script>
        // On Scroll mmain menu
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 50) {
                $(".mainNavigation").addClass("mainNavigationOnScroll");
            } else {
                $(".mainNavigation").removeClass("mainNavigationOnScroll");
            }
        });

        // On Scroll mmain menu

        // function Tooltips
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        // function Tooltips

        // Toggle menu
        $(document).ready(function() {
            $('.btnExpandMenu, .openMenu').on('click', function() {
                $('.menuOnclick').toggleClass('open');
            });
        });
        $(document).ready(function() {
            $('.btnExpandMenuMobile').on('click', function() {
                $('.menuOnclick').toggleClass('open');
            });
        });
        // Toggle menu

        // Popovers
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
        // Popovers
    </script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("idnavSosmedMobileContainer").style.bottom = "0";
            } else {
                document.getElementById("idnavSosmedMobileContainer").style.bottom = "-60px";
            }
        }
    </script>
</body>
<!-- ====================================
UI & UX by : Fajar riswandi
Develop by : Fajar riswandi
Linked In Profile : https://www.linkedin.com/in/fajar-riswandi/

Note : please don't delete it to respect my work
==================================== -->

</html>

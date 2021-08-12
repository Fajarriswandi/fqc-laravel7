<!--Footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 order-12 order-md-0 order-lg-0 mb-3">
                <img src="{{ URL::to('/') }}/themeImages/logoFooter.svg" alt="Fajr Quran Center"
                    class="img-fluid logoFooter" />
            </div>
            <div class="col-md-3 col-sm-12 mb-3">
                <ul>
                    <h4>About Service</h4>
                    <li><a href="/comingsoon.php">How To Register</a></li>
                    <li><a href="/comingsoon.php">What is the tools</a></li>
                    <li><a href="/comingsoon.php">Who is the teacher's</a></li>
                    <li><a href="/comingsoon.php">What about schedule</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 mb-3">
                <ul>
                    <h4>About Payment</h4>
                    <li><a href="/comingsoon.php">Pricing</a></li>
                    <li><a href="/comingsoon.php">Any price package</a></li>
                    <li><a href="/comingsoon.php">Payment method</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 mb-3">
                <ul>
                    <h4>Social Media</h4>
                    <li><a href="/comingsoon.php">Whatsapp</a></li>
                    <li><a href="/comingsoon.php">Instagram</a></li>
                    <li><a href="/comingsoon.php">Youtube</a></li>
                    <li><a href="/comingsoon.php">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="copyRight">Copyright © 2020 - All right reserved - Fajrtuitioncentre.com</div>
    </div>
</footer>
<!--Footer-->

<!--Navigation Sosmed Mobile-->
<div id="idnavSosmedMobileContainer" class="navSosmedMobileContainer">
    <div class="navSosmedMobile row align-items-center p-0">
        <div class="col p-0"><a target="_blank" href="https://www.youtube.com/channel/UCpml8sH2kW1NjrEyd8pBcaw"><i
                    class="bi bi-youtube"></i></a></div>
        <div class="col p-0"><a target="_blank" href="https://web.facebook.com/fajrqurancentre"><i
                    class="bi bi-facebook"></i></a></div>
        <div class="col p-0"><a target="_blank" href="https://www.instagram.com/fajrqurancentre/"><i
                    class="bi bi-instagram"></i></a></div>
        <div class="col p-0"><a href="#"
                onclick="window.open('https://wa.me/6287755088340?text=السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ')"><i
                    class="bi bi-whatsapp"></i></a></div>
        <div class="col p-0"><a target="_blank" href="http://fidia.fajrqurancentre.com/" class="new"><img
                    src="{{ URL::to('/') }}/themeImages/fidia.svg" alt="Fidia Digital Agency"> <span>New</a></a></div>
    </div>
</div>
<!--Navigation Sosmed Mobile-->

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
<div id="google_translate_element" style="display: none">
</div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
{{-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> --}}
<script>
//     $(window).load(function () {    
//     $('.translation-links a').click(function(e) {
//         e.preventDefault();
//         var $frame = $('.goog-te-menu-frame:first');

//         if (!$frame.size()) {
//             alert("Error: Could not find Google translate frame.");
//             return false;
//         }

//         var codes_names = tis.C.sl;
//         var selected_lang = codes_names[$(this).data('class')];

//         $('.goog-te-menu-frame:first').contents().find('a span.text:contains(' +' selected_lang' + ')').click();

//         return false;
//     });
// });
</script>
</body>
<!-- ====================================
UI & UX by : Fajar riswandi
Develop by : Fajar riswandi
Linked In Profile : https://www.linkedin.com/in/fajar-riswandi/

Note : please don't delete it to respect my work
==================================== -->

</html>

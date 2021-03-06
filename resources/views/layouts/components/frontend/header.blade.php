<!--Main Menu-->
<div class="mainNavigation fixed-top">
    <div class="containerMenu">
        <div class="row">
            <div class="col-md-2 bg-primary1">
                <a href="{{ URL::to('/') }}/" class="logo"><img src="{{ URL::to('/') }}/themeImages/logo.svg"
                        alt="Fajr Quran Centre"></a>
            </div>
            <div class="col-md-7 col-sm-12 d-md-none d-lg-block d-none bg-secondary1">
                <div class="row justify-content-center mt-4">
                    <ul class="nav justify-content-center navLinkHeader">
                        <li class="nav-item"><a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}" href="{{ URL::to('/') }}/">Home</a></li>
                        <li class="nav-item"><a class="{{ Request::is('blog') ? 'nav-link active' : 'nav-link' }}" href="{{ URL::to('/') }}/blog">Blog</a></li>
                        <li class="nav-item openMenu"><a class="nav-link" href="#">Our Programs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="window.open('https://wa.me/6287755088340?text=السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ')">Contact us</a></li>
                        {{-- <li class="nav-item d-flex">
                            @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </li> --}}
                    </ul>
                    
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <ul class="nav justify-content-end bg-primary1 mt-4">
                    <li><div id="google_translate_element"></div></li>
                </ul>
            </div>

            <!--Only show on table & mobile-->
            <div class="col-6 mobileMenuRightContainer">
                <div class="mobileMenuRight float-right">
                    <!---<button class="btnItem"><i class="bi bi-bell"></i></button>--->
                    <div class="dropdown dropdownNotification">
                        <button class="btn dropdown-toggle btnItem" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-bell"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                            <h6 class="dropdown-header">Free trial, get it now!</h6>
                            <a class="dropdown-item" href="/comingsoon.php">Free trial for (Child) Class <span
                                    class="badge badge-pill badge-danger blink-2">Free</span></a>
                            <a class="dropdown-item" href="/comingsoon.php">Free trial for (Adult) Class <span
                                    class="badge badge-pill badge-danger blink-2">Free</span></a>
                        </div>
                    </div>
                    <button class="btnItem btnExpandMenuMobile"><i class="bi bi-list"></i></button>
                </div>
            </div>
            <!--Only show on table & mobile-->

        </div>
    </div>
</div>
<!--Main Menu-->

<!--Menu on click toggle-->
<div class="menuOnclick">
    <button class="btnExpandMenu menu"><i class="bi bi-x"></i><span>Exit</span></button>

    <div class="contentMenu row">
        <div class="col-md-4 col-sm-12 item mb-5">
            <h2><span>About Us</span></h2>
            <img src="{{ URL::to('/') }}/themeImages/AboutUsMenu.png" alt="About Fajr Quran Centre - FQC"
                class="img-fluid mb-3">
            <p>Take lessons to help teachers with an income, given to them through your fee. To help yourself, by
                gaining beneficial knowledge. To help others with your knowledge. So much you can do while being at
                home.</p>
            <a href="/comingsoon.php">Learn more</a>
        </div>
        <div class="col-md-4 col-sm-12 item mb-5">
            <h2><span>Lessons</span></h2>
            <ul>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Al-Qur'an</strong>
                        <p>In Quran classes, the teacher will teach tajweed rules, memorization, revision and
                            correction of the Holy Quran.</p>
                    </a>
                </li>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Qaida Noorania</strong>
                        <p>Qaida Noorania is a basic guide with the rules of pronunciation for reciting Quran. It is
                            a noted fact that people who learn the Qaida Noorania.</p>
                    </a>
                </li>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Arabic Language</strong>
                        <p>In the Arabic language, we have a program what consists of 3 levels: Beginner (Noor al
                            bayan), Intermediate (Conversation) & Advance.</p>
                    </a>
                </li>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Other Language</strong>
                        <p>In the Arabic language, we have a program what consists of 3 levels: Beginner (Noor al
                            bayan), Intermediate (Conversation) & Advance.</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-12 item mb-5">
            <h2><span>Fidia</span></h2>
            <ul>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Website applications</strong>
                        <p>We can make for you a company profile website, E Commerce, or Web application according
                            to your business needs.</p>
                    </a>
                </li>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Mobile Applications</strong>
                        <p>We can make for you, a mobile application, which runs on Android or Ios, according to
                            your business needs.</p>
                    </a>
                </li>
                <li>
                    <a href="/comingsoon.php">
                        <strong>Design & Branding</strong>
                        <p>We provide services for making logos, flyers, banners, product catalogs, and other
                            designs according to what you want.</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<!--Menu on click toggle-->

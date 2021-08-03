@extends('layouts.frontendLayout')

@section('title', 'Fajr Quran Centre - FQC - Islamic Online Education')

@section('content')
    <!--Main Content-->
    <div class="mainContent">
        <!--Header home-->
        <div class="headerHome">
            <div class="content">

                <div class="row bg-primary1 flex-column-reverse flex-md-row">
                    <div class="col-md-6 col-sm-12 headerContent">
                        <div class="contentGroup right sm-center">
                            <h2>Exclusive <br />Islamic Online Education</h2>
                            <p>Take lessons to help teachers with an income, given to them through your fee. To help
                                yourself, by gaining beneficial knowledge. To help others with your knowledge. So much you
                                can do while being at home.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 p-0 headerImageSlider mb-5">
                        <!--Carousel header-->
                        <div id="imageSliderHeader" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="themeImages/slider1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="themeImages/slider2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="themeImages/slider3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#imageSliderHeader" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#imageSliderHeader" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--Carousel header-->
                    </div>
                </div>
            </div>
        </div>
        <!--Header home-->

        <!--Lessons-->
        <div class="lessons">
            <h2 class="title" data-aos="fade-up" data-aos-duration="1000">Lessons</h2>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-4 col-sm-12 item secondary">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <h3>Al Qur'an</h3>
                            <p>In Quran classes, the teacher will teach tajweed rules, memorization, revision and correction
                                of the Holy Quran.</p>
                            <span class="linkArrow center">Get it now</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <h3>Qaida Noorania</h3>
                            <p>Qaida Noorania is a basic guide with the rules of pronunciation for reciting Quran. It is a
                                noted fact that people who learn...</p>
                            <span class="linkArrow center">Get it now</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <h3>Arabic Language</h3>
                            <p>In the Arabic language, we have a program what consists of 3 levels: Beginner (Noor al
                                bayan), Intermediate...</p>
                            <span class="linkArrow center">Get it now</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <h3>UI UX & Visual Design</h3>
                            <p>You will learn how to create a good User Interface with the right User Experience, and learn
                                how to create a visual design.</p>
                            <span class="linkArrow center">Get it now</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <h3>Other Language</h3>
                            <p>You can learn other languages such as, English, Turkish, Mandarin, Urdu, and many more, with
                                live native speakers!</p>
                            <span class="linkArrow center">Get it now</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <h3>Other Lessons</h3>
                            <p>Wait for our latest class, which is certainly more useful for your life in this world and the
                                hereafter.</p>
                            <span class="linkArrow center">Get it now</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Lessons-->

        <!--Why we Exist-->
        <div class="container">
            <div class="whyWeExist row">
                <div class="col-md-5 col-sm-12 images"><img src="themeImages/whyWeExist.png" class="img-fluid vibrate-1"
                        alt="Why We Exist - FQC"></div>
                <div class="col-md-7 col-sm-12 content">
                    <div class="contentGroup sm-center" data-aos="fade-left" data-aos-duration="1000">
                        <h2>Why We Exist</h2>
                        <p>The Fajr Quran Center is formed from a deep sense of concern for fellow teachers throughout the
                            world today. Many teachers have economic problems to support their families because many of them
                            have husbands who are no longer working or have been fired from work because of the pandemic
                            crisis.</p>
                        <p>Our presence is expected to lighten their burdens a little, and so that they can still share
                            their knowledge with the widest possible benefits</p>
                        <a href="/comingsoon.php" class="linkArrow sm-center">More explore</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Why we Exist-->

        <!--Get to know Us-->
        <div class="getToKnowUs container">
            <div class="card radiusStyled w-100">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12 mb-3 images"><img src="themeImages/getToKnowUs.png"
                            alt="Get To Know Us FQC" class="img-fluid" data-aos="fade-right" data-aos-duration="1000" />
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3 content">
                        <div class="contentGroup sm-center" data-aos="fade-left" data-aos-duration="1000">
                            <h2>Get to know us more deeply then you will love us</h2>
                            <p>Get to know us more deeply, then you will love us The reason behind our startup here is to
                                actualise our dreams in spreading knowledge that is beneficial to the ummah and helps each
                                other for the needy.</p>
                            <p>Alhamdulillah, we try our best to build a platform that is very friendly in administration
                                with teachers to be with you to build your future with the light of the Quran and Sunnah.
                            </p>
                            <a href="/comingsoon.php" class="linkArrow sm-center">More explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Get to know Us-->

        <!--Benefit-->
        <div class="benefit">
            <h2 class="title" data-aos="fade-up" data-aos-duration="1000">The benefits you get</h2>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <img src="themeImages/iconPrice.svg" alt="Competitive Price">
                            <h3>Competitive Price</h3>
                            <p>Why? Because when you pay this means not only an investment for yourself, but for Sadaqa
                                Jariya to help our beloved sisters worldwide as well.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item gradientLight">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <img src="themeImages/iconTeacher.svg" alt="The Right Teacher">
                            <h3>The Right Teacher</h3>
                            <p>Here we match you with a teacher who will follow our Free Trial Session with you. Students
                                have a mentor who teaches in the most effective manner for their learning styles.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 item">
                    <a href="/comingsoon.php">
                        <div class="card radiusStyled">
                            <img src="themeImages/iconNativeSpeaker.svg" alt="Native Speaker">
                            <h3>Native Speaker</h3>
                            <p>Almost all teachers are from Arab Countries. Conversing with native speakers will
                                unsurprisingly increase your ability to understand well. </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Benefit-->

        <!--Different-->
        <div class="different">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12 mb-3 content">
                        <div class="contentGroup sm-center" data-aos="fade-right" data-aos-duration="1000">
                            <h2>Why we are different?</h2>
                            <p>Whereas mainstream schools or academies will have more than 10 students in a class. Here our
                                students will benefit from the small group & develop communication skills. Each student will
                                receive great attention each lesson.</p>
                            <p>
                            <h5>Systematic & Structured</h5>
                            </p>
                            <p>This is one reason you need to choose Fajr. Quite simply, we are passionate about our
                                programmes. We try our hardest to make sure we have courses that are suitable for childrens,
                                sisters and mums worldwide.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3 images"><img src="themeImages/different.svg"
                            alt="Why we are different?" class="img-fluid" data-aos="fade-up" data-aos-duration="1000" />
                    </div>
                </div>
            </div>
        </div>
        <!--Different-->

        <!--Testimonials-->
        <div class="testimonials">
            <div class="containerCostume">
                <h2 class="title">Testimonials</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="nav flex-column nav-pills navTestimonials" id="idTabTestimonials" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="idTabTestimoni1" data-toggle="pill" href="#testimoni1" role="tab"
                                aria-controls="testimoni1" aria-selected="true">
                                <div class="itemTitle">
                                    <div class="item"><img src="themeImages/testimonials/avatar1.png" class="avatar"
                                            alt="Testimonials"></div>
                                    <div class="item content">
                                        <h4>Latifah</h4>
                                        <span>Saudi - Mommy</span>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="idTabTestimoni2" data-toggle="pill" href="#testimoni2" role="tab"
                                aria-controls="testimoni2" aria-selected="true">
                                <div class="itemTitle">
                                    <div class="item"><img src="themeImages/testimonials/avatar1.png" class="avatar"
                                            alt="Testimonials"></div>
                                    <div class="item content">
                                        <h4>Adeeba</h4>
                                        <span>KSA - Mommy</span>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="idTabTestimoni3" data-toggle="pill" href="#testimoni3" role="tab"
                                aria-controls="testimoni3" aria-selected="true">
                                <div class="itemTitle">
                                    <div class="item"><img src="themeImages/testimonials/avatar1.png" class="avatar"
                                            alt="Testimonials"></div>
                                    <div class="item content">
                                        <h4>Sofia</h4>
                                        <span>USA - Dental Asisstant</span>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="idTabTestimoni4" data-toggle="pill" href="#testimoni4" role="tab"
                                aria-controls="testimoni4" aria-selected="true">
                                <div class="itemTitle">
                                    <div class="item"><img src="themeImages/testimonials/avatar1.png" class="avatar"
                                            alt="Testimonials"></div>
                                    <div class="item content">
                                        <h4>Herawati P Tajuddin</h4>
                                        <span>Indonesian - MOMS</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content navTabContentTestimonials" id="idTabContentTestimonials">
                            <div class="tab-pane fade show active" id="testimoni1" role="tabpanel"
                                aria-labelledby="idTabTestimoni1">
                                <h3>Latifah</h3>
                                <h4>Saudi - Mommy</h4>

                                <p>ada peningkatan dl sy tdk tau apa2 ttg bhsa arab, skrg sdh bs bikin kalimat mskipun
                                    simpel2, kosakata yg sehari2 jg dikit2 hafal.. alhamdulillah. Ada peningktan umm.. mmg
                                    klo spt sy peningkatannya pelan2 hehehehe emak2. kdg g enak jg klo blm kerjain PR,, uda
                                    diniatin wiken kerjain tp ada aja yg lain.. klo kerjain Pr bikin kalimat gitu sy bs
                                    berjam2 umm, krn kdg hrs bolak balik liat susunan huruf arabnya sdh bener apa blm.,, tp
                                    ya msh byk salahnya jg. Cm mmg itulah pembelajaran,,</p>
                                <p>Alhamdulillaah there is an improvement. In the past, I didn't know anything about Arabic.
                                    Now I can make simple sentences and also memorize a little vocabulary of daily life..
                                    Indeed, i feel like a slow learning mom hehe. and this is how we learn.</p>
                            </div>
                            <div class="tab-pane fade" id="testimoni2" role="tabpanel" aria-labelledby="idTabTestimoni2">
                                <h3>Adeeba</h3>
                                <h4>KSA - Mommy</h4>
                                <p>Alhamdulilah for this opportunity from FQC. BIG THANKS TO ALL OF YOU.</p>
                                <p>These classes has really pushed me a far way yaa Allah. I embrace the change as we strive
                                    for nothing but the best recitation giving right to each tajweed rules. Allahs
                                    continuous Blessings and guidance with FQC <br> YAA RABB AMEEN</p>
                            </div>
                            <div class="tab-pane fade" id="testimoni3" role="tabpanel" aria-labelledby="idTabTestimoni3">
                                <h3>Sofia</h3>
                                <h4>USA - Dental Asisstant</h4>
                                <p>Sister i love my classes everything is soooo nice
                                    😍😍😍💗💗💗💗💗💚💚💚💚❤️❤️❤️❤️❤️🌹🌹🌹🌹🌹 . I love both the Turkish and Arabic
                                    teachers I am excited to study again with them in shaa Allah.</p>
                            </div>
                            <div class="tab-pane fade" id="testimoni4" role="tabpanel" aria-labelledby="idTabTestimoni4">
                                <h3>Herawati P Tajuddin</h3>
                                <h4>Indonesia - Mommy</h4>
                                <p>Dear FTC you are in the right way. I Would like To Say Thank You Teacher Sheikha Umm
                                    Hisham. Your kindly efforts to guide us to learn & recites the Holy Quran in a good
                                    manners are really apreciated. May Allah Always Blessing You.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Testimonials-->

    </div>
    <!--Main Content-->




@endsection

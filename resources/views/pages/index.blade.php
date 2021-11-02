@extends('layouts.app')
@section('content')
    <!--====== LABORATORY PART START ======-->
    <section id="laboratory" class="lab-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="lab-content">
                        <h3 class="lab-title">FinTech bu -</h3>
                        <p class="lab-text">- Moliya va IT sohalarining birlashmasi bo'lib,<br>
                            hozirgi kunda eng kerakli sohalardan biridir</p>
                        <img class="lab-vector d-none d-sm-flex" src="{{ asset('images/Vector 2.png') }}" alt="vector">
                        <h3 class="lab-title-steps">FinTech Laboratoriyasi bu...</h3>
                    </div>
                    <div class="lab-content-steps">
                        <img class="ellipse d-none d-sm-flex" src="{{ asset('images/Ellipse 1.png') }}" alt="ellipse">
                        <!-- Step One -->
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <img class="step-one-img" src="{{ asset('images/Revenue-pana 1.png') }}" alt="rasm">
                            </div>
                            <div class="col-md-8 col-sm-6 step-text">
                                <h3 class="step-one-text">1.Moliya va IT sohasida yetuk <br>
                                    mutaxasislarini tayyorlaydi
                                </h3>
                            </div>
                        </div>
                        <!-- Step Two -->
                        <div class="row">
                            <div class="col-md-7 col-sm-6 step-text">
                                <h3 class="step-two-text justify-content-center">
                                    2. Bizning talabalarimiz biznes <br>
                                    egalari bo'lib yetishishadi
                                </h3>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <img class="step-two-img" src="{{ asset('images/Charts-pana 1.png') }}" alt="rasm">
                            </div>
                        </div>
                        <!-- Step Three -->
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <img class="step-three-img" src="{{ asset('images/Launching-pana 1.png') }}" alt="rasm">
                            </div>
                            <div class="col-md-8 col-sm-6 step-text">
                                <h3 class="step-three-text">
                                    3. Talabalarimiz yaratgan startap, loyilarni <br>
                                    investorlarimiz qo'llab quvvatlaydi
                                </h3>
                            </div>
                        </div>
                        <img class="poylogon d-none d-sm-flex" src="{{ asset('images/Polygon 1.png') }}" alt="poylogon">
                    </div>

                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>
    <!--====== LABORATORY PART ENDS ======-->

    <!--====== OUR COURSES PART START ======-->
    <section id="courses" class="course-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3 class="title">Bizning kurslar</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img class="course-tumb" src="{{ asset('images/first.png') }}" alt="html,css">
                    <h3 class="course-title">Frontend</h3>
                </div>
                <div class="col-md-4">
                    <img class="course-tumb" src="{{ asset('images/second.png') }}" alt="html,css">
                    <h3 class="course-title">Beckend</h3>
                </div>
                <div class="col-md-4">
                    <img class="course-tumb" src="{{ asset('images/third.png') }}" alt="html,css">
                    <h3 class="course-title">Sun’iy intelekt</h3></div>
            </div><!-- row -->
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img class="course-tumb" src="{{ asset('images/four.png') }}" alt="html,css">
                    <h3 class="course-title">Mobil ilova</h3>
                </div>
                <div class="col-md-4">
                    <img class="course-tumb" src="{{ asset('images/five.png') }}" alt="html,css">
                    <h3 class="course-title">Design</h3>
                </div>
                <div class="col-md-4">
                    <img class="course-tumb" src="{{ asset('images/six.png') }}" alt="html,css">
                    <h3 class="course-title">SMM</h3></div>
            </div><!-- row -->
        </div> <!-- conteiner -->
    </section>
    <!--======OUR COURSES PART ENDS ======-->

    <!--====== EVENTS PART START ======-->
    <section id="events" class="study-steps-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">O'qish jarayoni qanday?</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row steps">
                <div class="col">
                    <div class="step-items">
                        <h1 class="count">1</h1>
                        <p class="title">Bepul darsga qatnashish</p>
                        <img class="right-chervon" src="{{ asset('images/right-chervon.png') }}" alt=">">
                    </div>
                </div>
                <div class="col">
                    <div class="step-items">
                        <h1 class="count">2</h1>
                        <p class="title">Maxsus metodikada o’quv jarayoni</p>
                        <img class="right-chervon" src="{{ asset('images/right-chervon.png') }}" alt=">">
                    </div>
                </div>
                <div class="col">
                    <div class="step-items">
                        <h1 class="count">3</h1>
                        <p class="title">Real loyihalarda tajribalar</p>
                        <img class="right-chervon" src="{{ asset('images/right-chervon.png') }}" alt=">">
                    </div>
                </div>
                <div class="col">
                    <div class="step-items">
                        <h1 class="count">4</h1>
                        <p class="title">Biznes kitoblar orqali prezentatsiyalar</p>
                        <img class="right-chervon" src="{{ asset('images/right-chervon.png') }}" alt=">">
                    </div>
                </div>
                <div class="col">
                    <div class="step-items">
                        <h1 class="count">5</h1>
                        <p class="title">Maxsus imtixonlar orqali
                            bilimlarni tekshirish</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </section>
    <!--====== EVENTS PART ENDS ======-->

    <!--====== CONTACT PART START ======-->
    <section id="contact_us" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Birinchi bepul darsga yoziling</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <label for="fullname">Ismingiz</label>
                                        <input type="text" name="fullname" id="fullname" placeholder="To'liq ismingiz va familiyaniz" data-error="Fullname is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                    <div class="single-form form-group">
                                        <label for="course_type">Kurs yo'nalishi</label>
                                        <select name="course_type" id="course_type" required="required">
                                            <option value="">Kurs yo'nalishini tanlang</option>
                                            <option value="frontend">Frontend</option>
                                            <option value="backend">Beckend</option>
                                            <option value="graphic_design">Grafik dizayn</option>
                                            <option value="artificial_intelligence">Sun'iy intellekt </option>
                                            <option value="mobile_application">Mobil ilova</option>
                                            <option value="smm">SMM</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="single-form form-group">
                                        <label for="phone">Telefon raqamingiz</label>
                                        <input type="text" name="phone" id="phone" placeholder="+99 8" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                    <div class="single-form form-group">
                                        <label for="source">Biz haqimizda qayerdan bildingiz</label>
                                        <input type="text" name="source" id="source" placeholder="Telegram, Instagram, boshqa (qayerdan bilganingizni yozib qoldiring...))" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="btn btn-xs main-btn">Ro'yxatdan o'tish</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>
    <section id="map" class="map-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.6870358329943!2d69.22456751479358!3d41.293915309748606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a4d97939b55%3A0xd3f382e02db7a147!2zNyDQv9GA0L7RgdC_0LXQutGCINCR0YPQvdGR0LTQutC-0YAsINCi0LDRiNC60LXQvdGCIDEwMDA0Mywg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1635448460103!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--====== CONTACT PART ENDS ======-->
@endsection
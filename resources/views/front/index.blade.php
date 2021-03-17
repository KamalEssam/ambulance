@extends('layouts.front')
@section('content')

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content d-flex flex-md-row flex-column">
                            <div class="banner-left text-md-right">
                                <h1 class="text-uppercase">Hamida Ambulance Services</h1>
                            </div>
                            <div class="banner-right position-relative">
                                <p>24/7 we are ready to hear you.
                                    Any time, any where we go to your door or hospital with modern and latest facilities ambulance.
                                </p>
                                <a class="main_btn mt-md-0 mt-4" href="/reservation">Reserve Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--================ Start CTA Area ================-->
    <section class="cta_area mt-3  section_gap_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta_inner d-flex flex-md-row flex-column justify-content-between align-items-center">
                        <div class="mb-md-0 mb-4 text-sm-left text-center">
                            <p>Get a quick response from our team</p>
                            <h1>Make a call to get in touch</h1>
                        </div>
                        <div class="">
                            <a href="tel:{{setting()->phone}}" class="main_btn"><i class="lnr lnr-phone-handset"></i> Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End CTA Area ================-->



    <!--================ Start Home Blog Area =================-->
    <section class="home-blog-area">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h2> Our Ambulances
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-home-blog">
                        <div class="thumb">
                            <img class="f-img img-fluid mx-auto" src="/front/img/ac.jpg" alt="" />
                        </div>
                        <div class="home-blog-box">
                            <a href="#">
                                <h4>Ac ambulance service</h4>
                            </a>
                            <p>Best ambulance service in KSA. It is largest and very fast service company for carry patients or dead body. Ac ambulance service using opportunity is 7/8 people can be seat beside of patients or dead body in relax. AC ambulance service is best for all kinds people it’s rent is simple. 24/7 hours ambulance service is available in ksa.call for emergency ambulance.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-home-blog">
                        <div class="thumb">
                            <img class="f-img img-fluid mx-auto" src="/front/img/non-ac.jpg" alt="" />
                        </div>
                        <div class="home-blog-box">
                            <a href="#">
                                <h4>Non ac ambulance</h4>
                            </a>
                            <p>Non-Ac ambulance service in Damam generally used for patients and dead body it is low cost then ac ambulance. Non-ac ambulance service using an opportunity is 7/8 people can be seat beside of patient or dead body with relaxing. Non Ac ambulance service is best for all kinds of people it’s rent is simple. 24/7 hours ambulance service is available. You may hire ambulance with trust so call for ambulance.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-home-blog">
                        <div class="thumb">
                            <img class="f-img img-fluid mx-auto" src="/front/img/frezzer.jpg" alt="" />
                        </div>
                        <div class="home-blog-box">
                            <a href="#">
                                <h4>Freezing ambulance</h4>
                            </a>
                            <p>
                                We provide Ac, Non ac and Freezing ambulance all districts of ksa with Damam, Airport, Uttora. Freezing ambulance used for keeping well dead body. Freezing ambulance used mainly for dead body carry and that keeps a dead body intact for a long time day by day. Freezing ambulance using is best way for save a dead body.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ end Home Blog Area =================-->

    <!--================ Start Service Area =================-->
    <section class="service-area section_gap_top">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h2 class="text-white">
                        We have Various Essentials <br />
                        to support your patient
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="single-service col-lg-4 col-md-6">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="/front/img/wheelchair.jpg" alt="" />
                    </div>
                    <div class="service-box">
                        <h3>Wheel Chair Details
                        </h3>
                        <p>We have several wheelchairs arrangements. We provide wheelchairs to all patients who need a wheelchair. It is often seen that patients need to take up to 1 to 10 floors and have to be removed, in which case a wheelchair is needed.  Wheelchairs are kept clean after the service is provided to each patient.
                        </p>
                        <a href="/contact">Contact for more</a>
                    </div>
                </div>

                <div class="single-service col-lg-4 col-md-6">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="/front/img/oxygen.png" alt="" />
                    </div>
                    <div class="service-box">
                        <h3>
                            Oxygen Details
                        </h3>
                        <p>We always stock fully pressured oxygen cylinder in our every Ambulance. We also reserve essential things in such as Maks ,Kanul, Meter, etc. Sometimes, if a patient takes oxygen or is needed, we give oxygen. We are providing oxygen for free.  We have trained drivers and assistants to give the oxygen to the patient.
                        </p>
                        <a href="/contact">Contact for more</a>
                    </div>
                </div>

                <div class="single-service col-lg-4 col-md-6">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="/front/img/stretcher.png" alt="" />
                    </div>
                    <div class="service-box">
                        <h3>Stretcher Details
                        </h3>
                        <p>Our Ambulance Stretchers are excellent in quality. There is a portable and dedicated stretcher for removing the patient from the 10th floor or 12th floor. We always keep our stretcher clean after serving any patient. After coming out with the service of each patient or body, the car is cleaned and cleaned.
                        </p>
                        <a href="/contact">Contact for more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ end Service Area =================-->

    <!--================ End Home Banner Area =================-->
    <!--================ Feature Area =================-->
    <section class="feature-area section_gap_top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-feature">
                                <img src="/front/img/feature/f1.png" alt="">
                                <h4>Online Reservation</h4>
                                <p>
                                    The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                                </p>
                                <a href="/reservation">Make a reservation</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-feature">
                                <img src="/front/img/feature/f2.png" alt="">
                                <h4>Have a Question?</h4>
                                <p>
                                    The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                                </p>
                                <a href="/contact">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <div class="single-feature">
                                <img src="/front/img/feature/f3.png" alt="">
                                <h4>Equipments</h4>
                                <p>
                                    The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                                </p>
                                <a href="/services">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-md-0 col-md-12 text-left section-title-wrap">
                    <h5>About {{setting()->app_name}}</h5>
                    <h2>
                        We’re committed to save your happiness
                    </h2>

                    <h4>24/7 we are ready to hear you. Any time, any where we go to your door or hospital with modern and latest facilities ambulance. Don’t worry about prices or rent fare. We will keep lower rent and lower other costs. We have no hidden charges.</h4>

                    <p>Our life support modern ambulances are equipped with life saving machines like ventilator, cardiac monitors, suction machine, infusion pumps etc. and having all emergency life saving medications, hence providing an environment of intensive care unit (ICU) of any hospital.</p>


                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->
@endsection

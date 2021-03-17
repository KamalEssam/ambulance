@extends('layouts.front')
@section('content')

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area banner-area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content d-flex flex-md-row flex-column">
                            <div class="banner-left text-md-right">
                                <h3 class="text-uppercase">About Us</h3>
                            </div>
                            <div class="banner-right position-relative">
                                <p>
                                    Get ambulance over a phone call to save life
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

          <!--

            <h4>24/7 we are ready to hear you. Any time, any where we go to your door or hospital with modern and latest facilities ambulance. Don’t worry about prices or rent fare. We will keep lower rent and lower other costs. We have no hidden charges.</h4>

            <p>Our life support modern ambulances are equipped with life saving machines like ventilator, cardiac monitors, suction machine, infusion pumps etc. and having all emergency life saving medications, hence providing an environment of intensive care unit (ICU) of any hospital.</p>

-->


        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

@endsection

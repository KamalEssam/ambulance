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
                                <h3 class="text-uppercase">Essentials</h3>
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


  <!--================ Start Service Area =================-->
  <section class="service-area section_gap_top" style="background: #d7d4f0">
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
@endsection

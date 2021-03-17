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
                                <h3 class="text-uppercase">Reservation</h3>
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


    <!--================ Start Quote Area =================-->
    <section class="quote-area section_gap_top section_gap_bottom">
      <div class="container">
        <div class="row justify-content-center text-left section-title-wrap">
          <div class="col-lg-12">
            <h2 class="">
              Submit your information for reservation <br>
              so that we can reach to you soon
            </h2>
          </div>
        </div>
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-12">

              @if(session()->has('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif

              @if($errors->any())
                  <div class="alert alert-danger">
                      {{ $errors->first() }}
                  </div>
              @endif
            <div class="estimated-cost">
              <form class="form-wrap" action="{{route('reservationSubmit')}}" method="POST" id="reservation-form"
                    novalidate="novalidate">
                  {{csrf_field()}}
                <nav>
                  <div class="nav nav-tabs justify-content-md-start justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-getEstimation-tab" data-toggle="tab" href="#nav-getEstimation"
                      role="tab" aria-controls="nav-getEstimation" aria-selected="true">Reservation information</a>
                  </div>
                </nav>

                <!-- Tab Content -->
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-getEstimation" role="tabpanel" aria-labelledby="nav-getEstimation-tab">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstName">Name</label>
                          <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter  name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter  name'"  value="{{old('name')}}"/>
                        </div>
                      </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailAddress">Phone</label>
                                <input type="text" class="form-control " required name="phone" id="emailAddress" placeholder="Enter phone number"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" value="{{old('phone')}}" />
                            </div>
                        </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastName">Date</label>
                          <input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" id="date" placeholder="Enter reservation date" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter reservation date'" />
                        </div>
                      </div>

                        <div class="col-md-6">
                            <div class="form-group form-select" id="default-select">
                                <label for="speciality">Type</label>
                                <select  name="type" id="type" class="" required="">
                                    <option value="">Select Type</option>
                                    <option value="NICU Ambulance">NICU Ambulance</option>
                                    <option   value="Air Ambulance">Air Ambulance</option>
                                    <option  value="Freezer Van">Freezer Van</option>
                                    <option  value="ICU Ambulance">ICU Ambulance</option>
                                    <option  value="Non-AC Ambulance">Non-AC Ambulance</option>
                                    <option  value="AC Ambulance">AC Ambulance</option>
                                </select>
                            </div>
                        </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="pickup">Pickup Location</label>
                          <input type="text" class="form-control" name="pickup" id="pickup" placeholder="Enter pickup location"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter pickup location'" value="{{old('pickup')}}" />
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="destination">Destination</label>
                          <input type="text" class="form-control" name="destination"  id="destination" placeholder="Enter destination"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter destination'" value="{{old('destination')}}" />
                        </div>
                      </div>
                      <div class="col-lg-12 mt-4">
                        <div class="text-center confirm_btn_box">
                          <button type="submit" class="main_btn text-uppercase" onclick="this.form.submit()">Request for Reservation</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Quote Area =================-->

@endsection

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
                <h3 class="text-uppercase">Contact Us</h3>
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


  <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">


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

            <form class="form-contact contact_form" action="{{route('submitFrontInquiry')}}" method="post" id="contactForm"
            novalidate="novalidate">

              {{csrf_field()}}
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                    </div>
                </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                    </div>
                  </div>
            </div>
            <div class="form-group mt-2 mb-5 mb-lg-0">
              <button type="submit" class="button button-contactForm main_btn">Send Message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
            <div class="media-body">
              <h3>{{$setting->address}}</h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></h3>
              <p>24/7 we are active to hear you.</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
            <div class="media-body">
              <h3><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection

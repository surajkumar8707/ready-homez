@extends('layouts.app')
@section('title', getSettings()->app_name.':: Contact Page')
@section('content')

<div class="hero-wrap" style="background-image: url({{ public_asset('assets/front/images/bg_1.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                <h1 class="mb-3 bread">Contact US</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h3">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
          <div class="info p-4">
            <p>{{ getSettings()->address }}</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="info p-4">
            <p><span>Phone:</span> <a href="tel:+91{{ getSettings()->contact }}" style="color: #eab000;"> {{ getSettings()->contact }}</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="info p-4">
            <p><span>Email: <a href="mailto:{{ getSettings()->email }}" style="color: #eab000;">{{ getSettings()->email }}</a></span></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="info p-4">
            <p><span>Website</span> <a href="{{ url('') }}" style="color: #eab000;">{{ url('') }}</a></p>
          </div>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="{{ route('front.save.contact') }}" method="POST" class="bg-white p-5 contact-form">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required=""></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>


        </div>

        <div class="col-md-6 d-flex">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.4388960939127!2d77.04064397494841!3d28.40601069433233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d230012fecaa9%3A0x683ad2c50f86ff52!2sAvanti%20Homez!5e0!3m2!1sen!2sin!4v1727426402811!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

  </section>
    {{-- <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form" method="POST" action="{{ route('front.save.contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="text" name="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email * " type="email" name="email" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="number" name="phone">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Subject" type="text" name="subject">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message * " name="message" required></textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="480" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact --> --}}
@endsection

@push('style')
<style>
    .info {
      font-size: 17px;
      font-weight: 1000;
      background-color: black;
      color: #eab000;
    }
  </style>
@endpush

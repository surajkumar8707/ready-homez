@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url({{ public_asset('assets/front/images/construction.png') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                <h1 class="mb-3 bread">Construction Services</h1>
            </div>
        </div>
    </div>
</div>

<section id="construction" class="py-5">
    <div class="container">
        {{-- <div class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Construction Services</h1>
            <p class="lead">Building your dreams, one project at a time.</p>
            <img src="{{ public_asset('assets/front/images/construction.png') }}" alt="Construction Banner" class="img-fluid rounded shadow">
        </div> --}}

        <div class="content">
            <h2 class="mb-4 font-weight-bold">Building Your Vision, Brick by Brick</h2>
            <p class="text-muted">
                At Ready Homez, we offer comprehensive construction solutions that bring your dream projects to life. From planning to execution, our experienced team ensures precision, quality, and timely delivery.
            </p>

            <h3 class="my-4 font-weight-bold">Our Construction Services Include:</h3>
            <ul class="list-unstyled">
                <li class="mb-3"><i class="fas fa-hammer"></i> Residential Building Construction</li>
                <li class="mb-3"><i class="fas fa-industry"></i> Commercial Complexes and Offices</li>
                <li class="mb-3"><i class="fas fa-warehouse"></i> Industrial Structures</li>
                <li class="mb-3"><i class="fas fa-tools"></i> Renovation and Remodeling</li>
            </ul>

            <h3 class="mt-5 font-weight-bold">Why Choose Us?</h3>
            <p class="text-muted">
                With years of experience and a commitment to excellence, Ready Homez is your trusted partner in construction. We ensure high standards of quality and deliver projects on time, within budget.
            </p>

            {{-- <div class="text-center mt-5">
                <img src="{{ asset('public/assets/front/images/construction-site.jpg') }}" alt="Construction Site" class="img-fluid rounded shadow">
            </div> --}}
        </div>
    </div>
</section>

<div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading"></span>
        <h2 class="mb-4">Our Projects</h2>
    </div>
</div>
<div id="ourProjectCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#ourProjectCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#ourProjectCarousel" data-slide-to="1" class=""></li>
        <li data-target="#ourProjectCarousel" data-slide-to="2" class=""></li>
        <li data-target="#ourProjectCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="{{ public_asset('assets/front/images/construction/1.jpg') }}" alt="John Doe" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="{{ public_asset('assets/front/images/construction/5.jpg') }}" alt="Jane Smith" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="{{ public_asset('assets/front/images/construction/6.jpg') }}" alt="Michael Brown" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="https://thumbs.dreamstime.com/b/house-under-construction-blueprints-building-project-53360048.jpg" alt="Michael Brown" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#ourProjectCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#ourProjectCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection

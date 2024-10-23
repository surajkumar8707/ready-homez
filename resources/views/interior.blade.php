@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url({{ public_asset('assets/front/images/interior.png') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                <h1 class="mb-3 bread">Interior Design Services</h1>
            </div>
        </div>
    </div>
</div>

<section id="interior" class="py-5 bg-light">
    <div class="container">
        {{-- <div class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Interior Design Services</h1>
            <p class="lead">Transform your spaces with sophistication and style.</p>
            <img src="{{ public_asset('assets/front/images/interior.png') }}" alt="Interior Design Banner" class="img-fluid rounded shadow">
        </div> --}}

        <div class="content">
            <h2 class="mb-4 font-weight-bold">Transforming Spaces with Style and Elegance</h2>
            <p class="text-muted">
                Ready Homez specializes in creating beautiful and functional interiors. From homes to offices, our designs reflect your unique tastes and needs, ensuring a personalized touch.
            </p>

            <h3 class="my-4 font-weight-bold">Our Interior Design Services Include:</h3>
            <ul class="list-unstyled">
                <li class="mb-3"><i class="fas fa-paint-brush"></i> Residential Interior Design</li>
                <li class="mb-3"><i class="fas fa-building"></i> Commercial Interior Spaces</li>
                <li class="mb-3"><i class="fas fa-couch"></i> Furniture and Fixture Planning</li>
                <li class="mb-3"><i class="fas fa-drafting-compass"></i> 3D Visualization and Space Planning</li>
            </ul>

            <h3 class="mt-5 font-weight-bold">Our Design Philosophy</h3>
            <p class="text-muted">
                We strive to create harmony between aesthetics and functionality, ensuring every design project reflects your style, comfort, and practical needs.
            </p>

            {{-- <div class="text-center mt-5">
                <img src="{{ asset('public/assets/front/images/living-room.jpg') }}" alt="Beautiful Living Room Design" class="img-fluid rounded shadow">
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
                        <img src="https://www.decorpot.com/images/blogimage1925447905nature-inspired-retreat-wallpaper.jpg" alt="John Doe" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="https://img.freepik.com/premium-photo/minimalist-pastel-seamless-pattern-tiny-vintage-floral-wallpaper_776894-27171.jpg" alt="Jane Smith" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="https://img.freepik.com/free-photo/rattan-basket-by-floral-wall-background_53876-110322.jpg?semt=ais_hybrid" alt="Michael Brown" style="width: 100%; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="review_text">
                        <img src="https://images2.alphacoders.com/134/1347182.png" alt="Michael Brown" style="width: 100%; height: 500px;">
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

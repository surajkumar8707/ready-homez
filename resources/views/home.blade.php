@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Home Page')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="position: relative;">
            <!-- Video background -->
            <div class="video-container">
                <video class="slider-item" autoplay muted loop id="background-video" style="width:100%; height:auto;">
                    <source src="https://avantirealtech.com/images/bg.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Text overlay -->
            <div class="overlay-text"
                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; font-family: 'Playfair Display', serif; /* Font for the heading */
            font-size: 6em;
            font-weight: 700;">
                <span style="color: #eab000">{{ getSettings()->app_name }}</span><br>
                <div class="subheading" style="font-size: 30px;">
                    Welcome to {{ getSettings()->app_name }} – Your Dream Home Awaits!<br>
                    Your Dream Home, Just a Click Away
                </div>
            </div>
        </div>


    </section>

    <section class="ftco-bar">
        <div class="strip-list-contact">
            <ul class="strip-container-contact">
                <li>
                    <i class="fa-solid fa-city logo-contact"></i>
                    <p class="para-list-contact"><b>350+ Exclusive Inventory</b></p>
                </li>
                <li>
                    <i class="fa-solid fa-award logo-contact"></i>
                    <p class="para-list-contact"><b>Lowest Price Guarantee</b></p>
                </li>
                <li>
                    <i class="fa-solid fa-map-location-dot logo-contact"></i>
                    <p class="para-list-contact"><b>Project Site Visits</b></p>
                </li>
                <li>
                    <i class="fa-solid fa-folder-open logo-contact"></i>
                    <p class="para-list-contact"><b>Post Sales Services</b></p>
                </li>
                <li>
                    <i class="fa-solid fa-square-poll-vertical logo-contact"></i>
                    <p class="para-list-contact"><b>Comparative Market Analysis</b></p>
                </li>
            </ul>
        </div>
    </section>


    <!-- -------------------------------top real estate developers------------------------------------- -->

    <section class="ftco-section ftco-properties">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4">Top Real Estate Developers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="builders-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/1.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/2.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/3.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/4.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/5.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/6.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/7.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/8.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item">
                   <div class="builders" style="width: 178.333px; margin-right: 20px;">
                    <div class="item client-slide">
                     <a href="#" target="_blank"> <img src="https://avantirealtech.com/images/builders/9.jpg" alt="Top Real Estate Builders" title="Ireo"
                       style="max-width:100%"></a>
                    </div>
                   </div>
                  </div> -->
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/10.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/11.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/12.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/13.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/14.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/15.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/16.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/17.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/18.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/19.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/20.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/21.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/22.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/23.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/24.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/25.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/26.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/27.png"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 178.333px; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://avantirealtech.com/images/builders/28.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more items as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .ftco-properties .builders-slider .item {
            padding: 10px;
        }

        .ftco-properties .builders-slider .img {
            width: 100%;
            height: 150px;
            /* Adjust the height for smaller image size */
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            /* Optional: Rounded corners */
        }

        .ftco-properties .builders-slider .item a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
        }

        .owl-carousel .owl-item {
            transition: all 0.5s ease-in-out;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.builders-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false, // If you want navigation buttons, set this to true
                autoplay: true, // Enables auto play
                autoplayTimeout: 1000, // Auto play interval in milliseconds
                autoplayHoverPause: true, // Pause on hover
                responsive: {
                    0: {
                        items: 2 // 1 item for mobile devices
                    },
                    600: {
                        items: 3 // 3 items for medium-sized screens
                    },
                    1000: {
                        items: 6 // 6 items for larger screens
                    }
                }
            });
        });
    </script>



    <!-- --------------------------top real estate ends------------------------------------ -->



    {{-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-4">All clients are very happy with my work</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="350">350 +</strong>
                                    <span>Interior site complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="150">150</strong>
                                    <span>Construction site complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="7000">7,000</strong>
                                    <span>Flates and kothi rent out</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="150">150</strong>
                                    <span>Flates and kothi sell out</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-4">All clients are very happy with my work</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon mb-3">
                                        <i class="fas fa-couch fa-2x text-white"></i>
                                    </div>
                                    <strong class="number" data-number="350">350 +</strong>
                                    <span style="font-size: 18px;font-weight : bold">Interior site complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon mb-3">
                                        <i class="fas fa-hammer fa-2x text-white"></i>
                                    </div>
                                    <strong class="number" data-number="150">150</strong>
                                    <span style="font-size: 18px;font-weight : bold">Construction site complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon mb-3">
                                        <i class="fas fa-building fa-2x text-white"></i>
                                    </div>
                                    <strong class="number" data-number="7000">7,000</strong>
                                    <span style="font-size: 18px;font-weight : bold">Flats and kothi rent out</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon mb-3">
                                        <i class="fas fa-home fa-2x text-white"></i>
                                    </div>
                                    <strong class="number" data-number="150">150</strong>
                                    <span style="font-size: 18px;font-weight : bold">Flats and kothi sell out</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <p class="sectionTag text-big" style="text-decoration: underline;">About {{ getSettings()->app_name }}
                    </p>
                    <p class="sectionSubTag text-small">
                        At Ready Homez, we redefine the real estate experience with a strong focus on client satisfaction
                        and customized services. Based in the vibrant city of Gurgaon/Gurugram, we provide a comprehensive
                        range of real estate solutions to cater to our clients' diverse needs. Whether you're looking for
                        commercial spaces such as retail outlets, office environments, or residential properties from
                        luxurious condominiums to budget-friendly homes, we’ve got you covered.
                        <br><br>
                        <span id="more-text" style="display: none;">
                            Our expertise extends to leasing, asset management, and strategic real estate consulting,
                            offering full-cycle support to guide you through the complexities of the property market. By
                            understanding your unique requirements—whether it’s location, accessibility, investment value,
                            or developer reputation—we create tailored solutions that align perfectly with your long-term
                            vision. At Ready Homez, we ensure that every real estate decision you make is informed,
                            strategic, and future-focused.
                        </span>
                    </p>
                    <button id="read-more-btn" class="btn btn-primary" style="margin-bottom: 20px;"
                        onclick="toggleReadMore()">Read More</button>
                </div>
                <div class="col-lg-5">
                    <img src="{{ public_asset('assets/front/images/about1.jpg') }}" alt="{{ getSettings()->app_name }} Image"
                        class="img-fluid thumbnail-contact">
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleReadMore() {
            var moreText = document.getElementById("more-text");
            var btnText = document.getElementById("read-more-btn");

            if (moreText.style.display === "none") {
                moreText.style.display = "inline";
                btnText.innerHTML = "Read Less";
            } else {
                moreText.style.display = "none";
                btnText.innerHTML = "Read More";
            }
        }
    </script>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-pin"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Project Site Visits</h3>
                            <p>Experience our projects firsthand with exclusive site visits. Explore the exceptional
                                quality and innovative design of our properties in person.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-detective"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Experienced Agents</h3>
                            <p>Our experienced agents are dedicated to providing exceptional support. Whether you have
                                questions, need advice, or require assistance, our knowledgeable team is here to ensure
                                a smooth and informed experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-house"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Premium Selection</h3>
                            <p>Discover our Premium Selection, where luxury and quality meet. We offer a curated
                                collection of top-tier properties designed to exceed your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-purse"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Protected Payments</h3>
                            <p>At {{ getSettings()->app_name }}, your financial safety is our top priority. Our Protected
                                Payments
                                system ensures that every transaction is secure, giving you peace of mind as you
                                complete your purchases.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- -------------------running projects for fresh booking-------------------- -->


    <section class="ftco-section ftco-properties">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4">Rent & sale Projects</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="properties">
                                <a href="javascript::void;" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ public_asset('assets/front/images/rent-sale/1.jpg') }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                {{-- <div class="text p-3">
                                    <span class="status sale">Sale</span>
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Conscient Parq<br>
                                                    Sector 80 Gurgaon</a></h3>
                                            <p>3, 4 BHK Apartment</p>
                                        </div>
                                        <div class="two">
                                            <span class="price">₹ 3.07 - 5.03 Cr</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="item">
                            <div class="properties">
                                <a href="javascript::void;" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ public_asset('assets/front/images/rent-sale/2.jpg') }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properties">
                                <a href="javascript::void;" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ public_asset('assets/front/images/rent-sale/3.jpg') }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properties">
                                <a href="javascript::void;" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ public_asset('assets/front/images/rent-sale/4.jpg') }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properties">
                                <a href="javascript::void;" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ public_asset('assets/front/images/rent-sale/5.jpg') }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <!-- -------------------running projects for fresh booking  end-------------------- -->



    <section class="ftco-section ftco-properties">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4">Interior wark Properties</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="properties">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ public_asset('assets/front/images/interior-wark/1.jpg') }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                {{-- <div class="text p-3">
                                    <span class="status sale">Sale</span>
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Uppals G99</a></h3>
                                            <p>Plots</p>
                                        </div>
                                        <div class="two">
                                            <!-- <span class="price">₹3.4 Cr</span> -->
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        @for ($i = 2; $i <= 16; $i++)
                            <div class="item">
                                <div class="properties">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url({{ public_asset('assets/front/images/interior-wark/' . $i . '.jpg') }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-locations" class="featured-locations section light-background">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Construction</h2>
            {{-- <p>Find your home in the city of your choice</p> --}}
        </div><!-- End Section Title -->

        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="featured-item">
                        <div class="item-img">
                            <img class="img-fluid" src="{{ public_asset('assets/front/images/construction/1.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        {{-- <div class="item-info">
                            <h4>Southern Periferal Road (SPR)</h4>
                        </div> --}}
                    </div>
                </div>

                @for ($i = 2; $i <= 4; $i++)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="featured-item">
                            <div class="item-img">
                                <img class="img-fluid" src="{{ public_asset('assets/front/images/construction/' . $i . '.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                @endfor

            </div>

        </div>

    </section>
@endsection

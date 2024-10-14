@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Home Page')
@section('content')

    <div class="hero-wrap" style="background-image: url({{ public_asset('assets/front/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                    <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                    <h1 class="mb-3 bread">About</h1>
                </div>
            </div>
        </div>
    </div>

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
                    <img src="{{ public_asset('assets/front/images/about1.jpg') }}"
                        alt="{{ getSettings()->app_name }} Image" class="img-fluid thumbnail-contact">
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
@endsection

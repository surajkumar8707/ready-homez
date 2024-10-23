@extends('layouts.app')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ public_asset('assets/front/images/rent_property.png') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                    <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                    <h1 class="mb-3 bread">Rent Property Services</h1>
                </div>
            </div>
        </div>
    </div>

    <section id="rent-property" class="py-5">
        <div class="container">
            {{-- <div class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Rent Property Services</h1>
            <p class="lead">Discover your next home or office space with ease.</p>
            <img src="{{ public_asset('assets/front/images/rent_property.png') }}" alt="Rent Property Banner" class="img-fluid rounded shadow">
        </div> --}}

            <div class="content">
                <h2 class="mb-4 font-weight-bold">Finding Your Ideal Rental Property</h2>
                <p class="text-muted">
                    Ready Homez offers a diverse range of rental properties that cater to various preferences and budgets.
                    Whether you're seeking an apartment, house, or commercial space, our team ensures a smooth and
                    hassle-free renting experience.
                </p>

                <h3 class="my-4 font-weight-bold">Our Rental Services Include:</h3>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-home"></i> Residential Apartments and Houses</li>
                    <li class="mb-3"><i class="fas fa-briefcase"></i> Commercial Office Spaces and Shops</li>
                    <li class="mb-3"><i class="fas fa-calendar-alt"></i> Long-Term and Short-Term Rental Options</li>
                    <li class="mb-3"><i class="fas fa-handshake"></i> Property Viewing and Agreement Assistance</li>
                </ul>

                <h3 class="mt-5 font-weight-bold">Why Rent with Ready Homez?</h3>
                <p class="text-muted">
                    Our extensive network and local expertise ensure you get the best rental options in prime locations.
                    From property search to legal paperwork, we make renting a seamless process for you.
                </p>

                {{-- <div class="text-center mt-5">
                <img src="{{ asset('public/assets/front/images/rental-property.jpg') }}" alt="Rental Property" class="img-fluid rounded shadow">
            </div> --}}
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-properties">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4">Our Projects</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="builders-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://img.freepik.com/free-vector/house-rent-concept-background_23-2147780099.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>House rent concept background</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Home Rent</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://media.istockphoto.com/id/524085051/photo/beautiful-exterior-of-new-luxury-home-at-twilight.jpg?b=1&s=612x612&w=0&k=20&c=qdpO9Ozs-ul_zygkRjHuiah3aQ5wspycUNnOtZ0Swq8="
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Beautiful exterior of new luxury home at twilight</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://www.shutterstock.com/image-photo/investment-business-field-rental-property-260nw-1911244981.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Investment business field rental property</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://images.pexels.com/photos/1546168/pexels-photo-1546168.jpeg?cs=srgb&dl=pexels-davidmcbee-1546168.jpg&fm=jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Multiple rent</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://media.istockphoto.com/id/1335976231/photo/aerial-view-of-residential-distratic-at-islington-ave-and-rutherford-road-detached-and-duplex.jpg?s=612x612&w=0&k=20&c=SZOsi79bxzs3W9BmwxZHpIzWWxFjafALZy06CSDd7Go="
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Residential distratic at islington</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://cdn.tapetender70er.de/media/image/fe/98/2e/Arzt-Tapete595783a9cf7c0_944x944.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Arzt Tapete</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="builders" style="width: 100%; margin-right: 20px;">
                                <div class="item client-slide">
                                    <a href="#" target="_blank"> <img
                                            src="https://5.imimg.com/data5/SELLER/Default/2021/11/QH/OL/FE/4117672/hospital-wallpapers-500x500.jpg"
                                            alt="Top Real Estate Builders" title="Ireo" style="max-width:100%;height:200px"></a>
                                            <p>Hospital</p>
                                </div>
                            </div>
                        </div>
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
                        items: 4 // 6 items for larger screens
                    }
                }
            });
        });
    </script>
@endsection

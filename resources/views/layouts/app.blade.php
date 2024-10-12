
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Real Estate Broker in Gurgaon - Avanti Homez</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ public_asset('assets/front/css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/animate.css') }}">

	<link rel="stylesheet" href="{{ public_asset('assets/front/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ public_asset('assets/front/css/aos.css') }}">

	<link rel="stylesheet" href="{{ public_asset('assets/front/css/ionicons.min.css') }}">

	<link rel="stylesheet" href="{{ public_asset('assets/front/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/jquery.timepicker.css') }}">


	<link rel="stylesheet" href="{{ public_asset('assets/front/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/style.css') }}">
	<link rel="stylesheet" href="{{ public_asset('assets/front/css/property-page.css') }}">
	<link href="{{ public_asset('assets/front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ea60c8fdf2.js" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            /* Adjust as necessary */
            height: 100vh;
            /* Full viewport height */
            background-color: black;
            /* Black background */
            overflow: hidden;
            /* Ensures video stays within container */
        }

        /* Style for the video */
        #background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures video covers the container without distortion */
        }
    </style>
    @stack('style')

</head>

<body>
	@include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    @stack('script')


</body>

</html>

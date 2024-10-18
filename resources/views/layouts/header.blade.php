<div class="top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-auto d-flex align-items-center">
                        <p class="num"></span><a
                                href="tel:=919650425860">9650425860</a></p>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <p class="num"><span class="icon-mail"></span><a
                                href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a></p>
                    </div>
                </div>
                <style>
                    @media (max-width: 767px) {

                        /* Targeting mobile devices */
                        .container .row .col-auto p.num {
                            font-size: 11px;
                            /* Set font size to 11px */
                        }
                    }
                </style>
            </div>
        </div>
    </div>
</div>

<div class="ftco_navbar bg-dark ftco-navbar-light">
    <nav class="navbar navbar-expand-lg navbar-dark " id="ftco-navbar">
        <a class="navbar-brand p-2" href="#"><img src="{{ public_asset(getSettings()->header_image) }}"
                alt="AvantiHomeZ" width="180"></a>
        <button class="navbar-toggler p-3" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-lg-auto">
                <!--Home Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('construction') }}">Construction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('interior') }}">Interior</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('rent-property') }}">Rent and Property</a>
                </li>



                <!-- Portfolio dropdown -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="portfolioDropdown">
                        <a class="dropdown-item" href="{{ url('construction') }}">Construction</a>
                        <a class="dropdown-item" href="{{ url('interior') }}">Interior</a>
                        <a class="dropdown-item" href="{{ url('rent-property') }}">Rent and Property</a>
                        <!-- <a class="dropdown-item" href="#">Resale</a> -->
                    </div>
                </li> --}}

                <!-- Other Nav items -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact-us') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

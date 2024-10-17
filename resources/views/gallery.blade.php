@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Gallery Page')
@section('content')
    <div class="hero-wrap" style="background-image: url({{ public_asset('assets/front/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                    <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
                    <h1 class="mb-3 bread">Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->
    {{-- <div class="gallery">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure> class="my-2"<img src="{{ public_asset('assets/front/images/interior-wark/11.jpg.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end gallery -->
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-4">
                <img class="my-2" src="{{ public_asset('assets/front/images/interior-wark/11.jpg') }}" alt="" height="200" width="100%">
            </div>
            <div class="col-md-4">
                <img class="my-2" src="{{ public_asset('assets/front/images/interior-wark/15.jpg') }}" alt="" height="200" width="100%">
            </div>
            <div class="col-md-4">
                <img class="my-2" src="{{ public_asset('assets/front/images/interior-wark/2.jpg') }}" alt="" height="200" width="100%">
            </div>

            <div class="col-md-4">
                <img class="my-2" src="{{ public_asset('assets/front/images/interior-wark/1.jpg') }}" alt="" height="200" width="100%">
            </div>
            <div class="col-md-4">
                <img class="my-2" src="{{ public_asset('assets/front/images/interior-wark/3.jpg') }}" alt="" height="200" width="100%">
            </div>
            <div class="col-md-4">
                <img class="my-2" src="{{ public_asset('assets/front/images/interior-wark/5.jpg') }}" alt="" height="200" width="100%">
            </div>
        </div>
        {{-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

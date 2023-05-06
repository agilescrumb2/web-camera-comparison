@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }})">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Fullkit Details</h2>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Fullkit Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <!-- Single Benefit Start -->
                    <div class="single-benefit">
                        <a href="/compare_kamera"> <img src="{{ asset('images/12.png') }}" alt="Icon"></a>
                        <h3 class="title">Body Only</h3>
                        {{-- <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-benefit">
                        <img src="{{ asset('images/11.png') }}" alt="Icon">
                        <h3 class="title">Lensa</h3>
                        {{-- <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-benefit">
                        <img src="{{ asset('images/bcg.png') }}" alt="Icon">
                        <h3 class="title">Fullkit</h3>
                        {{-- <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

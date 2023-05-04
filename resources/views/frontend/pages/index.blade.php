@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section slider-section">
        <div class="container">
            <div class="slider-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="single-slider swiper-slide animation-style-01">
                            <div class="slider-content">
                                <p>Give u New Information</p>
                                <h2 class="title">Camera <br> Comparison <br> Information</h2>

                                <a href="/kamera" class="btn btn-primary btn-hover-dark">Start</a>
                            </div>

                            <div class="slider-images"> <br><br><br>
                                <img src="{{ asset('images/camcam.png') }}" alt="Slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

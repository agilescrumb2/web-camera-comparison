@extends('frontend.master')
@section('title')
    Pilihan Menu Compare
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/ab.jpg') }})">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Compare</h2>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Compare</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="single-benefit">
                        <a href="/compare_kamera"> <img src="{{ asset('images/12.png') }}" alt="Icon"></a>
                        <h3 class="title">Body Only</h3>
                        <p>Temukan perbedaan dan pilih kamera terbaik dengan mudah melalui menu perbandingan kamera kami.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-benefit">
                        <a href="/compare_lensa"> <img src="{{ asset('images/11.png') }}" alt="Icon"></a>
                        <h3 class="title">Lensa</h3>
                        <p>Temukan lensa ideal yang sesuai dengan kebutuhan fotografi Anda dengan memanfaatkan menu
                            perbandingan lensa kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-benefit">
                        <a href="/compare_fullkit"> <img src="{{ asset('images/bcg.png') }}" alt="Icon"></a>
                        <h3 class="title">Fullkit</h3>
                        <p>Lengkapi perjalanan fotografi Anda dengan sempurna melalui menu perbandingan full kit kami.
                            Temukan kombinasi kamera dan lensa yang ideal untuk memenuhi segala kebutuhan fotografi Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

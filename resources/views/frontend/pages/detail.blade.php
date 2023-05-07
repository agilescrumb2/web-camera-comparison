@extends('frontend.master')
@section('title')
    Detail Kamera
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }})">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Kamera Details</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Kamera Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-images">
                        <div class="details-gallery-images">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-img zoom">
                                            <img src="{{ asset($camera['gambar']) }}" alt="Product Image">
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="{{ asset($camera['gambar']) }}">
                                                    <a href="javascript:void(0)">
                                                        <i class="lastudioicon-full-screen"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-description">
                        <h4 class="product-name">{{ $camera['nama_kamera'] }}</h4>
                        <div class="price">
                            <span class="sale-price">IDR {{ $camera['harga'] }}</span>
                        </div>
                        <div class="product-meta">
                            <div class="meta-action">
                                <a class="action" href="{{ route('compare.add', $camera['id']) }}"><i
                                        class="pe-7s-like"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="single-info">
                                <span class="lable">Mode Autofokus : </span>
                                <span class="value">{{ $camera['mode_af'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Flash Internal : </span>
                                <span class="value">{{ $camera['built_in_flash'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Kecepatan Pemotretan : </span>
                                <span class="value">{{ $camera['kecepatan_pemotretan'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Dimensi : </span>
                                <span class="value">{{ $camera['dimensi'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">ISO Efektif :</span>
                                <span class="value">{{ $camera['iso_efektif'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Kompensasi Pemaparan : </span>
                                <span class="value">{{ $camera['exposure_compensation'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Mode Flash : </span>
                                <span class="value">{{ $camera['mode_flash'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Resolusi Gambar : </span>
                                <span class="value">{{ $camera['resolusi_gambar'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Stabilizer Gambar : </span>
                                <span class="value">{{ $camera['image_stabilizer'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Ukuran Monitor LCD : </span>
                                <span class="value">{{ $camera['monitor_lcd_ukuran'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Resolusi Monitor LCD : </span>
                                <span class="value">{{ $camera['monitor_lcd_resolusi'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Fokus Manual : </span>
                                <span class="value">{{ $camera['fokus_manual'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Mode Pemotretan : </span>
                                <span class="value">{{ $camera['mode_pemotretan'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Ukuran Sensor : </span>
                                <span class="value">{{ $camera['ukuran_sensor'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Rentang Kecepatan Rana :</span>
                                <span class="value">{{ $camera['rentang_kecepatan_rana'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Bobot : </span>
                                <span class="value">{{ $camera['bobot'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Keseimbangan Putih : </span>
                                <span class="value">{{ $camera['white_balance'] }}</span>
                            </div>
                            <br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

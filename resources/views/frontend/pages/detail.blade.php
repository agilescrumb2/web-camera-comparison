@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url(images/img.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Product Details</h2>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Product Details</li>
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
                                            <img src="" alt="Product Image">
                                            <div class="inner-stuff">
                                                <div class="gallery-item"
                                                    data-src="{{ asset('assets2/images/product-details/product-details-1.jpg') }}">
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
                            <span class="sale-price">$240.00</span>
                        </div>
                        <div class="product-meta">
                            <div class="meta-action">
                                <button class="btn btn-dark btn-hover-primary">Add To Cart</button>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                        <div class="product-info">

                            <div class="single-info">
                                <span class="lable">Mode Autofokus : </span>
                                <span class="value"></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Flash Internal : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Kecepatan Pemotretan : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Dimensi : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">ISO Efektif :</span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Kompensasi Pemaparan : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Mode Flash : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Resolusi Gambar : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Stabilizer Gambar : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Ukuran Monitor LCD : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Resolusi Monitor LCD : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Fokus Manual : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Mode Pemotretan : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Ukuran Sensor : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Rentang Kecepatan Rana :</span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Bobot : </span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Keseimbangan Putih : </span>
                                <span class="value">Ch-256xl</span>
                            </div>

                            <br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

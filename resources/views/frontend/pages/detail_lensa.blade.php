@extends('frontend.master')
@section('title')
    Detail Lensa
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/ab.jpg') }})">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Lensa Details</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Lensa Details</li>
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
                                            <img src="{{ asset($lensa['gambar']) }}" alt="Product Image">
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="{{ asset($lensa['gambar']) }}">
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
                        <h4 class="product-name">{{ $lensa['nama_lensa'] }}</h4>
                        <div class="price">
                            <span class="sale-price">Rp {{ $lensa['harga'] }}</span>
                        </div>
                        <div class="product-meta">
                            <div class="meta-action">
                                <a href="{{ route('compareLens.add', $lensa['id']) }}"
                                    class="btn btn-primary btn-hover-dark">Compare Lensa</a>
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Bobot</td>
                                    <td>{{ $lensa['bobot'] }} gram</td>
                                </tr>
                                <tr>
                                    <th>Diameter Panjang</td>
                                    <td>{{ $lensa['diameter_panjang'] }}</td>
                                </tr>
                                <tr>
                                    <th>Aperture Minimum</td>
                                    <td>{{ $lensa['aperture_minimum'] }}</td>
                                </tr>
                                <tr>
                                    <th>Ukuran Filter</td>
                                    <td>{{ $lensa['ukuran_filter'] }}</td>
                                </tr>
                                <tr>
                                    <th>Jarak Pemfokusan Terdekat</td>
                                    <td>{{ $lensa['jarak_pemfokusan_terdekat'] }}</td>
                                </tr>
                                <tr>
                                    <th>Pembesaran Maks</td>
                                    <td>{{ $lensa['pembesaran_maks'] }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Bilah Diafragma</td>
                                    <td>{{ $lensa['jumlah_bilah_diafragma'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

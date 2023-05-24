@extends('frontend.master')
@section('title')
    Detail Lensa
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }})">
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
                                <a class="action" href="{{ route('compareLens.add', $lensa['id']) }}"><i
                                        class="pe-7s-like"></i></a>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="product-info">
                            <div class="single-info">
                                <span class="lable">Bobot : </span>
                                <span class="value">{{ $lensa['bobot'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Diameter Panjang : </span>
                                <span class="value">{{ $lensa['diameter_panjang'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Aperture Minimum : </span>
                                <span class="value">{{ $lensa['aperture_minimum'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Ukuran Filter : </span>
                                <span class="value">{{ $lensa['ukuran_filter'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Jarak Pemfokusan Terdekat :</span>
                                <span class="value">{{ $lensa['jarak_pemfokusan_terdekat'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Pembesaran Maks : </span>
                                <span class="value">{{ $lensa['pembesaran_maks'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Jumlah Bilah Diafragma : </span>
                                <span class="value">{{ $lensa['jumlah_bilah_diafragma'] }}</span>
                            </div>
                            <br><br><br><br><br>
                        </div>
=======
                        <br>
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Label</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="black-font">Bobot</td>
                                    <td>{{ $lensa['bobot'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Diameter Panjang</td>
                                    <td>{{ $lensa['diameter_panjang'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Aperture Minimum</td>
                                    <td>{{ $lensa['aperture_minimum'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Ukuran Filter</td>
                                    <td>{{ $lensa['ukuran_filter'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Jarak Pemfokusan Terdekat</td>
                                    <td>{{ $lensa['jarak_pemfokusan_terdekat'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Pembesaran Maks</td>
                                    <td>{{ $lensa['pembesaran_maks'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Jumlah Bilah Diafragma</td>
                                    <td>{{ $lensa['jumlah_bilah_diafragma'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br>
>>>>>>> 8a16b1dff724951c65cc566d211626c4f6e5e6c5
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                            <span class="sale-price">Rp {{ $camera['harga'] }}</span>
                        </div>
                        <div class="product-meta">
                            <div class="meta-action">
                                {{-- <div class="left-btn">
                                    <a href="shop-grid-left-sidebar.html" class="btn btn-dark btn-hover-primary">Continue
                                        Shopping</a>
                                </div> --}}
                                {{-- <a class="action" href="{{ route('compare.add', $camera['id']) }}"><i
                                        class="pe-7s-like"></i></a> --}}
                                <a href="{{ route('compare.add', $camera['id']) }}"
                                    class="btn btn-primary btn-hover-dark">Compare Body Kamera</a>
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Mode Autofokus</th>
                                    <td>{{ $camera['mode_af'] }}</td>
                                </tr>
                                <tr>
                                    <th>Flash Internal</td>
                                    <td>{{ $camera['built_in_flash'] }}</td>
                                </tr>
                                <tr>
                                    <th>Kecepatan Pemotretan</td>
                                    <td>{{ $camera['kecepatan_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <th>Dimensi</td>
                                    <td>{{ $camera['dimensi'] }}</td>
                                </tr>
                                <tr>
                                    <th>ISO Efektif</td>
                                    <td>{{ $camera['iso_efektif'] }}</td>
                                </tr>
                                <tr>
                                    <th>Kompensasi Pemaparan</td>
                                    <td>{{ $camera['exposure_compensation'] }}</td>
                                </tr>
                                <tr>
                                    <th>Mode Flash</td>
                                    <td>{{ $camera['mode_flash'] }}</td>
                                </tr>
                                <tr>
                                    <th>Resolusi Gambar</td>
                                    <td>{{ $camera['resolusi_gambar'] }}</td>
                                </tr>
                                <tr>
                                    <th>Stabilizer Gambar</td>
                                    <td>{{ $camera['image_stabilizer'] }}</td>
                                </tr>
                                <tr>
                                    <th>Ukuran Monitor LCD</td>
                                    <td>{{ $camera['monitor_lcd_ukuran'] }}</td>
                                </tr>
                                <tr>
                                    <th>Resolusi Monitor LCD</td>
                                    <td>{{ $camera['monitor_lcd_resolusi'] }}</td>
                                </tr>
                                <tr>
                                    <th>Fokus Manual</td>
                                    <td>{{ $camera['fokus_manual'] }}</td>
                                </tr>
                                <tr>
                                    <th>Mode Pemotretan</td>
                                    <td>{{ $camera['mode_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <th>Ukuran Sensor</td>
                                    <td>{{ $camera['ukuran_sensor'] }}</td>
                                </tr>
                                <tr>
                                    <th>Rentang Kecepatan Rana</td>
                                    <td>{{ $camera['rentang_kecepatan_rana'] }}</td>
                                </tr>
                                <tr>
                                    <th>Bobot</td>
                                    <td>{{ $camera['bobot'] }}</td>
                                </tr>
                                <tr>
                                    <th>Keseimbangan Putih</td>
                                    <td>{{ $camera['white_balance'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

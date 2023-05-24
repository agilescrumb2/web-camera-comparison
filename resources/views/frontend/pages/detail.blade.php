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
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-total-price">Fitur</th>
                                        <th class="product-info">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Mode Autofokus
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['mode_af'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Flash Internal
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['built_in_flash'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Kecepatan Pemotretan
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['kecepatan_pemotretan'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Dimensi
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['dimensi'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">ISO Efektif
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['iso_efektif'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Kompensasi Pemaparan
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['exposure_compensation'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Mode Flash
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['mode_flash'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Resolusi Gambar
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['resolusi_gambar'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Stabilizer Gambar
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['image_stabilizer'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Ukuran Monitor LCD
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['monitor_lcd_ukuran'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Resolusi Monitor LCD
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['monitor_lcd_resolusi'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Fokus Manual
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['fokus_manual'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Mode Pemotretan
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['mode_pemotretan'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Ukuran Sensor
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['ukuran_sensor'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Rentang Kecepatan Rana
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['rentang_kecepatan_rana'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Bobot
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['bobot'] }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-info">
                                            <h6 class="value">Keseimbangan Putih
                                            </h6>
                                        </td>
                                        <td class="product-info">
                                            <span class="lable">{{ $camera['white_balance'] }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

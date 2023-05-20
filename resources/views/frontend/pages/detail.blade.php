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
                                <a class="action" href="{{ route('compare.add', $camera['id']) }}"><i
                                        class="pe-7s-like"></i></a>
                            </div>
                        </div>
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
                                    <td class="black-font">Mode Autofokus</td>
                                    <td>{{ $camera['mode_af'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Flash Internal</td>
                                    <td>{{ $camera['built_in_flash'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Kecepatan Pemotretan</td>
                                    <td>{{ $camera['kecepatan_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Dimensi</td>
                                    <td>{{ $camera['dimensi'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">ISO Efektif</td>
                                    <td>{{ $camera['iso_efektif'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Kompensasi Pemaparan</td>
                                    <td>{{ $camera['exposure_compensation'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Mode Flash</td>
                                    <td>{{ $camera['mode_flash'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Resolusi Gambar</td>
                                    <td>{{ $camera['resolusi_gambar'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Stabilizer Gambar</td>
                                    <td>{{ $camera['image_stabilizer'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Ukuran Monitor LCD</td>
                                    <td>{{ $camera['monitor_lcd_ukuran'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Resolusi Monitor LCD</td>
                                    <td>{{ $camera['monitor_lcd_resolusi'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Fokus Manual</td>
                                    <td>{{ $camera['fokus_manual'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Mode Pemotretan</td>
                                    <td>{{ $camera['mode_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Ukuran Sensor</td>
                                    <td>{{ $camera['ukuran_sensor'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Rentang Kecepatan Rana</td>
                                    <td>{{ $camera['rentang_kecepatan_rana'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Bobot</td>
                                    <td>{{ $camera['bobot'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Keseimbangan Putih</td>
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

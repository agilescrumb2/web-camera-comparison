@extends('frontend.master')
@section('title')
    Detail Fullkit
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }})">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Fullkit Details</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Fullkit Details</li>
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
                                            <img src="{{ asset($fullkit['gambar']) }}" alt="Product Image">
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="{{ asset($fullkit['gambar']) }}">
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
                        <h4 class="product-name">{{ $fullkit['nama_fulkit'] }}</h4>
                        <div class="price">
                            <span class="sale-price">Rp {{ $fullkit['harga'] }}</span>
                        </div>
                        <div class="product-meta">
                            <div class="meta-action">
                                <a href="{{ route('compareFullkit.add', $fullkit['id']) }}"
                                    class="btn btn-primary btn-hover-dark">Compare Fullkit</a>
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Mode Autofokus</td>
                                    <td>{{ $fullkit['mode_af'] }}</td>
                                </tr>
                                <tr>
                                    <th>Flash Internal</td>
                                    <td>{{ $fullkit['built_in_flash'] }}</td>
                                </tr>
                                <tr>
                                    <th>Jarak Fokus Terdekat</td>
                                    <td>{{ $fullkit['jarak_fokus_terdekat'] }}</td>
                                </tr>
                                <tr>
                                    <th>Kecepatan Pemotretan</td>
                                    <td>{{ $fullkit['kecepatan_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <th>Zoom Digital</td>
                                    <td>{{ $fullkit['zoom_digital'] }}</td>
                                </tr>
                                <tr>
                                    <th>Dimensi</td>
                                    <td>{{ $fullkit['dimensi'] }}</td>
                                </tr>
                                <tr>
                                    <th>ISO Efektif</td>
                                    <td>{{ $fullkit['iso_efektif'] }}</td>
                                </tr>
                                <tr>
                                    <th>Mode Flash</td>
                                    <td>{{ $fullkit['mode_flash'] }}</td>
                                </tr>
                                <tr>
                                    <th>Panjang Fokus</td>
                                    <td>{{ $fullkit['panjang_fokus'] }}</td>
                                </tr>
                                <tr>
                                    <th>Resolusi Gambar</td>
                                    <td>{{ $fullkit['resolusi_gambar'] }}</td>
                                </tr>
                                <tr>
                                    <th>Image Stabilizer</td>
                                    <td>{{ $fullkit['image_stabilizer'] }}</td>
                                </tr>
                                <tr>
                                    <th>Monitor LCD Ukuran</td>
                                    <td>{{ $fullkit['monitor_lcd_ukuran'] }}</td>
                                </tr>
                                <tr>
                                    <th>Monitor LCD Resolusi</td>
                                    <td>{{ $fullkit['monitor_lcd_resolusi'] }}</td>
                                </tr>
                                <tr>
                                    <th>Fokus Manual</td>
                                    <td>{{ $fullkit['fokus_manual'] }}</td>
                                </tr>
                                <tr>
                                    <th>Ukuran Sensor</td>
                                    <td>{{ $fullkit['ukuran_sensor'] }}</td>
                                </tr>
                                <tr>
                                    <th>Mode Pemotretan</td>
                                    <td>{{ $fullkit['mode_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <th>Rentang Kecepatan Rana</td>
                                    <td>{{ $fullkit['rentang_kecepatan_rana'] }}</td>
                                </tr>
                                <tr>
                                    <th>Bobot</td>
                                    <td>{{ $fullkit['bobot'] }} gram</td>
                                </tr>
                                <tr>
                                    <th>White Balance</td>
                                    <td>{{ $fullkit['white_balance'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

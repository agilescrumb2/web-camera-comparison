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
                                <a class="action" href="{{ route('compareFullkit.add', $fullkit['id']) }}"><i
                                        class="pe-7s-like"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="single-info">
                                <span class="lable">Mode Autofokus : </span>
                                <span class="value">{{ $fullkit['mode_af'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Flash Internal : </span>
                                <span class="value">{{ $fullkit['built_in_flash'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Jarak Fokus Terdekat : </span>
                                <span class="value">{{ $fullkit['jarak_fokus_terdekat'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Kecepatan Pemotretan : </span>
                                <span class="value">{{ $fullkit['kecepatan_pemotretan'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Zoom Digital :</span>
                                <span class="value">{{ $fullkit['zoom_digital'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Dimensi : </span>
                                <span class="value">{{ $fullkit['dimensi'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">ISO Efektif : </span>
                                <span class="value">{{ $fullkit['iso_efektif'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Mode Flash : </span>
                                <span class="value">{{ $fullkit['mode_flash'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Panjang Fokus : </span>
                                <span class="value">{{ $fullkit['panjang_fokus'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Resolusi Gambar : </span>
                                <span class="value">{{ $fullkit['resolusi_gambar'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Image Stabilizer : </span>
                                <span class="value">{{ $fullkit['image_stabilizer'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Monitor LCD Ukuran : </span>
                                <span class="value">{{ $fullkit['monitor_lcd_ukuran'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Monitor LCD Resolusi : </span>
                                <span class="value">{{ $fullkit['monitor_lcd_resolusi'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Fokus Manual : </span>
                                <span class="value">{{ $fullkit['fokus_manual'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Ukuran Sensor :</span>
                                <span class="value">{{ $fullkit['ukuran_sensor'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Mode Pemotretan : </span>
                                <span class="value">{{ $fullkit['mode_pemotretan'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Rentang Kecepatan Rana : </span>
                                <span class="value">{{ $fullkit['rentang_kecepatan_rana'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Bobot : </span>
                                <span class="value">{{ $fullkit['bobot'] }}</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">White Balance : </span>
                                <span class="value">{{ $fullkit['white_balance'] }}</span>
                            </div>
                            <br><br><br><br><br>
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
                                    <td>{{ $fullkit['mode_af'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Flash Internal</td>
                                    <td>{{ $fullkit['built_in_flash'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Jarak Fokus Terdekat</td>
                                    <td>{{ $fullkit['jarak_fokus_terdekat'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Kecepatan Pemotretan</td>
                                    <td>{{ $fullkit['kecepatan_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Zoom Digital</td>
                                    <td>{{ $fullkit['zoom_digital'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Dimensi</td>
                                    <td>{{ $fullkit['dimensi'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">ISO Efektif</td>
                                    <td>{{ $fullkit['iso_efektif'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Mode Flash</td>
                                    <td>{{ $fullkit['mode_flash'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Panjang Fokus</td>
                                    <td>{{ $fullkit['panjang_fokus'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Resolusi Gambar</td>
                                    <td>{{ $fullkit['resolusi_gambar'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Image Stabilizer</td>
                                    <td>{{ $fullkit['image_stabilizer'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Monitor LCD Ukuran</td>
                                    <td>{{ $fullkit['monitor_lcd_ukuran'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Monitor LCD Resolusi</td>
                                    <td>{{ $fullkit['monitor_lcd_resolusi'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Fokus Manual</td>
                                    <td>{{ $fullkit['fokus_manual'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Ukuran Sensor</td>
                                    <td>{{ $fullkit['ukuran_sensor'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Mode Pemotretan</td>
                                    <td>{{ $fullkit['mode_pemotretan'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Rentang Kecepatan Rana</td>
                                    <td>{{ $fullkit['rentang_kecepatan_rana'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">Bobot</td>
                                    <td>{{ $fullkit['bobot'] }}</td>
                                </tr>
                                <tr>
                                    <td class="black-font">White Balance</td>
                                    <td>{{ $fullkit['white_balance'] }}</td>
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

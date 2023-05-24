@extends('frontend.master')
@section('title')
    Compare Fullkit
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Compare Fullkit</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Compare Fullkit</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n4">
        <div class="container">
            <div class="cart-wrapper">
                <div class="compare-wrapper table-responsive">
                    <table class="table table-striped ">
                        <tbody>
                            <tr>
                                <th>
                                    <a href="/fullkit" class="btn btn-primary btn-hover-dark">+ List Fullkit</a>
                                </th>
                                @php
                                    $fullkits = session('compareFullkit', []);
                                @endphp
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>
                                        <div class="compare-product ">
                                            <div class="pack-product-container">
                                                <div class="thumb-mask">
                                                    <a href="product-details.html">
                                                        <img src=" {{ $fullkit['gambar'] }}" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="desc-box">
                                                    <a class="product-name" href="product-details.html">
                                                        {{ $fullkit['nama_fulkit'] }}
                                                    </a>
                                                    <div class="product-prices">
                                                        <span class="sale-price">
                                                            Rp
                                                            {{ $fullkit['harga'] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('compareFullkit.remove', $id) }}"
                                                class="compare-remove">Remove</a>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Autofokus : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['mode_af'] }}</td>
                                @endforeach

                            </tr>
                            <tr>
                                <th>Flash Internal : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['built_in_flash'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Jarak Fokus Terdekat : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td> {{ $fullkit['jarak_fokus_terdekat'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Kecepatan Pemotretan : : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['kecepatan_pemotretan'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Zoom Digital :</th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['zoom_digital'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Dimensi : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['dimensi'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>ISO Efektif : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['iso_efektif'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Flash : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['mode_flash'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Panjang Fokus : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['panjang_fokus'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Resolusi Gambar : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['resolusi_gambar'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Image Stabilizer : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['image_stabilizer'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Monitor LCD Ukuran : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['monitor_lcd_ukuran'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Monitor LCD Resolusi : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['monitor_lcd_resolusi'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Fokus Manual :</th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['fokus_manual'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Sensor :</th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['ukuran_sensor'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Pemotretan : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['mode_pemotretan'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Rentang Kecepatan Rana : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['rentang_kecepatan_rana'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Bobot : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['bobot'] }} gram
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>White Balance : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ $fullkit['white_balance'] }}
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

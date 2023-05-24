@extends('frontend.master')
@section('title')
    Compare Lensa
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Compare Lensa</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Compare Lensa</li>
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
                                    <a href="/lensa" class="btn btn-primary btn-hover-dark">+ List Lensa</a>
                                </th>
                                @php
                                    $lensas = session('compareLens', []);
                                @endphp
                                @foreach ($lensas as $id => $lensa)
                                    <td>
                                        <div class="compare-product ">
                                            <div class="pack-product-container">
                                                <div class="thumb-mask">
                                                    <a href="product-details.html">
                                                        <img src=" {{ $lensa['gambar'] }}" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="desc-box">
                                                    <a class="product-name" href="product-details.html">
                                                        {{ $lensa['nama_lensa'] }}
                                                    </a>
                                                    <div class="product-prices">
                                                        <span class="sale-price">
                                                            Rp
                                                            {{ $lensa['harga'] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('compareLens.remove', $id) }}"
                                                class="compare-remove">Remove</a>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Bobot : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ $lensa['bobot'] }} gram</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Diameter Panjang : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ $lensa['diameter_panjang'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Aperture Minimum :</th>
                                @foreach ($lensas as $id => $lensa)
                                    <td> {{ $lensa['aperture_minimum'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Filter : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ $lensa['ukuran_filter'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Jarak Pemfokusan Terdekat :</th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ $lensa['jarak_pemfokusan_terdekat'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Pembesaran Maks :</th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ $lensa['pembesaran_maks'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Jumlah Bilah Diafragma : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ $lensa['jumlah_bilah_diafragma'] }}
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

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
                                    <a href="/lensa">Tambah data</a>
                                </th>
                                @php
                                    $lensas = session('compareLens', []);
                                @endphp
                                <!-- {{-- @if (!empty($cameras)) --}} -->
                                @foreach ($lensas as $id => $lensa)
                                    <td>
                                        <div class="compare-product ">
                                            <div class="pack-product-container">
                                                <div class="thumb-mask">

                                                    <a href="product-details.html">
                                                        <img src="{{ asset('images/' . $id . '.jpg') }}" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="desc-box">
                                                    <a class="product-name" href="product-details.html">
                                                        {{ isset($lensa[$id]['nama_lensa']) ? $lensa[$id]['nama_lensa'] : '' }}
                                                    </a>
                                                    <div class="product-prices">
                                                        <span class="sale-price">
                                                            {{ isset($lensa[$id]['harga']) ? $lensa[$id]['harga'] : '' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('compareLens.remove', $id) }}"
                                                class="compare-remove">Remove</a>
                                        </div>
                                    </td>
                                @endforeach
                                <!-- {{-- @endif --}} -->
                            </tr>
                            <tr>
                                <th>Bobot : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ isset($lensa[$id]['bobot']) ? $lensa[$id]['bobot'] : '' }}</td>
                                @endforeach

                            </tr>
                            <tr>
                                <th>Diameter Panjang : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ isset($lensa[$id]['diameter_panjang']) ? $lensa[$id]['diameter_panjang'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Aperture Minimum :</th>
                                @foreach ($lensas as $id => $lensa)
                                    <td> {{ isset($lensa[$id]['aperture_minimum']) ? $lensa[$id]['aperture_minimum'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Filter : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ isset($lensa[$id]['ukuran_filter']) ? $lensa[$id]['ukuran_filter'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Jarak Pemfokusan Terdekat :</th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ isset($lensa[$id]['jarak_pemfokusan_terdekatpembesaran_maks']) ? $lensa[$id]['jarak_pemfokusan_terdekatpembesaran_maks'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Pembesaran Maks :</th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ isset($lensa[$id]['pembesaran_maks']) ? $lensa[$id]['pembesaran_maks'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Jumlah Bilah Diafragma : </th>
                                @foreach ($lensas as $id => $lensa)
                                    <td>{{ isset($lensa[$id]['jumlah_bilah_diafragma']) ? $lensa[$id]['jumlah_bilah_diafragma'] : '' }}
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

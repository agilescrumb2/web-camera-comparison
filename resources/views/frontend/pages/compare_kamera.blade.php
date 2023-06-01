@extends('frontend.master')
@section('title')
    Compare Kamera
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/ab.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Compare Kamera</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Compare Kamera</li>
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
                                    <a href="/kamera" class="btn btn-primary btn-hover-dark">+ List Body Kamera</a>
                                    {{-- <a href="/kamera">Tambah data</a> --}}
                                </th>
                                @php
                                    $cameras = session('compare', []);
                                @endphp
                                @if (!empty($cameras))
                                    {{-- @php $index = 0; @endphp --}}
                                    @foreach ($cameras as $id => $camera)
                                        <td>
                                            <div class="compare-product ">
                                                <div class="pack-product-container">
                                                    <div class="thumb-mask">
                                                        <a href="product-details.html">
                                                            <img src=" {{ $camera['gambar'] }}" alt="Product">
                                                        </a>
                                                    </div>
                                                    <div class="desc-box">
                                                        <a class="product-name" href="product-details.html">
                                                            {{ $camera['nama_kamera'] }}
                                                        </a>
                                                        <div class="product-prices">
                                                            <span class="sale-price">
                                                                Rp {{ $camera['harga'] }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('compare.remove', $id) }}"
                                                    class="compare-remove">Remove</a>
                                            </div>
                                        </td>
                                        {{-- @php $index++; @endphp --}}
                                    @endforeach
                                @endif
                            </tr>
                            <tr>
                                <th>Mode Autofokus : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['mode_af'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Flash Internal : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['built_in_flash'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Kecepatan Pemotretan :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td> {{ $camera['kecepatan_pemotretan'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Dimensi : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['dimensi'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>ISO Efektif :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['iso_efektif'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Kompensasi Pemaparan : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['exposure_compensation'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Flash :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['mode_flash'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Resolusi Gambar : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['resolusi_gambar'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Stabilizer Gambar : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['image_stabilizer'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Monitor LCD : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['monitor_lcd_ukuran'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Resolusi Monitor LCD :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['monitor_lcd_resolusi'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Fokus Manual :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['fokus_manual'] }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Pemotretan : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['mode_pemotretan'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Sensor :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['ukuran_sensor'] }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Rentang Kecepatan Rana :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['rentang_kecepatan_rana'] }}
                                        </< /td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Bobot : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['bobot'] }} gram</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Keseimbangan Putih : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ $camera['white_balance'] }}
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

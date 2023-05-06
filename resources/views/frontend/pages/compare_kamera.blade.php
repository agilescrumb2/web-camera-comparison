@extends('frontend.master')
@section('title')
    Compare Kamera
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }});">
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
                                    <a href="/kamera">Tambah data</a>
                                </th>
                                @php
                                    $cameras = session('compare', []);
                                @endphp
                                {{-- @if (!empty($cameras)) --}}
                                @foreach ($cameras as $id => $camera)
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
                                                        {{ isset($camera[$id]['nama_kamera']) ? $camera[$id]['nama_kamera'] : '' }}
                                                    </a>
                                                    <div class="product-prices">
                                                        <span class="sale-price">
                                                            {{ isset($camera[$id]['harga']) ? $camera[$id]['harga'] : '' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('compare.remove', $id) }}" class="compare-remove">Remove</a>
                                        </div>
                                    </td>
                                @endforeach
                                {{-- @endif --}}
                            </tr>
                            <tr>
                                <th>Mode Autofokus : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['mode_af']) ? $camera[$id]['mode_af'] : '' }}</td>
                                @endforeach

                            </tr>
                            <tr>
                                <th>Flash Internal : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['built_in_flash']) ? $camera[$id]['built_in_flash'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Kecepatan Pemotretan :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td> {{ isset($camera[$id]['kecepatan_pemotretan']) ? $camera[$id]['kecepatan_pemotretan'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Dimensi : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['dimensi']) ? $camera[$id]['dimensi'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>ISO Efektif :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['iso_efektif']) ? $camera[$id]['iso_efektif'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Kompensasi Pemaparan : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['exposure_compensation']) ? $camera[$id]['exposure_compensation'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Flash :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['mode_flash']) ? $camera[$id]['mode_flash'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Resolusi Gambar : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['resolusi_gambar']) ? $camera[$id]['resolusi_gambar'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Stabilizer Gambar : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['image_stabilizer']) ? $camera[$id]['image_stabilizer'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Monitor LCD : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['monitor_lcd_ukuran']) ? $camera[$id]['monitor_lcd_ukuran'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Resolusi Monitor LCD :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['monitor_lcd_resolusi']) ? $camera[$id]['monitor_lcd_resolusi'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Fokus Manual :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['fokus_manual']) ? $camera[$id]['fokus_manual'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Pemotretan : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['mode_pemotretan']) ? $camera[$id]['mode_pemotretan'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Sensor :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['ukuran_sensor']) ? $camera[$id]['ukuran_sensor'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Rentang Kecepatan Rana :</th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['rentang_kecepatan_rana']) ? $camera[$id]['rentang_kecepatan_rana'] : '' }}
                                        </< /td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Bobot : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['bobot']) ? $camera[$id]['bobot'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Keseimbangan Putih : </th>
                                @foreach ($cameras as $id => $camera)
                                    <td>{{ isset($camera[$id]['white_balance']) ? $camera[$id]['white_balance'] : '' }}
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

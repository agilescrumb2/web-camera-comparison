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
                                    <a href="/fullkit">Tambah data</a>
                                </th>
                                @php
                                    $fullkits = session('compareFullkit', []);
                                @endphp
                                {{-- @if (!empty($cameras)) --}}
                                @foreach ($fullkits as $id => $fullkit)
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
                                                        {{ isset($fullkit[$id]['nama_fullkit']) ? $fullkit[$id]['nama_fulkit'] : '' }}
                                                    </a>
                                                    <div class="product-prices">
                                                        <span class="sale-price">
                                                            IDR
                                                            {{ isset($fullkit[$id]['harga']) ? $fullkit[$id]['harga'] : '' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('compareFullkit.remove', $id) }}"
                                                class="compare-remove">Remove</a>
                                        </div>
                                    </td>
                                @endforeach
                                {{-- @endif --}}
                            </tr>
                            <tr>
                                <th>Mode Autofokus : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['mode_af']) ? $fullkit[$id]['mode_af'] : '' }}</td>
                                @endforeach

                            </tr>
                            <tr>
                                <th>Flash Internal : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['built_in_flash']) ? $fullkit[$id]['built_in_flash'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Jarak Fokus Terdekat : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td> {{ isset($fullkit[$id]['jarak_fokus_terdekat']) ? $fullkit[$id]['jarak_fokus_terdekat'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Kecepatan Pemotretan : : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['kecepatan_pemotretan']) ? $fullkit[$id]['kecepatan_pemotretan'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Zoom Digital :</th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['zoom_digital']) ? $fullkit[$id]['zoom_digital'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Dimensi : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['dimensi']) ? $fullkit[$id]['dimensi'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>ISO Efektif : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['iso_efektif']) ? $fullkit[$id]['iso_efektif'] : '' }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Flash : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['mode_flash']) ? $fullkit[$id]['mode_flash'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Panjang Fokus : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['panjang_fokus']) ? $fullkit[$id]['panjang_fokus'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Resolusi Gambar : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['resolusi_gambar']) ? $fullkit[$id]['resolusi_gambar'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Image Stabilizer : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['image_stabilizer']) ? $fullkit[$id]['image_stabilizer'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Monitor LCD Ukuran : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['monitor_lcd_ukuran']) ? $fullkit[$id]['monitor_lcd_ukuran'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Monitor LCD Resolusi : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['monitor_lcd_resolusi']) ? $fullkit[$id]['monitor_lcd_resolusi'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Fokus Manual :</th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['fokus_manual']) ? $fullkit[$id]['fokus_manual'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Ukuran Sensor :</th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['ukuran_sensor']) ? $fullkit[$id]['ukuran_sensor'] : '' }}
                                        </< /td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Mode Pemotretan : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['mode_pemotretan']) ? $fullkit[$id]['mode_pemotretan'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Rentang Kecepatan Rana : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['rentang_kecepatan_rana']) ? $fullkit[$id]['rentang_kecepatan_rana'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Bobot : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['bobot']) ? $fullkit[$id]['bobot'] : '' }}
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>White Balance : </th>
                                @foreach ($fullkits as $id => $fullkit)
                                    <td>{{ isset($fullkit[$id]['white_balance']) ? $fullkit[$id]['white_balance'] : '' }}
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

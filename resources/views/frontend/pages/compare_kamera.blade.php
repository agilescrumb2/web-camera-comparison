@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url(images/img.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Compare</h2>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Compare</li>
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
                                @if (!empty($cameras))
                                    @foreach ($cameras as $id => $camera)
                                        <td>
                                            <div class="compare-product ">
                                                <div class="pack-product-container">
                                                    <div class="thumb-mask">
                                                        <a href="{{ route('cameras.show', $id) }}">
                                                            <img src="{{ asset($camera['gambar']) }}" alt="Product">
                                                        </a>
                                                    </div>
                                                    <div class="desc-box">
                                                        <a class="product-name"
                                                            href="product-details.html">{{ $camera['nama_kamera'] }}/a>
                                                            <div class="product-prices">
                                                                <span class="sale-price">$28.72</span>
                                                            </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="compare-remove">Remove</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="compare-product ">
                                                <div class="pack-product-container">
                                                    <div class="thumb-mask">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('images/kamera13.jpg') }}" alt="Product">
                                                        </a>
                                                    </div>
                                                    <div class="desc-box">
                                                        <a class="product-name" href="product-details.html">Wood Dining
                                                            Table</a>

                                                        <div class="product-prices">
                                                            <span class="sale-price">$19.72</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <a href="#" class="compare-remove">Remove</a>
                                            </div>
                                        </td>
                                    @endforeach
                                @endif
                            </tr>
                            <tr>
                                <th>Compositions</th>
                                <td>Wool</td>
                                <td>Elastane</td>

                            </tr>
                            <tr>
                                <th>Paper Type </th>
                                <td>Doted</td>
                                <td>Ruled</td>

                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>Black</td>
                                <td>White</td>

                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>M</td>
                                <td>XL</td>

                            </tr>
                            <tr>
                                <th>Frame Size </th>
                                <td>80x120cm</td>
                                <td>40x60cm</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

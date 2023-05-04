@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url(images/img.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Daftar Lensa</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Daftar Lensa</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n10">
        <div class="container">
            <div class="shop-top-bar">
                <div class="shop-text">
                    <p><span>12</span> Product Found of <span>30</span></p>
                </div>
                <div class="shop-tabs">
                    <ul class="nav">
                        <li><button data-bs-toggle="tab" data-bs-target="#grid"><i class="fa fa-th"></i></button></li>
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#list"><i
                                    class="fa fa-list"></i></button></li>
                    </ul>
                </div>
                <div class="shop-sort">
                    <span class="title">Sort By :</span>
                    <select class="nice_select">
                        <option value="1">Default</option>
                        <option value="2">Default</option>
                        <option value="3">Default</option>
                        <option value="4">Default</option>
                    </select>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="grid">
                    <div class="shop-product-wrapper">
                        <div class="row">
                            @foreach ($lensas['data'] as $lensa)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-product">
                                        <a href="/detail"><img src="{{ asset($lensa['gambar']) }}" alt="product"></a>
                                        <div class="product-content">
                                            <h4 class="title"><a href="/detail">{{ $lensa['nama_lensa'] }}</a></h4>
                                            <div class="price">
                                                <span class="sale-price">{{ $lensa['harga'] }}</span>
                                            </div>
                                        </div>
                                        <ul class="product-meta">
                                            <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView"
                                                    href="/detail"><i class="pe-7s-search"></i></a></li>
                                            <li><a class="action" href="/detail"><i class="pe-7s-shopbag"></i></a></li>
                                            <li><a class="action" href="/detail"><i class="pe-7s-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="list">
                    <div class="shop-product-wrapper">
                        @foreach ($lensas['data'] as $lensa)
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="/detail"><img src="{{ asset($lensa['gambar']) }}" alt="product"></a>

                                    <ul class="product-meta">
                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView"
                                                href="/detail"><i class="pe-7s-search"></i></a></li>
                                        <li><a class="action" href="/detail"><i class="pe-7s-shopbag"></i></a></li>
                                        <li><a class="action" href="/detail"><i class="pe-7s-like"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title"><a href="/detail">{{ $lensa['nama_lensa'] }}</a></h4>
                                    <div class="price">
                                        <span class="sale-price">IDR {{ $lensa['harga'] }}</span>
                                    </div>
                                    {{-- <p>{{ $lensa['mode_af'] }} <br>{{ $lensa['built_in_flash'] }} <br>
                                        {{ $lensa['kecepatan_pemotretan'] }} <br> {{ $lensa['dimensi'] }} </p> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="page-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link active" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

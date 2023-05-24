@extends('frontend.master')
@section('title')
    Kamera
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Daftar Kamera</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Daftar Kamera</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n10">
        <div class="container">
            <div class="shop-top-bar">
                <div class="shop-text">
                    <p><span></span> Daftar Body Kamera </span></p>
                </div>
                <div class="shop-tabs">
                    <ul class="nav">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i
                                    class="fa fa-th"></i></button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#list"><i class="fa fa-list"></i></button></li>
                    </ul>
                </div>
                {{-- <div class="shop-sort">
                    <span class="title">Sort By:</span>
                    <select class="nice_select" onchange="sortCameras(this.value)">
                        <option value="default" {{ $sort === 'default' ? 'selected' : '' }}>Default</option>
                        <option value="price_low_to_high" {{ $sort === 'price_low_to_high' ? 'selected' : '' }}>Price: Low
                            to High</option>
                        <option value="price_high_to_low" {{ $sort === 'price_high_to_low' ? 'selected' : '' }}>Price: High
                            to Low</option>
                    </select>
                </div> --}}


                <!-- Sidebar Widget Start -->
                <div class="sidebar-widget">
                    <div class="widget-search">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="query" value="{{ $request->input('query') }}"
                                placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Sidebar Widget End -->
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="grid">
                    <div class="shop-product-wrapper">
                        <div class="row">
                            @foreach ($cameras as $camera)
                                @if (isset($camera['id']))
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-product">
                                            <a href="{{ route('cameras.show', $camera['id']) }}"><img
                                                    src="{{ asset($camera['gambar']) }}" alt="product"></a>
                                            <div class="product-content">
                                                <h4 class="title"><a
                                                        href="{{ route('cameras.show', $camera['id']) }}">{{ $camera['nama_kamera'] }}</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">Rp {{ $camera['harga'] }}</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li><a class="action" href="{{ route('compare.add', $camera['id']) }}"><i
                                                            class="pe-7s-like"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="list">
                    <div class="shop-product-wrapper">
                        @foreach ($cameras as $camera)
                            @if (isset($camera['id']))
                                <div class="single-product-02 product-list">
                                    <div class="product-images">
                                        <a href="{{ route('cameras.show', $camera['id']) }}"><img
                                                src="{{ asset($camera['gambar']) }}" alt="product"></a>
                                        <ul class="product-meta">
                                            <li><a class="action" href="{{ route('compare.add', $camera['id']) }}"><i
                                                        class="pe-7s-like"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h4 class="title"><a
                                                href="{{ route('cameras.show', $camera['id']) }}">{{ $camera['nama_kamera'] }}</a>
                                        </h4>
                                        <div class="price">
                                            <span class="sale-price">Rp {{ $camera['harga'] }}</span>
                                        </div>
                                        <p>Mode Autofokus : {{ $camera['mode_af'] }} </p>
                                        <p>Flash Internal : {{ $camera['built_in_flash'] }} </p>
                                        <p>Kecepatan Pemotretan : {{ $camera['kecepatan_pemotretan'] }} </p>
                                        <p>Dimensi : {{ $camera['dimensi'] }} </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- Page pagination Start -->
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Page pagination End -->
            </div>
        </div>
    </div>
@endsection

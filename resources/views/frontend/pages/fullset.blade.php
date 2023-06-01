@extends('frontend.master')
@section('title')
    Fullkit
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url({{ asset('images/img.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Daftar Fullkit</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Daftar Fullkit</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n10">
        <div class="container">
            <div class="shop-top-bar">
                <div class="shop-text">
                    <p><span></span> Daftar Fullkit</span></p>
                    <br>
                    <div>
                        <form>
                            <label for="price_filter">Filter Harga:</label>
                            <select name="price_filter" id="price_filter" onchange="redirectToSearch()">
                            <option value="">Default</option>
                            <option value="20">Dibawah 20 Juta</option>
                            <option value="50">Dibawah 50 Juta</option>
                            <option value="150">Dibawah 150 Juta</option>   
                            </select>
                        </form>
                    </div>
                </div>
                <div class="shop-tabs">
                    <ul class="nav">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i
                                    class="fa fa-th"></i></button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#list"><i class="fa fa-list"></i></button></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <div class="widget-search">
                        <form action="{{ route('searchFullkit') }}" method="GET">
                            <input type="text" name="query" value="{{ $request->input('query') }}"
                                placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="grid">
                    <div class="shop-product-wrapper">
                        <div class="row">
                            @foreach ($fullkits as $fullkit)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-product">
                                        <a href="{{ route('fullkits.show', $fullkit['id']) }}"><img
                                                src="{{ asset($fullkit['gambar']) }}" alt="product"></a>
                                        <div class="product-content">
                                            <h4 class="title"><a
                                                    href="{{ route('fullkits.show', $fullkit['id']) }}">{{ $fullkit['nama_fulkit'] }}</a>
                                            </h4>
                                            <div class="price">
                                                <span class="sale-price">Rp {{ $fullkit['harga'] }}</span>
                                            </div>
                                        </div>
                                        <ul class="product-meta">

                                            <li><a class="action"
                                                    href="{{ route('compareFullkit.add', $fullkit['id']) }}"><i
                                                        class="pe-7s-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="list">
                    <div class="shop-product-wrapper">
                        @foreach ($fullkits as $fullkit)
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="{{ route('fullkits.show', $fullkit['id']) }}"><img
                                            src="{{ asset($fullkit['gambar']) }}" alt="product"></a>
                                    <ul class="product-meta">
                                        <li><a class="action" href="{{ route('compareFullkit.add', $fullkit['id']) }}"><i
                                                    class="pe-7s-like"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title"><a
                                            href="{{ route('fullkits.show', $fullkit['id']) }}">{{ $fullkit['nama_fulkit'] }}</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">Rp {{ $fullkit['harga'] }}</span>
                                    </div>
                                    <p>Mode Autofokus : {{ $fullkit['mode_af'] }} </p>
                                    <p>Flash Internal : {{ $fullkit['built_in_flash'] }} </p>
                                    <p>Jarak Fokus Terdekat : {{ $fullkit['jarak_fokus_terdekat'] }} </p>
                                    <p>Kecepatan Pemotretan : {{ $fullkit['kecepatan_pemotretan'] }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var priceFilterSelect = document.getElementById("price_filter");
        var currentUrl = new URL(window.location.href);
        var selectedPriceFilter = currentUrl.searchParams.get("price_filter");
        if (selectedPriceFilter !== null) {
            priceFilterSelect.value = selectedPriceFilter;
        }
        function redirectToSearch() {
          var query = "{{ $request->input('query') }}";
          var priceFilter = document.getElementById("price_filter").value;
          var url = "{{ route('searchFullkit') }}?query=" + query + "&price_filter=" + priceFilter;
          window.location.href = url;
        }
      </script>
@endsection

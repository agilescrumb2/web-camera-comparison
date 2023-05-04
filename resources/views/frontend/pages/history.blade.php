@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url(images/img.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Blog</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding mt-n10">
        <div class="container">
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="gallery-active">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera15.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera13.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera15.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                    <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="pe-7s-user"></i> <span> BY:<a href="#">ADMIN</a></span> </li>
                                    <li><i class="pe-7s-date"></i> <span>27 FEB 2021</span></li>
                                </ul>
                                <h4 class="title"><a href="blog-details-left-sidebar.html">Decorate your home with the most
                                        modern furnishings.</a></h4>
                                <a href="blog-details-left-sidebar.html" class="btn btn-dark btn-hover-primary">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="gallery-active">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera16.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera13.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera15.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                    <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="pe-7s-user"></i> <span> BY:<a href="#">ADMIN</a></span> </li>
                                    <li><i class="pe-7s-date"></i> <span>27 FEB 2021</span></li>
                                </ul>
                                <h4 class="title"><a href="blog-details-left-sidebar.html">Decorate your home with the most
                                        modern furnishings.</a></h4>
                                <a href="blog-details-left-sidebar.html" class="btn btn-dark btn-hover-primary">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="gallery-active">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera12.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera13.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-image swiper-slide">
                                            <a href="blog-details-left-sidebar.html">
                                                <img src="{{ asset('images/kamera15.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                    <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="pe-7s-user"></i> <span> BY:<a href="#">ADMIN</a></span> </li>
                                    <li><i class="pe-7s-date"></i> <span>27 FEB 2021</span></li>
                                </ul>
                                <h4 class="title"><a href="blog-details-left-sidebar.html">Decorate your home with the most
                                        modern furnishings.</a></h4>
                                <a href="blog-details-left-sidebar.html" class="btn btn-dark btn-hover-primary">Read
                                    More</a>
                            </div>
                        </div>
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

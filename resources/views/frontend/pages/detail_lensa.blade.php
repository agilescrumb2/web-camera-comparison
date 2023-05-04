@extends('frontend.master')
@section('title')
    Cameris
@endsection
@section('content')
    <div class="section page-banner-section" style="background-image: url(images/img.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Product Details</h2>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Product Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-images">
                        <div class="details-gallery-images">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-img zoom">
                                            <img src="{{ asset('images/kamera12.jpg') }}" alt="Product Image">
                                            <div class="inner-stuff">
                                                <div class="gallery-item"
                                                    data-src="assets/images/product-details/product-details-1.jpg">
                                                    <a href="javascript:void(0)">
                                                        <i class="lastudioicon-full-screen"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-description">
                        <h4 class="product-name">High quality vase bottle.</h4>
                        <div class="price">
                            <span class="sale-price">$240.00</span>
                            <span class="old-price">$290.00</span>
                        </div>
                        <div class="review-wrapper">
                            <div class="review-star">
                                <div class="star" style="width: 80%;"></div>
                            </div>
                            <p>( 1 Customer Review )</p>
                        </div>
                        <div class="product-color">
                            <span class="lable">Color:</span>
                            <ul>
                                <li>
                                    <input type="radio" name="colors" id="color1">
                                    <label for="color1"><span class="color-blue"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color2">
                                    <label for="color2"><span class="color-gray"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color3">
                                    <label for="color3"><span class="color-dark-blue"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color4">
                                    <label for="color4"><span class="color-gray-dark"></span></label>
                                </li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod temporf incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis tyu nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate.</p>
                        <div class="product-meta">
                            <div class="product-quantity d-inline-flex">
                                <button type="button" class="sub">-</i></button>
                                <input type="text" value="1" />
                                <button type="button" class="add">+</button>
                            </div>
                            <div class="meta-action">
                                <button class="btn btn-dark btn-hover-primary">Add To Cart</button>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="single-info">
                                <span class="lable">SKU:</span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Categories:</span>
                                <span class="value"><a href="#">Office,</a> <a href="#">Home</a></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">tag:</span>
                                <span class="value"><a href="#">Furniture</a></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Share:</span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> <br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

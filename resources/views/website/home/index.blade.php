@extends('website.master')

@section('title', 'Home')

@section('body')

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-2.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-1.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-3.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-4.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-5.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-6.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('/')}}website/assets/imgs/shop/product-16-7.jpg" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                    <div><img src="{{asset('/')}}website/assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>

                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main">
        <section class="home-slider position-relative pt-25 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <div class="hero-slider-1 style-3 dot-style-1 dot-style-1-position-1">
                                <div class="single-hero-slider single-animation-wrap">
                                    <div class="container">
                                        <div class="slider-1-height-3 slider-animated-1">
                                            <div class="hero-slider-content-2">
                                                <h4 class="animated">Trade-In Offer</h4>
                                                <h2 class="animated fw-900">Supper Value Deals</h2>
                                                <h1 class="animated fw-900 text-brand">On All Products</h1>
                                                <p class="animated">Save more with coupons & up to 70% off</p>
                                                <a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>
                                            </div>
                                            <div class="slider-img">
                                                <img src="{{asset('/')}}website/assets/imgs/slider/slider-4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-slider single-animation-wrap">
                                    <div class="container">
                                        <div class="slider-1-height-3 slider-animated-1">
                                            <div class="hero-slider-content-2">
                                                <h4 class="animated">Tech Promotions</h4>
                                                <h2 class="animated fw-900">Tech Trending</h2>
                                                <h1 class="animated fw-900 text-brand">Great Collection</h1>
                                                <p class="animated">Save more with coupons & up to 20% off</p>
                                                <a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>
                                            </div>
                                            <div class="slider-img">
                                                <img src="{{asset('/')}}website/assets/imgs/slider/slider-5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-arrow hero-slider-1-arrow style-3"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-md-none d-lg-block">
                        <div class="banner-img banner-1 wow fadeIn  animated home-3">
                            <img class="border-radius-10" src="{{asset('/')}}website/assets/imgs/banner/banner-5.jpg" alt="">
                            <div class="banner-text">
                                <span>Accessories</span>
                                <h4>Save 17% on <br>Autumn Hat</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="banner-img banner-2 wow fadeIn  animated mb-0">
                            <img class="border-radius-10" src="{{asset('/')}}website/assets/imgs/banner/banner-7.jpg" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Eardrop</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up animated">
                            <img src="{{asset('/')}}website/assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up animated">
                            <img src="{{asset('/')}}website/assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up animated">
                            <img src="{{asset('/')}}website/assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up animated">
                            <img src="{{asset('/')}}website/assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up animated">
                            <img src="{{asset('/')}}website/assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up animated">
                            <img src="{{asset('/')}}website/assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding wow fadeIn animated">
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active">Featured</button>
                        </li>
                    </ul>
                    <a href="{{ route('all-products') }}" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($featuredProducts as $product)
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product.detail', $product->slug) }}">
                                                <img class="default-img" src="{{asset($product->image)}}" width="280" height="280" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up wishlistBtn" data-id="{{ $product->id }}" href="javascript: void(0)"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        @if(!empty($product->offer))
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ $product->offer }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('category.product', $product->category->name) }}">{{ $product->category->name }}</a>
                                        </div>
                                        <h2><a href="{{ route('product.detail', $product->slug) }}">{{ strlen($product->name) > 45 ? substr($product->name, 0, 45). '...' : $product->name }}</a></h2>

                                            <div class="rating-result" title="90%">
                                                <span>
                                                    @if(!empty($product->offer))
                                                    <span>{{ $product->offer }}</span>
                                                    @endif
                                                </span>
                                            </div>

                                        <div class="product-price">
                                            <span>${{ $product->selling_price }} </span>
                                            <span class="old-price">${{ $product->regular_price }}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <button aria-label="Add To Cart" class="action-btn hover-up cardBtn" data-id="{{ $product->id }}">
                                                <i class="fi-rs-shopping-bag-add"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-detail-grid-4-->
                    </div>
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="{{asset('/')}}website/assets/imgs/banner/banner-4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                        <a href="shop-grid-right.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($popularCategories as $category)
                            <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('category.product', $category->slug) }}"><img src="{{asset($category->image)}}" width="170" height="170" alt=""></a>
                            </figure>
                            <h5><a href="{{ route('category.product', $category->slug) }}">{{ $category->name }}</a></h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{asset('/')}}website/assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{asset('/')}}website/assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{asset('/')}}website/assets/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-25 pb-20">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach($newArrivals as $product)
                            <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img" src="{{asset($product->image)}}" width="197" height="197" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up wishlistBtn" data-id="{{ $product->id }}" href="javascript: void(0)" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    @if(!empty($product->offer))
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{ $product->offer }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="{{ route('product.detail', $product->slug) }}">{{ strlen($product->name) > 15 ? substr($product->name, 0, 15).'...' : $product->name }}</a></h2>
                                    <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                    </div>
                                    <div class="product-price">
                                        <span>${{ $product->selling_price }} </span>
                                        <span class="old-price">${{ $product->regular_price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="background-image: url('{{asset('/')}}website/assets/imgs/banner/menu-banner-7.jpg');">
                            <div class="deal-top">
                                <h2 class="text-brand">Deal of the Day.</h2>
                                <h5>Limited quantities.</h5>
                            </div>
                            <div class="deal-content">
                                <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>
                                <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>
                            </div>
                            <div class="deal-bottom">
                                <p>Hurry Up! Offer End In:</p>
                                <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated" style="background-image: url('{{asset('/')}}website/assets/imgs/banner/menu-banner-8.jpg');">
                            <div class="deal-top">
                                <h2 class="text-success">Men Clothing</h2>
                                <h5>Shirt & Bag</h5>
                            </div>
                            <div class="deal-content">
                                <h6 class="product-title"><a href="shop-product-right.html">Try something new on vacation</a></h6>
                                <div class="product-price"><span class="new-price">$178.00</span><span class="old-price">$256.99</span></div>
                            </div>
                            <div class="deal-bottom">
                                <p>Hurry Up! Offer End In:</p>
                                <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                                <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container pb-20">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        @foreach($brands as $brand)
                            <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset($brand->image)}}" width="170" height="120" alt="" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-grey-9 section-padding">
            <div class="container pt-15 pb-25">
                <div class="heading-tab d-flex">
                    <div class="heading-tab-left wow fadeIn animated">
                        <h3 class="section-title mb-20"><span>Monthly</span> Best Sell</h3>
                    </div>
                    <div class="heading-tab-right wow fadeIn animated">
                        <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-flex">
                        <div class="banner-img style-2 wow fadeIn animated">
                            <img src="{{asset('/')}}website/assets/imgs/banner/banner-9.jpg" alt="">
                            <div class="banner-text">
                                <span>Woman Area</span>
                                <h4 class="mt-5">Save 17% on <br>Clothing</h4>
                                <a href="shop-grid-right.html" class="text-white">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-1-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-1-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Nulla</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Maecenas eget</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-2-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-2-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Duis </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Luctus suscipit</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-3-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-3-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Fusce </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Aliquam ac</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-4-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-4-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Nunc </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Fusce et ligula</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-11-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-11-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Aliquam</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Morbi lacinia</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End tab-pane-->
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-6-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-6-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed 2</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-7-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-7-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-5-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-5-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Hugy Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-10-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-10-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-12-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-12-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-8-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-8-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-13-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-13-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-14-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-14-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Hugy Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-15-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-15-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="{{asset('/')}}website/assets/imgs/shop/product-11-1.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}website/assets/imgs/shop/product-11-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End tab-content-->
                    </div>
                    <!--End Col-lg-9-->
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container pt-25 pb-20">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="section-title mb-20"> <span>From</span> blog</h3>
                        <div class="post-list mb-4 mb-lg-0">
                            <article class="wow fadeIn animated">
                                <div class="d-md-flex d-block">
                                    <div class="post-thumb d-flex mr-15">
                                        <a class="color-white" href="blog-post-fullwidth.html">
                                            <img src="{{asset('/')}}website/assets/imgs/blog/blog-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta mb-10 mt-10">
                                            <a class="entry-meta meta-2" href="blog-category-fullwidth.html"><span class="post-in font-x-small">Fashion</span></a>
                                        </div>
                                        <h4 class="post-title mb-25 text-limit-2-row">
                                            <a href="blog-post-fullwidth.html">Qualcomm is developing a Nintendo Switch-like console, report says</a>
                                        </h4>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on">14 April 2022</span>
                                                <span class="hit-count has-dot">12M Views</span>
                                            </div>
                                            <a href="blog-post-right.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated">
                                <div class="d-md-flex d-block">
                                    <div class="post-thumb d-flex mr-15">
                                        <a class="color-white" href="blog-post-fullwidth.html">
                                            <img src="{{asset('/')}}website/assets/imgs/blog/blog-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta mb-10 mt-10">
                                            <a class="entry-meta meta-2" href="blog-category-fullwidth.html"><span class="post-in font-x-small">Healthy</span></a>
                                        </div>
                                        <h4 class="post-title mb-25 text-limit-2-row">
                                            <a href="blog-post-fullwidth.html">Not even the coronavirus can derail 5G's global momentum</a>
                                        </h4>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on">14 April 2022</span>
                                                <span class="hit-count has-dot">12M Views</span>
                                            </div>
                                            <a href="blog-post-right.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner-img banner-1 wow fadeIn animated">
                                    <img src="{{asset('/')}}website/assets/imgs/banner/banner-5.jpg" alt="">
                                    <div class="banner-text">
                                        <span>Accessories</span>
                                        <h4>Save 17% on <br>Autumn Hat</h4>
                                        <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-img mb-15 wow fadeIn animated">
                                    <img src="{{asset('/')}}website/assets/imgs/banner/banner-6.jpg" alt="">
                                    <div class="banner-text">
                                        <span>Big Offer</span>
                                        <h4>Save 20% on <br>Women's socks</h4>
                                        <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="banner-img banner-2 wow fadeIn animated mb-0">
                                    <img src="{{asset('/')}}website/assets/imgs/banner/banner-7.jpg" alt="">
                                    <div class="banner-text">
                                        <span>Smart Offer</span>
                                        <h4>Save 20% on <br>Eardrop</h4>
                                        <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

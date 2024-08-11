@extends('web.layouts.main')

@section('content')
    <!-- Home flower/insta -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            <div>
                <div class="home text-center">
                    <img src="{{ asset('assets/web/images/banner/banner-omg-1.png') }}" alt="" class="bg-img">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    {{-- <div>
                                        <a href="#" class="btn btn-solid">Join Now</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="{{ asset('assets/web/images/banner/banner-omg-2.png') }}" alt="" class="bg-img">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    {{-- <div>
                                        <a href="#" class="btn btn-solid">Join Now</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home flower/insta end -->

    <!-- collection banner -->
    <section class="banner-padding pb-0">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left text-center">
                            <div class="img-part">
                                <img width="429" height="490" src="{{ asset('assets/web/images/event/event-2.png') }}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-8">
                    <a href="#">
                        <div class="collection-banner p-right">
                            <div class="img-part">
                                <img width="890" height="490" src="{{ asset('assets/web/images/event/event-3.png') }}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2>hot deal</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->

    <!-- product section -->
    <section class="section-b-space ratio_square">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title4">
                        <h2 class="title-inner4">Coming Soon!</h2>
                        <div class="line"><span></span></div>
                    </div>
                    <div class="product-4 product-m no-arrow">
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                {{-- <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div> --}}
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_1.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_1.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-box">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <a href="product-page(no-sidebar).html" class="w-100">
                                    <h6>CREATORS LAB x OMG</h6>
                                </a>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_2.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_2.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-box">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <a href="product-page(no-sidebar).html" class="w-100">
                                    <h6>CREATORS LAB x OMG</h6>
                                </a>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                {{-- <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div> --}}
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_3.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_3.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-box">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <a href="product-page(no-sidebar).html" class="w-100">
                                    <h6>CREATORS LAB x OMG</h6>
                                </a>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_4.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_4.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-box">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                        title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a
                                        href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <a href="product-page(no-sidebar).html" class="w-100">
                                    <h6>CREATORS LAB x OMG</h6>
                                </a>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                {{-- <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                        sale</span></div> --}}
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_5.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                            src="{{ asset('assets/web/images/event/event_5.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-box">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                            class="ti-shopping-cart"></i></button>
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#quick-view" title="Quick View"><i class="ti-search"
                                            aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i
                                            class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail text-center">
                                <a href="product-page(no-sidebar).html" class="w-100">
                                    <h6>CREATORS LAB x OMG</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <!--  tab section  -->
    <div class="bg-block">
        <section class="p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title4">
                            <h2 class="title-inner4">CREATORS LAB EVENT!</h2>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="theme-tab">
                            <ul class="tabs tab-title">
                                <li class="current"><a href="tab-7">winter</a></li>
                                <li class=""><a href="tab-8">greens</a></li>
                                <li class=""><a href="tab-9">various</a></li>
                            </ul>
                            <div class="tab-content-cls">
                                <div id="tab-7" class="tab-content active default">
                                    <div class="row product-tab">
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-8" class="tab-content">
                                    <div class="row product-tab">
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload w-100"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-9" class="tab-content">
                                    <div class="row product-tab">
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Brighten Up The Day</h6>
                                                        </a>
                                                        <h4>$26.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Elegant Vibe Bouquet</h6>
                                                        </a>
                                                        <h4>$15.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Pastel Carnations Bouquet</h6>
                                                        </a>
                                                        <h4>$25.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Luxury Roses Bouquet</h6>
                                                        </a>
                                                        <h4>$30.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Elegant Vibe Bouquet</h6>
                                                        </a>
                                                        <h4>$15.00 </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Mixed Roses Bouquet</h6>
                                                        </a>
                                                        <h4>$22.90</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Timeless Love Red Roses Bouquet</h6>
                                                        </a>
                                                        <h4>$20.00 <del>$22.00</del></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a href="product-page(no-sidebar).html" class="w-100"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="{{ asset('assets/web/images/flower/product/7.jpg') }}"
                                                            alt=""></a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html" class="w-100">
                                                            <h6>Brighten Up The Day</h6>
                                                        </a>
                                                        <h4>$26.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--  tab section end -->

    <section class="section-b-space ratio_square">
    </section>
    <!-- blog section -->
    <section class="blog flower-bg section-b-space ratio3_2 slick-default-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title4">
                        <h4>our story</h4>
                        <h2 class="title-inner4">from the blog</h2>
                        <div class="line"><span></span></div>
                    </div>
                    <div class="slide-3 no-arrow">
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{ asset('assets/web/images/flower/blog/1.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{ asset('assets/web/images/flower/blog/2.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{ asset('assets/web/images/flower/blog/3.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{ asset('assets/web/images/flower/blog/2.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->

    <!-- instagram section -->
    <section class="instagram section-b-space ratio_square">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-borderless"># instagram</h2>
                    <div class="slide-5 no-arrow slick-instagram">
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/2.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/3.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/4.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/5.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/2.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/2.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/2.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/2.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="{{ asset('assets/web/images/flower/insta/2.jpg') }}" class="bg-img"
                                        alt="Avatar" style="width:100%">
                                    <div class="overlay"><i class="fa fa-instagram"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->
@endsection

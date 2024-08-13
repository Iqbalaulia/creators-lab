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
    {{-- <section class="banner-padding pb-0">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left text-center">
                            <div class="img-part">
                                <img width="429" height="490" src="{{ asset('assets/web/images/event/event_4.png') }}"
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
    </section> --}}
    <!-- collection banner end -->

    <!-- coming soon event -->
    @include('web.components.comingSoon.index')
    <!-- coming soon event end -->

    <!--  documentation section  -->
    @include('web.components.docsEvent.index')
    <!--  documentation section end -->

    <!--   about us  -->
    @include('web.components.aboutUs.index')
    <!-- anput us end  -->

    <!-- blog section -->
    @include('web.components.blog.index')
    <!-- blog section end-->

    <!-- instagram section -->
    @include('web.components.instagram.index')
    <!-- instagram section end -->
@endsection

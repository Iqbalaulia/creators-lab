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

    <!-- coming soon event -->
    @include('web.components.comingSoon.index')
    <!-- coming soon event end -->

    <!--  documentation section  -->
    @include('web.components.docsEvent.index')
    <!--  documentation section end -->

    <!--   about us section  -->
    @include('web.components.aboutUs.index')
    <!-- anput us section end  -->

    <!-- brand section -->
    @include('web.components.brand.index')
    <!-- brand section end -->


    <!-- blog section -->
    @include('web.components.blog.index')
    <!-- blog section end-->


    <!-- instagram section -->
    @include('web.components.instagram.index')
    <!-- instagram section end -->
@endsection

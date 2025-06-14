@extends('frontend.layouts.app')
@section('title', 'E-Catalogue - ')
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb cat">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>E-Catalogue</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">E-Catalogue</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->

    <section class="pt-0 mt-0">
        <!-- Gallery -->
    <div class="gallery pq-bg-dark pq-bg-img-2 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 wow animated fadeInDown">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">Our Tile Bazaar gallery</span>
                        <h5 class="pq-section-main-title pq-text-white">We Specialization In Tiles</h5>
                    </div>
                </div>
                <div class="col-lg-12 pq-mb-130">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/1.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/2.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/3.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/4.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/5.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/5.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/6.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/6.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/7.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/7.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/8.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/8.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/9.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/9.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{asset('frontend/images/gallery/10.jpg')}}">
                                <img src="{{asset('frontend/images/gallery/10.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Gallery -->

@endsection

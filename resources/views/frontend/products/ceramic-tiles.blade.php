@extends('frontend.layouts.app')
@section('title', ' Ceramic Tiles - ')
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1> Ceramic Tiles</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                  <li class="breadcrumb-item">
                                    <a href="{{ url('/products') }}">Products</a>
                                </li>
                                <li class="breadcrumb-item active"> Ceramic Tiles</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->


    <!-- Services -->
    <section class="services py-5">
        <div class="container">
            <div class="row align-items-center text-center shadow_card ">
                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/ceramic/por-19.png') }}"
                                    alt="servicebox">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/ceramic/sla-10.png') }}"
                                    alt="servicebox">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/ceramic/sla-9.png') }}"
                                    alt="servicebox">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/ceramic/sla-8.png') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/ceramic/por-20.png') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/ceramic/por-17.png') }}"
                                    alt="servicebox">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->


@endsection

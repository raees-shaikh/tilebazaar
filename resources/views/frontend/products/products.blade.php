@extends('frontend.layouts.app')
@section('title', 'Products - ')
@section('content')

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb pro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Products</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Products</li>
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
            <div class="row align-items-center text-center">
                <div class=" wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">what we offer</span>
                        <h5 class="pq-section-main-title">range of luxurious tiles</h5>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="divider pq-right-border pq-45"></div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/3.jpg') }}" alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/') }}">Portland silver</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/4.jpg') }}" alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/porcelain-tiles') }}">Onyx Rialto</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/5.jpg') }}" alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/ceramic-tiles') }}">Onyx Brown</a>
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/6.jpg') }}" alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/indoor-tiles') }}">Portland Beige</a>
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/8.jpg') }}" alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/outdoor-tiles') }}">Portland Ciza</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/9.jpg') }}" alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/') }}">Onyx White Decor</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col text-center mx-auto">
                    <div class="pq-pagination ">
                        <nav aria-label="Page navigation mx-auto d-inline-block text-center">
                            <ul class="page-numbers text-center justify-content-center">
                                <li><a class="prev page-numbers">Previous page</a></li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="next page-numbers">Next page</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->

@endsection

@extends('frontend.layouts.app')
@section('title', 'Portfolio - ')
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb port">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Portfolio</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Portfolio</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->


    <!-- Masnory -->
    <section class="masonry py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-grid-container">
                        <div class="pq-filters">
                            <div class="filters pq-filter-button-group">
                                <ul>
                                    <li class="active pq-filter-btn" data-filter="*">All</li>
                                    {{-- <li class="pq-filter-btn" data-filter=".61">Natural Stone</li> --}}
                                    <li class="pq-filter-btn" data-filter=".59">Porcelain Tiles</li>
                                    <li class="pq-filter-btn" data-filter=".52">Ceramic Tiles</li>
                                    <li class="pq-filter-btn" data-filter=".7">Indoor Tiles</li>
                                    <li class="pq-filter-btn" data-filter=".58">Outdoor Tiles</li>
                                    {{-- <li class="pq-filter-btn" data-filter=".60">Wooden</li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="pq-masonry " data-next_items="3" data-initial_items="5">
                            <div class="grid-sizer pq-col-4"></div>
                            <div class="pq-masonry-item pq-filter-items  ipt-lg-4 style_2 59 ">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/porcelain-tiles') }}">indoor court</a></h5>
                                            <span><a href="{{ url('/porcelain-tiles') }}">Laminate</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/porcelain-tiles') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items  ipt-lg-4 style_2 59  52 ">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/ceramic-tiles') }}">Awesome Outdoor Project</a></h5>
                                            <span><a href="{{ url('/ceramic-tiles') }}">Laminate</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/ceramic-tiles') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items  ipt-lg-4 style_2 61  52  60 ">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/ceramic-stone') }}">kitchen renovation</a></h5>
                                            <span><a href="{{ url('/ceramic-stone') }}">flooring</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/ceramic-stone') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items  ipt-lg-6 style_2 61  52 ">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/4.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/') }}">Industrial Flooring</a></h5>
                                            <span><a href="{{ url('/') }}">flooring</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items  ipt-lg-6 style_2 52  7 ">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/5.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/indoor-tiles') }}">eco-friendly-flooring</a></h5>
                                            <span><a href="{{ url('/indoor-tiles') }}">marble</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/indoor-tiles') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="64.356" height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items ipt-lg-4 style_2 61 59">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/6.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/') }}">Laminate Flooring</a></h5>
                                            <span><a href="{{ url('/') }}">flooring</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items ipt-lg-4 style_2 58 60">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/7.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/outdoor-tiles') }}">Bamboo flooring</a></h5>
                                            <span><a href="{{ url('/outdoor-tiles') }}">tiles</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/outdoor-tiles') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items ipt-lg-4 style_2 61 52 7">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/8.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/indoor-stone') }}">Stone Cladding</a></h5>
                                            <span><a href="{{ url('/indoor-stone') }}">flooring</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/indoor-stone') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items ipt-lg-6 style_2 59 58">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/outdoor-tiles') }}">Ceramic Tiles</a></h5>
                                            <span><a href="{{ url('/outdoor-tiles') }}">Laminate</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/outdoor-tiles') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-masonry-item pq-filter-items ipt-lg-6 style_2 7 60">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img decoding="async"
                                                src="{{ asset('frontend/images/portfolio-grid/masonry/10.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{ url('/') }}">Wall Carpeting</a></h5>
                                            <span><a href="{{ url('/') }}">stone</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{ url('/') }}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                                            height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1" opacity="0.5">
                                                                    </circle>
                                                                    <circle data-name="Ellipse 3" cx="17"
                                                                        cy="17.76" r="17.76"
                                                                        transform="translate(34.78 2.24)" fill="none"
                                                                        stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1"
                                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                                    fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pq-mt-30">
                        <a id="showMore" class="pq-button pq-button-flat" href="#">
                            <div class="pq-button-block">
                                <span class="pq-btn-text">load More</span>
                                <span class="pq-button-line-right"></span>
                                <i class="ion ion-ios-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Masnory -->

@endsection

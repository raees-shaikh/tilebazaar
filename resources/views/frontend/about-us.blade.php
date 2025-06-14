@extends('frontend.layouts.app')
@section('title', 'About Us - ')
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>About Us</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->

    <!-- About Us -->
    <section class="about-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-us-img">
                        <img src="{{ asset('frontend/images/products/10.jpeg') }}" class="pq-image1 wow animated fadeInLeft"
                            alt="">
                        <img src="{{ asset('frontend/images/products/2.jpeg') }}" class="pq-image2 wow animated zoomIn"
                            alt="">
                    </div>
                </div>
                <div class="col-xl-6 pq-about-us-padding wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1 pq-mb-35">
                        <span class="pq-section-sub-title">about us</span>
                        <h5 class="pq-section-main-title">Discover Style. Choose Quality. Transform Your Space.</h5>
                        <p class="pq-section-description">Tile Bazaar is a trusted name in the UK’s tile retail market,
                            renowned for offering an exceptional range of high-quality tiles for homes, businesses, and
                            renovation projects. With over a decade of experience in the industry, we bring the finest
                            porcelain, ceramic, and natural stone tiles directly to our customers—sourced from the most
                            reputable manufacturers in Spain, Italy, and India. Whether you’re refreshing a bathroom,
                            redesigning a kitchen, or outfitting an entire property, Tile Bazaar is your go-to destination
                            for style, quality, and value.</p>
                        <p class="pq-section-description">At Tile Bazaar, we bring you the finest collection of tiles for
                            every room, every style, and every budget. Whether you’re renovating your kitchen, redesigning a
                            bathroom, or starting a new build, we offer a stunning range of porcelain, ceramic, natural
                            stone, mosaic, and outdoor tiles sourced from the top manufacturers in Spain, Italy, and India.
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->



    <!-- Flooring -->
    <section class="flooring pq-bg-dark pq-bg-img-2 pq-pb-260 py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-md-8 wow animated fadeInLeft">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">Key Features</span>
                        <h5 class="pq-section-main-title pq-text-white"> Our Showroom Amenities</h5>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="divider pq-left-border pq-45"></div>
                </div>
                <div class=" col-md-6 wow animated fadeInUp">
                    <div class="pq-fancy-box pq-style-2  text-left">
                        <div class="pq-fancy-box-icon">
                            <i> <img src="{{ asset('frontend/images/icons/quality.png') }}" alt=""></i>
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title pq-text-white">
                                Curated Quality & Style
                            </h5>
                            <p class="pq-fancy-box-description pq-text-white"> Tile Bazaar, we believe every space deserves
                                to shine. That’s why we carefully curate our collections to feature only the most stylish,
                                durable, and on-trend tiles. From timeless classics to modern statement pieces, our range is
                                designed to inspire and elevate. We handpick our tiles to ensure superior quality and
                                finish, helping you transform any room with confidence.</p>
                            <div class="pq-btn-container">

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 mt-5 mt-md-0 wow animated fadeInUp">
                    <div class="pq-fancy-box pq-style-2  text-left">
                        <div class="pq-fancy-box-icon">
                            <i> <img src="{{ asset('frontend/images/icons/customer.png') }}" alt=""></i>
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title pq-text-white">Personalized Customer Experience</h5>
                            <p class="pq-fancy-box-description pq-text-white">Our knowledgeable and friendly team is here to
                                guide you every step of the way. Whether you're a homeowner starting a DIY project or an
                                interior designer working on a client's dream space, we provide expert advice and
                                personalized recommendations tailored to your style and budget. We also offer free tile
                                samples so you can see and feel the quality before you buy.</p>
                            <div class="pq-btn-container">

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 mt-5 mt-lg-0 wow animated fadeInUp">
                    <div class="pq-fancy-box pq-style-2  text-left">
                        <div class="pq-fancy-box-icon">
                            <i> <img src="{{ asset('frontend/images/icons/delivery.png') }}" alt=""></i>
                            {{-- <i class=" flaticon-stone" aria-hidden="true"></i> --}}
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title pq-text-white">Convenient Shopping & Fast Delivery</h5>
                            <p class="pq-fancy-box-description pq-text-white">Shopping with Tile Bazaar is simple and
                                stress-free. Visit our showroom for hands-on inspiration or explore our website to browse
                                our full range online. Once you’ve made your choice, we provide fast and reliable nationwide
                                delivery, ensuring your tiles arrive safely and on schedule.</p>
                            <div class="pq-btn-container">

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 mt-5 mt-lg-0 wow animated fadeInUp">
                    <div class="pq-fancy-box pq-style-2  text-left">
                        <div class="pq-fancy-box-icon">
                            <i> <img src="{{ asset('frontend/images/icons/commitment.png') }}" alt=""></i>
                        </div>
                        <div class="pq-fancy-box-info">
                            <h5 class="pq-fancy-box-title pq-text-white">Sustainability Commitment</h5>
                            <p class="pq-fancy-box-description pq-text-white">Tile Bazaar is proud to support sustainable
                                practices. We work with eco-conscious suppliers and prioritize packaging materials that are
                                recyclable and reusable. By partnering with manufacturers who embrace responsible
                                production, we aim to help protect the planet—one tile at a time.</p>
                            <div class="pq-btn-container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Flooring -->

    <!-- FAQ -->
    <section class="faq pb-5 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pe-xl-90">
                    <div class="pq-faq-img">
                        <img src="{{asset('frontend/images/client/why.jpg')}}" class="img-fluid wow animated fadeInLeft" alt="faq-img">
                        <div class="floating-counters">
                            <div class="floating-counter-1 pq-bg-primary wow animated zoomIn">
                                <div class="pq-counter pq-style-1">
                                    <div class="pq-counter-contain">
                                        <div class="pq-counter-info">
                                            <div class="pq-counter-num-prefix">
                                                <h5 class="timer" data-to="35" data-speed="2000">35</h5>
                                                <span class="pq-counter-prefix">+</span>
                                            </div>
                                            <p class="pq-counter-description pq-text-white">Years Of Experience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ps-xl-60 mt-4 mt-xl-0 wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <span class="pq-section-sub-title">COMMON QUERIES</span>
                        <h5 class="pq-section-main-title">Why Choose Tile Bazaar?</h5>
                    </div>
                    <div class="pq-accordion-block pq-style-1">
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box pq-active 1">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                        Extensive Tile Collection
                                        <i aria-hidden="true" class="ion ion-plus-round active"></i>
                                        <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details">
                                    <p class="pq-detail-text"> A wide range of sizes, finishes, and styles to suit every taste. </p>
                                </div>
                            </div>
                        </div>
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box   2">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                        Expert Guidance
                                        <i aria-hidden="true" class="ion ion-plus-round active"></i>
                                        <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details">
                                    <p class="pq-detail-text">  In-store and online advice from experienced tile specialists. </p>
                                </div>
                            </div>
                        </div>
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box   3">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                   Free Samples
                                        <i aria-hidden="true" class="ion ion-plus-round active"></i>
                                        <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details">
                                    <p class="pq-detail-text"> Try before you buy with no cost and no obligation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box   4">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                    Reliable Delivery
                                        <i aria-hidden="true" class="ion ion-plus-round active"></i>
                                        <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details">
                                    <p class="pq-detail-text"> Fast, secure, and convenient delivery across the UK. </p>
                                </div>
                            </div>
                        </div>

                          <div class="pq-accordion-block ">
                            <div class="pq-accordion-box   5">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                    Customer-Centric Approach
                                        <i aria-hidden="true" class="ion ion-plus-round active"></i>
                                        <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details">
                                    <p class="pq-detail-text">We're with you from inspiration to installation. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->


    <!-- Counter -->
    <section class="counter pq-counter-60 pq-icon-box pq-style-4 py-5 mb-5">
        <div class="container">
            <div class="row d-flex align-items-center ">
                <div class=" col-md-8 ">
                    <div class="pq-counter pq-counter-style-1 text-md-start text-center">
                        <div class="pq-counter-info">
                            <div class="">
                                <h3 class="mb-4 pq-icon-box-title">Visit Us Today</h3>
                            </div>
                            <p class="pq-icon-box-description text-black text-capitalize font-weight-normal">Whether you're planning a small upgrade or a complete renovation, Tile Bazaar is here to help bring your vision to life. Visit our showroom or shop online to discover the perfect tiles for your next project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-md-0 mt-4 text-center">
                        <a class="pq-button pq-button-flat" href="{{ url('/contact-us') }}">
                        <div class="pq-button-block">
                            <span class="pq-button-text">Get In Touch </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter -->

@endsection

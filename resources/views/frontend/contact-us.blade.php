@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->
    <!-- Contact Us -->
    <section class="contact-us pb-xl-0 py-5">
        <div class="container">
            <div class="row">
                <div class="pq-section-title pq-style-1 pq-mb-30 text-center">
                    <span class="pq-section-sub-title">contact Us</span>
                    <h5 class="pq-section-main-title">Get in touch with us</h5>
                    <p class="pq-section-description">At Tile Bazaar, getting in touch with us is quick, easy, and
                        hassle-free. Whether you need help choosing the right tile, tracking an order, or requesting a
                        sample, we’re here to assist you every step of the way.</p>
                </div>
                <div class="col-lg-6">
                    <div class="pq-icon-box pq-style-3">
                        <div class="pq-icon">
                            <i class="ion ion-ios-home"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h6 class="mb-1">Visit Our Showroom</h6>
                            <p class="mb-0">Want to see our tiles in person? We’d love to welcome you to our showroom. To
                                ensure we’re ready to give you the attention and guidance you deserve, we kindly ask that
                                you book your visit at least 24 hours in advance. This helps us prepare any specific tiles
                                or displays you’d like to explore.</p>
                        </div>
                    </div>
                    {{-- <div class="divider pq-my-15"></div>
                    <div class="pq-icon-box pq-style-3">
                        <div class="pq-icon">
                            <i class="ion ion-ios-email"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h6 class="mb-1"> Live Chat Support</h6>
                            <p class="mb-1">Our website features a live chat option, where you can instantly connect with
                                our friendly customer support team. They’re available during business hours and trained to
                                answer most product and service-related queries in real time.</p>
                        </div>
                    </div> --}}
                    <div class="divider pq-my-15"></div>
                    <div class="pq-icon-box pq-style-3">
                        <div class="pq-icon">
                            <i class="ion ion-ios-email"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h6 class="mb-1"> Email Us Anytime</h6>
                            <p class="mb-1">Prefer email? No problem. You can send your inquiries to us at any time, and we aim to
                                respond within 24 hours—often much sooner. Whether it's a product question, order update, or
                                general feedback, we're always happy to help.</p>
                        </div>
                    </div>


                    <div class="divider pq-my-15"></div>
                    <div class="pq-icon-box pq-style-3">
                        <div class="pq-icon">
                            <i class="ion ion-ios-location"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h6 class="mb-1">Not Near Us? We’ve Got You Covered</h6>
                            <p class="mb-1">While our main showroom is in the UK, we serve customers nationwide with efficient delivery
                                and support. Can’t make it in person? Don’t worry—our expert team is available via chat,
                                phone, or email to help with anything you need.</p>
                        </div>
                    </div>

                    <div class="divider pq-my-15"></div>
                    <div class="pq-icon-box pq-style-3">
                        <div class="pq-icon">
                            <i class="ion ion-ios-box"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h6 class="mb-1">Request Free Samples</h6>
                            <p class="mb-1 ">Not sure which tile is right for your space? Simply visit our product section online, select
                                the tiles you’re interested in, and request free samples using our convenient sample cart.
                                We’ll deliver them right to your doorstep.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 p-xl-0">
                    <div class="pq-map pq-me-330">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.5116400168167!2d0.05744417662426142!3d51.577185671829234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a6e8169952c1%3A0x6e468a5da596355d!2s100%20Beehive%20Ln%2C%20Gants%20Hill%2C%20Ilford%20IG4%205EG%2C%20UK!5e0!3m2!1sen!2sin!4v1747305477675!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us -->
    <!-- Contact Us Form -->
    <section class="contact-form pt-0 pb-xl-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 p-xl-0">
                    <div class="pq-contact-img">
                        <img src="{{asset('frontend/images/client/get.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 ps-xl-5">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <h5 class="pq-section-main-title">How Can We Help You ?</h5>
                        <p class="pq-section-description">Please feel free to get in touch using the form below. We’d love
                            to hear for you.</p>
                    </div>
                    <form action="#" class="pq-contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="your-name" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="your-gender" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone-number" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="project-scope" placeholder="Project Scope">
                            </div>
                            <div class="col-md-12">
                                <textarea name="your-message" cols="40" rows="10" placeholder="Write Your Message"></textarea>
                            </div>
                            <div class="col-md-12 text-lg-start text-center">
                                <a class="pq-button" href="#">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text me-0">Submit Now</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Form -->

@endsection

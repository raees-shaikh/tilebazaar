    <!-- Footer -->
    <footer id="pq-footer">
        <div class="pq-footer-style-1 pt-5">
            <div class="pq-subscribe align-items-center">
                <div class="container">

                    <div class="pq-footer-top py-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="widget">
                                        <div class="pq-footer-logo">
                                            <a href="{{ url('/') }}"><img
                                                    src="{{ asset('frontend/images/Logo/logo.png') }}"
                                                    class="pq-footer-logo" alt="marblex-footer-logo"></a>
                                        </div>
                                        <p>Tile Bazaar is a trusted name in the UK’s tile retail market, renowned for
                                            offering an exceptional range of high-quality tiles for homes, businesses,
                                            and renovation projects. With over a decade of experience in the industry,
                                            we bring the finest porcelain, ceramic, and natural stone tiles directly to
                                            our customers—sourced from the most reputable manufacturers in Spain, Italy,
                                            and India. </p>

                                    </div>
                                </div>

                                <div class="col-lg-3  col-md-6">
                                    <div class="widget">
                                        <h4 class="footer-title">Useful Links</h4>
                                        <div class="menu-product-menu-container">
                                            <ul id="menu-product-menu" class="menu d-flex flex-wrap">

                                                <li class="menu-item">
                                                    <a href="{{ url('/') }}">Home</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ url('/about-us') }}">About Us</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/products') }}">Products</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/portfolio') }}">Portfolio</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/e-catalogue') }}">E-Catalogue</a>
                                                </li>

                                                {{-- <li class="menu-item">
                                                    <a href="{{ url('/natural-stone') }}">Natural Stone</a>
                                                </li> --}}

                                                <li class="menu-item">
                                                    <a href="{{ url('/porcelain-tiles') }}">Porcelain Tiles</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/ceramic-tiles') }}">Ceramic Tiles</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/indoor-tiles') }}">Indoor Tiles</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/outdoor-tiles') }}">Outdoor Tiles</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4  col-md-6">
                                    <div class="widget widget-port-1 mb-2">
                                        <h4 class="footer-title">Our showroom</h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul class="pq-contact">
                                                    <li>
                                                        <i class="fas fa-map-marker text-white"></i>
                                                        <span>100 BEEHIVE LANE, ESSEX, IG4 5EG, UK
                                                        </span>
                                                    </li>

                                                    <li>
                                                        <a href="tel: 02087111186"><i
                                                                class="fas fa-phone-alt text-white"></i>
                                                            <span> 02087111186</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:info@tilebazaar.uk">
                                                            <i class="fas fa-envelope text-white"></i>
                                                            <span class="text-lowercase">info@tilebazaar.uk</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pq-header-social d-flex mt-3 px-0">
                                                <ul class="d-flex">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram mx-2"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter mx-2"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pq-copyright-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <span class="pq-copyright"> © {{ date('Y') }} All Rights Reserved Tile bazaar |
                                        Designed &
                                        Developed By <a href="https://acetrot.com/" target="_blank"
                                            class="active-clr">Acetrot</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </footer>
    <!-- Footer -->

    <!-- Back To Top -->
    <div id="back-to-top" class="active">
        <a class="top" id="top" href="#top">
            <i class="ion-ios-arrow-up"></i>
        </a>
    </div>
    <!-- Back To Top -->

    <!-- Jquery -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend/js/jquery.countTo.min.js') }}"></script>
    <!-- Wow -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- Magnefic Popup -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Revslider -->
    <script src="{{ asset('frontend/rev/js/rbtools.min.js') }}"></script>
    <script src="{{ asset('frontend/rev/js/rs6.min.js') }}"></script>
    <script src="{{ asset('frontend/js/rev-custom.js') }}"></script>
    <!-- Custom Scrollbar -->
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>


    <!-- Loading -->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="{{asset('frontend/images/Logo/logo.png')}}" alt="Loading">
        </div>
    </div>
    <!-- Loading -->

    <!-- Header -->
    <div class="pq-background-overlay"></div>
    {{-- <div class="pq-sidebar">
        <div class="pq-close-btn">
            <a class="pq-close" href="javascript:void(0)">
                <i class="ion-close-round"></i>
            </a>
        </div>
    </div> --}}
    <header id="pq-header" class="pq-header-style-1  pq-has-sticky">
        <div class="pq-header-diff-block">
            <div class="row g-0">
                <div class="col-lg-12">
                    {{-- <div class="pq-top-header  top-style-1">
                        <div class="container-fluid p-0">
                            <div class="row flex-row-reverse">
                                <div class="col-md-6 text-right">
                                    <div class="pq-top-right text-right ">
                                        <div class="pq-header-time ">
                                            <ul>
                                                <li>
                                                    <i class="ti-timer"></i>
                                                    <span>Mon to Fri 9:00 am to 6:00pm</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pq-header-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6   ">
                                    <div class="pq-header-contact ">
                                        <ul>
                                            <li>
                                                <a href="tel: 02087111186"><i class="fas fa-phone-alt"></i>
                                                    <span>  02087111186</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@tilebazaar.uk"><i class="fas fa-envelope"></i><span>info@tilebazaar.uk</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="pq-bottom-header">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <a class="navbar-brand" href="{{url('/')}}">
                                        <img class="img-fluid logo" src="{{asset('frontend/images/Logo/logo.png')}}" alt="marblex">
                                    </a>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <div id="pq-menu-contain" class="pq-menu-contain">
                                            <ul id="pq-main-menu" class="navbar-nav ml-auto justify-content-end">

                                                <li class="menu-item {{ URL::current()==url('/') ? 'current-menu-item' : '' }}">
                                                    <a href="{{url('/')}}">Home</a>
                                                </li>
                                                 <li class="menu-item {{ URL::current()==url('/about-us') ? 'current-menu-item' : '' }}">
                                                    <a href="{{url('/about-us')}}">About Us</a>
                                                </li>

                                                     <li class="menu-item menu-item-has-children  {{ URL::current()==url('/products') || URL::current()==url('/natural-stone') || URL::current()==url('/porcelain-tiles') || URL::current()==url('/ceramic-tiles') || URL::current()==url('/indoor-tiles') || URL::current()==url('/outdoor-tiles') ? 'current-menu-item' : '' }}">
                                                    <a href="{{url('/products')}}">Products</a><i
                                                        class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        {{-- <li class="menu-item {{ URL::current()==url('/natural-stone') ? 'current-menu-item' : '' }}">
                                                            <a href="{{url('/natural-stone')}}" class="py-1">Natural Stone</a>
                                                        </li> --}}
                                                          <li class="menu-item {{ URL::current()==url('/porcelain-tiles') ? 'current-menu-item' : '' }}">
                                                            <a href="{{url('/porcelain-tiles')}}" class="py-1">Porcelain Tiles</a>
                                                        </li>
                                                          <li class="menu-item {{ URL::current()==url('/ceramic-tiles') ? 'current-menu-item' : '' }}">
                                                            <a href="{{url('/ceramic-tiles')}}" class="py-1">Ceramic Tiles</a>
                                                        </li>
                                                        <li class="menu-item {{ URL::current()==url('/indoor-tiles') ? 'current-menu-item' : '' }}">
                                                            <a href="{{url('/indoor-tiles')}}" class="py-1">Indoor Tiles</a>
                                                        </li>

                                                          <li class="menu-item {{ URL::current()==url('/outdoor-tiles') ? 'current-menu-item' : '' }}">
                                                            <a href="{{url('/outdoor-tiles')}}" class="py-1">Outdoor Tiles</a>
                                                        </li>
                                                    </ul>
                                                     </li>
                                                  <li class="menu-item {{ URL::current()==url('/portfolio') ? 'current-menu-item' : '' }}">
                                                    <a href="{{url('/portfolio')}}">Portfolio</a>
                                                </li>
                                                 <li class="menu-item {{ URL::current()==url('/e-catalogue') ? 'current-menu-item' : '' }}">
                                                    <a href="{{url('e-catalogue')}}">E-Catalogue</a>
                                                </li>
                                                 <li class="menu-item {{ URL::current()==url('/contact-us') ? 'current-menu-item' : '' }}">
                                                    <a href="{{url('/contact-us')}}">Contact Us</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->

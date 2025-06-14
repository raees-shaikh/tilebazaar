@extends('frontend.layouts.app')
@section('title', '')
@section('content')
    <!-- Banner -->
    <div class="banner py-0">
        <!-- START Home 1 REVOLUTION SLIDER 6.5.31 -->
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_3_1_wrapper" data-alias="home-1" data-source="gallery"
            style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_3_1" data-version="6.5.31">
                <rs-slides>
                    <rs-slide style="position: absolute;" data-key="rs-5" data-title="Slide"
                        data-thumb="frontend/rev/assets/1-6-50x100.jpg" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('frontend/rev/assets/dummy.png') }}" alt="" title="1" width="1920"
                            height="1058" class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="frontend/images/banner/1.jpeg" data-bg="p:center bottom;" data-no-retina="">
                        <!--
                       --><rs-layer id="slider-3-slide-5-layer-0" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-1" class="rs-subtitle-font" data-type="text"
                            data-color="#e6af5d" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                            data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:300;sp:1000;sR:300;" data-frame_999="o:0;st:w;sR:7700;"
                            style="z-index:11;text-transform:uppercase;">Welcome To
                            Tile Bazaar
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-2" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;" data-frame_999="o:0;st:w;"
                            style="z-index:8;background-color:#ffffff;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-3" class="rs-title-font" data-type="text"
                            data-color="#30373f" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                            data-text="w:normal;s:56,48,40,26;l:64,56,48,34;fw:600;a:left,left,center,center;"
                            data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                            style="z-index:12;text-transform:capitalize;">Discover Style. Choose Quality. Transform Your
                            Space.
                        </rs-layer><!--

                       --><a id="slider-3-slide-5-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{ url('/contact-us') }}" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                    class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                        </a><!--

                       --><rs-layer id="slider-3-slide-5-layer-5" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                        </rs-layer><!--
                --> </rs-slide>
                    <rs-slide style="position: absolute;" data-key="rs-37" data-title="Slide"
                        data-thumb="frontend/rev/assets/2-6-50x100.jpg" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('frontend/rev/assets/dummy.png') }}" alt="" title="2"
                            width="1920" height="1058" class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="frontend/images/banner/2.jpeg" data-bg="p:center bottom;" data-no-retina="">
                        <!--
                       --><rs-layer id="slider-3-slide-37-layer-0" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-37-layer-1" class="rs-subtitle-font" data-type="text"
                            data-color="#e6af5d" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                            data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:11;text-transform:uppercase;">Welcome To
                            Tile Bazaar
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-37-layer-2" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;" data-frame_999="o:0;st:w;"
                            style="z-index:8;background-color:#ffffff;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-37-layer-3" class="rs-title-font" data-type="text"
                            data-color="#30373f" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                            data-text="w:normal;s:56,48,40,26;l:64,56,48,34;fw:600;a:left,left,center,center;"
                            data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                            style="z-index:12;text-transform:capitalize;">Discover Style. Choose Quality. Transform Your
                            Space.
                        </rs-layer><!--

                       --><a id="slider-3-slide-37-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{ url('/contact-us') }}" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                    class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                        </a><!--

                       --><rs-layer id="slider-3-slide-37-layer-5" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                        </rs-layer>
                        --> </rs-slide>
                    <rs-slide style="position: absolute;" data-key="rs-38" data-title="Slide"
                        data-thumb="frontend/rev/assets/3-7-50x100.png" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('frontend/rev/assets/dummy.png') }}" alt="" title="3"
                            width="1920" height="804" class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="frontend/images/banner/3.jpg" data-bg="p:center bottom;"
                            data-no-retina="">
                        <!--
                       --><rs-layer id="slider-3-slide-38-layer-0" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-38-layer-1" class="rs-subtitle-font" data-type="text"
                            data-color="#e6af5d" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                            data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:11;text-transform:uppercase;">Welcome To
                            Tile Bazaar
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-38-layer-2" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;" data-frame_999="o:0;st:w;"
                            style="z-index:8;background-color:#ffffff;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-38-layer-3" class="rs-title-font" data-type="text"
                            data-color="#30373f" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                            data-text="w:normal;s:56,48,40,26;l:64,56,48,34;fw:600;a:left,left,center,center;"
                            data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                            style="z-index:12;text-transform:capitalize;">Tiles That Stand the Test of Time.
                        </rs-layer><!--

                       --><a id="slider-3-slide-38-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{ url('/contact-us') }}" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Contact Us </span><span
                                    class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                        </a><!--

                       --><rs-layer id="slider-3-slide-38-layer-5" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                        </rs-layer><!--
                --> </rs-slide>

                                    <rs-slide style="position: absolute;" data-key="rs-41" data-title="Slide"
                        data-thumb="frontend/rev/assets/1-6-50x100.jpg" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('frontend/rev/assets/dummy.png') }}" alt="" title="1" width="1920"
                            height="1058" class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="frontend/images/banner/4.jpeg" data-bg="p:center bottom;" data-no-retina="">
                        <!--
                       --><rs-layer id="slider-3-slide-5-layer-0" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-1" class="rs-subtitle-font" data-type="text"
                            data-color="#e6af5d" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                            data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:300;sp:1000;sR:300;" data-frame_999="o:0;st:w;sR:7700;"
                            style="z-index:11;text-transform:uppercase;">Welcome To
                            Tile Bazaar
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-2" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;" data-frame_999="o:0;st:w;"
                            style="z-index:8;background-color:#ffffff;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-3" class="rs-title-font" data-type="text"
                            data-color="#30373f" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                            data-text="w:normal;s:56,48,40,26;l:64,56,48,34;fw:600;a:left,left,center,center;"
                            data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                            style="z-index:12;text-transform:capitalize;">"Durable Design, Beautifully Crafted.
                        </rs-layer><!--

                       --><a id="slider-3-slide-5-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{ url('/contact-us') }}" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                    class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                        </a><!--

                       --><rs-layer id="slider-3-slide-5-layer-5" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                        </rs-layer><!--
                --> </rs-slide>

                                    <rs-slide style="position: absolute;" data-key="rs-39" data-title="Slide"
                        data-thumb="frontend/rev/assets/1-6-50x100.jpg" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('frontend/rev/assets/dummy.png') }}" alt="" title="1" width="1920"
                            height="1058" class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="frontend/images/banner/5.jpeg" data-bg="p:center bottom;" data-no-retina="">
                        <!--
                       --><rs-layer id="slider-3-slide-5-layer-0" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-1" class="rs-subtitle-font" data-type="text"
                            data-color="#e6af5d" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                            data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:300;sp:1000;sR:300;" data-frame_999="o:0;st:w;sR:7700;"
                            style="z-index:11;text-transform:uppercase;">Welcome To
                            Tile Bazaar
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-2" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;" data-frame_999="o:0;st:w;"
                            style="z-index:8;background-color:#ffffff;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-3" class="rs-title-font" data-type="text"
                            data-color="#30373f" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                            data-text="w:normal;s:56,48,40,26;l:64,56,48,34;fw:600;a:left,left,center,center;"
                            data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                            style="z-index:12;text-transform:capitalize;">"Where Quality and Style Converge.
                        </rs-layer><!--

                       --><a id="slider-3-slide-5-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{ url('/contact-us') }}" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                    class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                        </a><!--

                       --><rs-layer id="slider-3-slide-5-layer-5" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                        </rs-layer><!--
                --> </rs-slide>


                                    <rs-slide style="position: absolute;" data-key="rs-40" data-title="Slide"
                        data-thumb="frontend/rev/assets/1-6-50x100.jpg" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset('frontend/rev/assets/dummy.png') }}" alt="" title="1" width="1920"
                            height="1058" class="rev-slidebg tp-rs-img rs-lazyload"
                            data-lazyload="frontend/images/banner/6.jpeg" data-bg="p:center bottom;" data-no-retina="">
                        <!--
                       --><rs-layer id="slider-3-slide-5-layer-0" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-1" class="rs-subtitle-font" data-type="text"
                            data-color="#e6af5d" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                            data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:300;sp:1000;sR:300;" data-frame_999="o:0;st:w;sR:7700;"
                            style="z-index:11;text-transform:uppercase;">Welcome To
                            Tile Bazaar
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-2" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;" data-frame_999="o:0;st:w;"
                            style="z-index:8;background-color:#ffffff;">
                        </rs-layer><!--

                       --><rs-layer id="slider-3-slide-5-layer-3" class="rs-title-font" data-type="text"
                            data-color="#30373f" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                            data-text="w:normal;s:56,48,40,26;l:64,56,48,34;fw:600;a:left,left,center,center;"
                            data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                            data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                            style="z-index:12;text-transform:capitalize;">Discover Style. Choose Quality. Transform Your
                            Space.
                        </rs-layer><!--

                       --><a id="slider-3-slide-5-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{ url('/contact-us') }}" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                    class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                        </a><!--

                       --><rs-layer id="slider-3-slide-5-layer-5" data-type="shape" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                            data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                            data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                        </rs-layer><!--
                --> </rs-slide>

                </rs-slides>
            </rs-module>
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- Banner -->

    <!-- Services -->
    <section class="services py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 wow animated fadeInRight text-mobil-center">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">what we offer</span>
                        <h5 class="pq-section-main-title">range of luxurious tiles</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 wow animated fadeInRight mb-3 text-mobil-center">
                    <div class="button-align">
                        <a class="pq-button pq-button-flat" href="{{ url('/products') }}">
                            <div class="pq-button-block">
                                <span class="pq-button-text">view more </span>
                                <span class="pq-button-line-right"></span>
                                <i class="ion ion-ios-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="divider pq-right-border pq-45"></div>
                </div>




                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/3.jpg') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/products') }}">Portland silver</a>
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/4.jpg') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/products') }}">Onyx Rialto</a>
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/5.jpg') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/products') }}">Onyx Brown</a>
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/6.jpg') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/products') }}">Portland Beige</a>
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/8.jpg') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/products') }}">Portland Ciza</a>
                            </h5>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                    <div class="pq-service-box pq-style-3 text-center mb-3 mb-lg-4">
                        <div class="pq-service-media">
                            <div class="pq-service-img">
                                <img decoding="async" src="{{ asset('frontend/images/products/9.jpg') }}"
                                    alt="servicebox">
                            </div>
                        </div>
                        <div class="pq-service-info">
                            <h5 class="pq-service-title">
                                <a href="{{ url('/products') }}">Onyx White Decor</a>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services -->

    <!-- About Us -->
    <section class="about-us pq-bg-img-1 py-xl-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow animated fadeInLeft">
                    <div class="pq-about-us-img">
                        <img src="{{ asset('frontend/images/products/10.jpeg') }}" alt="about-img">
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5 wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <span class="pq-section-sub-title">about us</span>
                        <h5 class="pq-section-main-title"> Discover Style. Choose Quality. Transform Your Space.</h5>
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
                    <a class="pq-button pq-button-flat" href="{{ url('/about-us') }}">
                        <div class="pq-button-block">
                            <span class="pq-button-text">read more </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Services -->
    <section class="services pq-bg-dark pq-bg-img-2 pq-pt-220 pb-5 pt-5 ">
        <div class="container mt-5 pt-4">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 wow animated fadeInLeft pt-0 mt-0 text-mobile-center">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">Best Showroom</span>
                        <h5 class="pq-section-main-title pq-text-white">
                            Why Shop with Tile Bazaar?</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 wow animated fadeInLeft text-mobile-center">
                    <div class="button-align text-mobile-center">
                        <a class="pq-button pq-button-flat" href="{{ url('/e-catalogue') }}">
                            <div class="pq-button-block">
                                <span class="pq-button-text">read more </span>
                                <span class="pq-button-line-right"></span>
                                <i class="ion ion-ios-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="divider pq-left-border pq-45"></div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp">
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title">Premium Quality Tiles</h3>
                            <p>Our tiles are selected for their durability, finish, and on-trend designs—perfect for both
                                modern and traditional interiors.</p>
                        </div>
                        <div class="pq-icon">
                            <i class="flaticon-stone"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp">
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title">In-Store & Online Shopping</h3>
                            <p>Visit our showroom for expert advice and inspiration or shop online for convenience and
                                doorstep delivery.</p>
                        </div>
                       <div class="pq-icon">
                            <i>
                                <img src="{{asset('frontend/images/icons/cart.png')}}" alt="">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 wow animated fadeInUp">
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title">Free Tile Samples</h3>
                            <p>Request free samples online and try them at home before making your final choice.</p>
                        </div>
                        <div class="pq-icon">
                            <i class="flaticon-stone"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp">
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title"> Fast Nationwide Delivery</h3>
                            <p>We deliver across the UK with care and speed, ensuring your tiles arrive safely and on time.
                            </p>
                        </div>
                        <div class="pq-icon">
                            <i> <img src="{{ asset('frontend/images/icons/delivery-1.png') }}" alt=""></i>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp">
                    <div class="pq-icon-box pq-style-1">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title">Expert Support</h3>
                            <p>Need help choosing tiles or planning your layout? Our friendly team is always ready to guide
                                you.</p>
                        </div>
                        <div class="pq-icon">
                            <i> <img src="{{ asset('frontend/images/icons/support.png') }}" alt=""></i>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 wow animated fadeInUp">
                    <div class="pq-icon-box pq-style-1">
                        <div class="link-align">
                            <a class="pq-button pq-button-link" href="{{ url('/e-catalogue') }}">
                                <div class="pq-button-block">
                                    <div class="pq-svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356" height="36.52"
                                            viewbox="0 0 64.356 36.52">
                                            <g transform="translate(-6.444 -1.74)">
                                                <g data-name="Group 2">
                                                    <circle data-name="Ellipse 2" cx="17" cy="17.76" r="17.76"
                                                        transform="translate(34.78 2.24)" fill="none" stroke="#30373f"
                                                        stroke-width="1" opacity="0.5"></circle>
                                                    <circle data-name="Ellipse 3" cx="17" cy="17.76" r="17.76"
                                                        transform="translate(34.78 2.24)" fill="none" stroke="#30373f"
                                                        stroke-width="1"></circle>
                                                </g>
                                                <path data-name="Path 1"
                                                    d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                    fill="#30373f"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="pq-button-text">view all service</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->

    <!-- Skill -->
    <section class="skill py-5">
        <div class="container">
            <div class="floating-image floating-image-left floating-image-6">
                <img src="{{ asset('frontend/images/floating-images/4.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 wow animated fadeInLeft">
                    <div class="pq-sticky-top">
                        <div class="pq-section-title pq-style-1 pq-mb-30">
                            <span class="pq-section-sub-title">Best Collections</span>
                            <h5 class="pq-section-main-title">Explore Our Tile Collections</h5>
                            <p class="pq-section-description">From large format porcelain tiles and wood-effect flooring to
                                glossy wall tiles and bold statement pieces, we have everything you need to transform your
                                interiors.</p>
                        </div>
                        <a class="pq-button pq-button-flat" href="{{ url('/products') }}">
                            <div class="pq-button-block">
                                <span class="pq-button-text">view more </span>
                                <span class="pq-button-line-right"></span>
                                <i class="ion ion-ios-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 wow animated fadeInRight">
                    <div class="pq-icon-box pq-style-4">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title">Shop by Room</h3>
                            <p class="pq-icon-box-content">Kitchen, Bathroom, Living Room, Outdoor</p>
                        </div>
                        <div class="pq-icon">
                            <i class="flaticon-stone"></i>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-4 pq-mt-30">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-content"> Shop by Finish</h3>
                            <p class="pq-icon-box-description"> Matt, Gloss, Textured, Polished</p>
                        </div>
                        <div class="pq-icon">
                            <i class="flaticon-wood"></i>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-4 pq-mt-30">
                        <div class="pq-icon-box-content">
                            <h3 class="pq-icon-box-title"> Shop by Look</h3>
                            <p class="pq-icon-box-description">Marble Effect, Stone Effect, Wood Effect, Metro</p>
                        </div>
                        <div class="pq-icon">
                            <i class="flaticon-tile-1"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Skill -->

    <!-- Warehouse -->
    <section class="warehouse pq-bg-dark pq-bg-img-2 py-0">
        <div class="container">
            <div class="row align-items-center pq-pb-130 py-5">
                <div class="col-xl-6 wow animated fadeInLeft">

                    <img src="{{ asset('frontend/images/products/10.jpeg') }}" class=" w-100" alt="">

                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-30 wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">Exclusive Showroom</span>
                        <h5 class="pq-section-main-title pq-text-white">Visit Our Showroom</h5>
                        <p class="pq-section-description pq-text-white">Come see the quality for yourself! Book a visit to
                            our UK showroom and let our tile specialists help you design the space of your dreams.</p>
                    </div>
                    <div class="pq-section-title pq-style-1">

                        <h5 class="mb-0 mt-2 pq-text-white">Request Free Samples Today</h5>
                        <p class="pq-section-description pq-text-white pt-0 mt-2">Choosing the perfect tile is easier when
                            you can see and feel it. Select your favourites online and order free samples delivered to your
                            door.</p>
                    </div>
                    <div class="pq-section-title pq-style-1 mb-4">

                        <h5 class="mb-0 mt-2 pq-text-white">Stay Connected</h5>
                        <p class="pq-section-description pq-text-white pt-0 mt-2">Sign up to our newsletter for exclusive
                            offers, new arrivals, and design tips from the experts.</p>
                    </div>

                    <a class="pq-button pq-button-flat" href="{{ url('/contact-us') }}">
                        <div class="pq-button-block">
                            <span class="pq-button-text">contact us </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>



                </div>
            </div>

        </div>
    </section>
    <!-- Warehouse -->



    <!-- About Us -->
    <section class="about-us pq-bg-img-1 pt-5 pb-0 my-0">
        <div class="container">
            <div class="text-center mb-2">
                <div class="pq-section-title pq-style-1">
                    <h5 class="pq-section-main-title">Indoor & Outdoor Tiles</h5>
                    <p class="pq-section-description">At Tile Bazaar, we offer a versatile and stylish collection of tiles
                        suitable for both indoor and outdoor spaces. Whether you’re looking to enhance your living room,
                        kitchen, bathroom, patio, or garden, our range includes a variety of finishes and sizes to match
                        your needs.</p>
                </div>
            </div>
            <div class="row align-items-lg-center flex-column-reverse flex-lg-row">

                <div class="col-lg-12">
                    <div class="divider pq-left-border pq-45"></div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 wow animated fadeInLeft">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">Tile Bazaar – Where Quality Meets Design</span>
                        <h3 class="">Indoor Tiles</h3>
                        <p class="pq-section-description mb-3">Transform your interiors with our premium Polished and Matt
                            Finish tiles—perfect for floors and walls in any room.</p>

                        <h5 class="">Polished Finish</h5>
                        <p class="pq-section-description pt-0 mt-0">For a sleek, reflective surface that adds elegance and
                            brightness to your space.</p>

                        <h5 class="mt-3">Matt Finish</h5>
                        <p class="pq-section-description pt-0 mt-0">For a smooth, non-reflective surface with a
                            contemporary look and better slip resistance.</p>

                    </div>
                    <div class="divider pq-my-30"></div>
                    <div class="row pq-mb-45">

                        <div class="col-lg-6 col-md-6">
                            <h6 class="pt-0 mt-0 mb-3"> Polished Available Sizes:</h6>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>300x600 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x600 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x1200 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>800x800 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>800x1200 mm</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-2 mt-md-0">
                            <h6 class="pt-0 mt-0 mb-3">Matt Available Sizes:</h6>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>300x600 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x600 mm</span>
                                </li>

                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x1200 mm</span>
                                </li>

                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>800x800 mm</span>
                                </li>

                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>800x1200 mm</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <a class="pq-button pq-button-flat" href="{{ url('/indoor-tiles') }}">
                        <div class="pq-button-block">
                            <span class="pq-button-text">view more </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 text-center wow animated fadeInRight">
                    <img src="{{ asset('frontend/images/products/2.jpeg') }}" class="about-r-img" alt="about-img">
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->


    <section class="about-us pq-bg-img-1 pt-0 pb-md-5 pb-2 mt-0">
        <div class="container">
            <div class="row align-items-lg-center flex-column-reverse flex-lg-row">

                <div class="col-lg-12">
                    <div class="divider pq-left-border pq-45"></div>
                </div>
                <div class="col-lg-6 order-lg-2 mt-4 mt-lg-0 wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">Find the perfect tile. Create your dream space.</span>
                        <h3 class="">Outdoor Tiles</h3>
                        <p class="pq-section-description mb-3">Designed to withstand the elements while offering style and
                            durability, our outdoor tiles are ideal for patios, driveways, gardens, and terraces. Most are
                            2cm thick for extra strength and longevity.</p>

                    </div>
                    <div class="divider pq-my-30"></div>
                    <div class="row pq-mb-45">

                        <div class="col-lg-6 col-md-6">
                            <h6 class="pt-0 mt-0 mb-3"> Available Sizes:</h6>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x600 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x900 mm</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle"></i>
                                    <span>600x1200 mm</span>
                                </li>


                            </ul>
                        </div>

                    </div>
                    <a class="pq-button pq-button-flat" href="{{ url('/outdoor-tiles') }}">
                        <div class="pq-button-block">
                            <span class="pq-button-text">view more </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 order-lg-1  text-center wow animated fadeInLeft">
                    <img src="{{ asset('frontend/images/products/10.jpeg') }}" class="about-r-img" alt="about-img">
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

@endsection

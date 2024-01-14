<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Saloni Template | Home Page Style 1</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/fontawesome/css/font-awesome.min.css')}}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/flaticon.min.css')}}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/revolution/revolution/css/navigation.css')}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-1 mobile-sider-drawer-menu">

        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">
                <div class="container">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.html">
                                <img src="images/logo-dark.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- NAV Toggle Button -->

                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>


                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <a href="javascript:;" class="Call-btn site-text-primary">+41 43 542 65 91</a>
                        </div>
                    </div>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                        <ul class=" nav navbar-nav">
                            <li><a href="javascript:;">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>
                            <li><a href="about-1.html">About</a></li>
                            <li><a href="javascript:;">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services-1.html">Services one</a></li>
                                    <li><a href="services-2.html">Services Two</a></li>
                                    <li><a href="services-detail.html">Services Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                    <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                    <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-list-sidebar.html">Blog List</a></li>
                                    <li><a href="blog-post-right-sidebar.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-1.html">About us</a></li>
                                    <li><a href="our-prices.html">Pricing Plan</a></li>
                                    <li><a href="icon-font.html">Icon Font</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="Faq.html">FAQ</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-single.html">Team Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-1.html">Contact us</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">
        <div class="slider-outer">
            <!-- SLIDER START -->
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-901"
                            data-transition="fade"
                            data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="default"
                            data-thumb="images/main-slider/slider3/slide1.jpg"
                            data-rotate="0"
                            data-fstransition="fade"
                            data-fsmasterspeed="300"
                            data-fsslotamount="7"
                            data-saveperformance="off"
                            data-title="Slide Title"
                            data-param1="Additional Text"
                            data-param2=""
                            data-param3=""
                            data-param4=""
                            data-param5=""
                            data-param6=""
                            data-param7=""
                            data-param8=""
                            data-param9=""
                            data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider3/slide1.jpg"  alt=""  data-lazyload="images/main-slider/slider3/slide1.jpg" data-bgposition="center center"
                                 data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-901-layer-0"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <div class="tp-caption rev-btn  tp-resizeme slider-block"
                                 id="slide-901-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'

                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[200,200,200,150]"
                                 data-paddingright="[150,150,150,100]"
                                 data-paddingbottom="[200,200,200,150]"
                                 data-paddingleft="[150,150,150,100]"

                                 style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>

                            <!-- LAYER NR. 3 [ Black Box ] -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-901-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['200','200','200','220']"
                                 data-fontsize="['48','48','48','34']"
                                 data-lineheight="['56','56','56','50']"
                                 data-width="['700','700','96%','96%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                white-space: normal;
                                color:#111;
                                border-width:0px; font-family: 'Caveat', cursive;">Vivid Colors</div>



                            <!-- LAYER NR. 4 [ for title ] -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-901-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['260','260','260','270']"
                                 data-fontsize="['72','72','72','38']"
                                 data-lineheight="['66','66','48','38']"
                                 data-width="['700','700','96%','96%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[5,5,5,5]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                white-space: normal;
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary">The New Style</span>
                                </div>

                            </div>

                            <!-- LAYER NR. 5 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme"
                                 id="slide-901-layer-5"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['350','350','350','330']"
                                 data-fontsize="['20','20','20','16']"
                                 data-lineheight="['30','30','30','22']"
                                 data-width="['600','600','90%','90%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                font-weight: 500;
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;">You dream about sleek, healthy looking hair that looks picture perfect, ready to rock on any occasion?</span>
                            </div>

                            <!-- LAYER NR. 6 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide-901-layer-6"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"

                                 data-y="['top','top','top','top']" data-voffset="['450','450','450','440']"
                                 data-lineheight="['none','none','none','none']"
                                 data-width="['300','300','300','300']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index:13; text-transform:uppercase;">
                                <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                            </div>

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-901-layer-8"
                                 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-visibility="['on','on','off','off']"

                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>

                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-902"
                            data-transition="fade"
                            data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="default"
                            data-thumb="images/main-slider/slider3/slide2.jpg"
                            data-rotate="0"
                            data-fstransition="fade"
                            data-fsmasterspeed="300"
                            data-fsslotamount="7"
                            data-saveperformance="off"
                            data-title="Slide Title"
                            data-param1="Additional Text"
                            data-param2=""
                            data-param3=""
                            data-param4=""
                            data-param5=""
                            data-param6=""
                            data-param7=""
                            data-param8=""
                            data-param9=""
                            data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider3/slide2.jpg"  alt=""  data-lazyload="images/main-slider/slider3/slide2.jpg" data-bgposition="center center"
                                 data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-902-layer-0"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <div class="tp-caption rev-btn  tp-resizeme slider-block"
                                 id="slide-902-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'

                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[200,200,200,150]"
                                 data-paddingright="[150,150,150,100]"
                                 data-paddingbottom="[200,200,200,150]"
                                 data-paddingleft="[150,150,150,100]"

                                 style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>

                            <!-- LAYER NR. 3 [ Black Box ] -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-902-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['200','200','200','220']"
                                 data-fontsize="['48','48','48','34']"
                                 data-lineheight="['56','56','56','50']"
                                 data-width="['700','700','96%','96%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                white-space: normal;
                                color:#111;
                                border-width:0px; font-family: 'Caveat', cursive;">Vivid Colors</div>



                            <!-- LAYER NR. 4 [ for title ] -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-902-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['260','260','260','270']"
                                 data-fontsize="['72','72','72','38']"
                                 data-lineheight="['66','66','48','38']"
                                 data-width="['700','700','96%','96%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[5,5,5,5]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                white-space: normal;
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary">The New Style</span>
                                </div>

                            </div>

                            <!-- LAYER NR. 5 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme"
                                 id="slide-902-layer-5"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['350','350','350','330']"
                                 data-fontsize="['20','20','20','16']"
                                 data-lineheight="['30','30','30','22']"
                                 data-width="['600','600','90%','90%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                font-weight: 500;
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;">You dream about sleek, healthy looking hair that looks picture perfect, ready to rock on any occasion?</span>
                            </div>

                            <!-- LAYER NR. 6 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide-902-layer-6"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"

                                 data-y="['top','top','top','top']" data-voffset="['450','450','450','440']"
                                 data-lineheight="['none','none','none','none']"
                                 data-width="['300','300','300','300']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index:13; text-transform:uppercase;">
                                <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                            </div>

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-902-layer-8"
                                 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-visibility="['on','on','off','off']"

                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>

                        </li>

                        <!-- SLIDE 3 -->
                        <li data-index="rs-903"
                            data-transition="fade"
                            data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="default"
                            data-thumb="images/main-slider/slider3/slide3.jpg"
                            data-rotate="0"
                            data-fstransition="fade"
                            data-fsmasterspeed="300"
                            data-fsslotamount="7"
                            data-saveperformance="off"
                            data-title="Slide Title"
                            data-param1="Additional Text"
                            data-param2=""
                            data-param3=""
                            data-param4=""
                            data-param5=""
                            data-param6=""
                            data-param7=""
                            data-param8=""
                            data-param9=""
                            data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider3/slide3.jpg"  alt=""  data-lazyload="images/main-slider/slider3/slide3.jpg" data-bgposition="center center"
                                 data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-903-layer-0"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <div class="tp-caption rev-btn  tp-resizeme slider-block"
                                 id="slide-903-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"

                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'

                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[200,200,200,150]"
                                 data-paddingright="[150,150,150,100]"
                                 data-paddingbottom="[200,200,200,150]"
                                 data-paddingleft="[150,150,150,100]"

                                 style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>

                            <!-- LAYER NR. 3 [ Black Box ] -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-903-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['200','200','200','220']"
                                 data-fontsize="['48','48','48','34']"
                                 data-lineheight="['56','56','56','50']"
                                 data-width="['700','700','96%','96%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                white-space: normal;
                                color:#111;
                                border-width:0px; font-family: 'Caveat', cursive;">Vivid Colors</div>



                            <!-- LAYER NR. 4 [ for title ] -->
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-903-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['260','260','260','270']"
                                 data-fontsize="['72','72','72','38']"
                                 data-lineheight="['66','66','48','38']"
                                 data-width="['700','700','96%','96%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[5,5,5,5]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                white-space: normal;
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary">The New Style</span>
                                </div>

                            </div>

                            <!-- LAYER NR. 5 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme"
                                 id="slide-903-layer-5"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                                 data-y="['top','top','top','top']" data-voffset="['350','350','350','330']"
                                 data-fontsize="['20','20','20','16']"
                                 data-lineheight="['30','30','30','22']"
                                 data-width="['600','600','90%','90%']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 13;
                                font-weight: 500;
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;">You dream about sleek, healthy looking hair that looks picture perfect, ready to rock on any occasion?</span>
                            </div>

                            <!-- LAYER NR. 6 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                                 id="slide-903-layer-6"
                                 data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"

                                 data-y="['top','top','top','top']" data-voffset="['450','450','450','440']"
                                 data-lineheight="['none','none','none','none']"
                                 data-width="['300','300','300','300']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"

                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index:13; text-transform:uppercase;">
                                <a href="javascript:;" class="site-button site-btn-effect">Book Now</a>
                            </div>

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-903-layer-8"
                                 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-visibility="['on','on','off','off']"

                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>

                        </li>


                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>

            <div class="slider-social-outer social-mobile-hide">
                <div class="slider-social-info">
                    <ul class="list-unstyled text-black">
                        <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="slider-appointment-outer">
                <div class="slider-appointment-btn">
                    <a href="javascript:;" class="contact-slide-show"><span> Make An Appointment</span></a>
                </div>
            </div>

            <!-- Make An Appointment -->
            <div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image:url(images/background/add-bg.png)">
                <div class="contact-nav">
                    <a href="javascript:void(0)" class="contact_close">&times;</a>
                    <div class="contact-nav-form">
                        <div class="contact-nav-info bg-white p-a30">
                            <form class="cons-contact-form" method="post" action="form-handler2.php">
                                <div class="m-b30">
                                    <!-- TITLE START -->
                                    <h3 class="m-b30">Get In Touch</h3>
                                    <!-- TITLE END -->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="username" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="site-button-secondry site-btn-effect">Submit Now</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <div class="contact-nav-inner text-black">
                                <!-- TITLE START -->
                                <h3 class="m-b30">Contact Info</h3>
                                <!-- TITLE END -->
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Phone number</h5>
                                                <p>(456) 789 10 12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Email address</h5>
                                                <p>demo@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="wt-icon-box-wraper left icon-shake-outer">
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Address info</h5>
                                                <p>55/11 Land Street, Modern New Yourk City, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-social-outer social-mobile-show">
                            <div class="slider-social-info">
                                <ul class="list-unstyled text-black">
                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER END -->

        <!-- ABOUT SECTION START -->
        <div class="section-full welcome-section-outer">
            <div class="welcome-section-top shadow-lg bg-white p-tb80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="welcom-to-section">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator">
                                        <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                                        <div>Welcome to</div>
                                        <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                                    </div>
                                </div>
                                <h2>Our Salon is Most Popular, Clean and Recommended Hair Salon</h2>
                                <!-- TITLE END-->
                                <p>We have a passion for promoting healthy, balanced and beautiful living. Offering massage, Acupuncture, Laser Skincare, fitness classes and more, we emphasize preventive care, stress management, and personal growth. While you may find a visit with us to be a spa-like, relaxing and pampering experience, </p>

                                <div class="welcom-to-section-bottom d-flex justify-content-between">
                                    <div class="welcom-btn-position m-t20"><a href="javascript:;" class="site-button site-btn-effect">More About</a></div>
                                    <img src="images/sign.png" alt="">
                                </div>
                                <div class="hilite-large-title">
                                    <span>Welcome</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="img-colarge">
                                <div class="colarge-1"><img src="images/colarge/s1.jpg" alt=""></div>
                                <div class="colarge-2"><img src="images/colarge/s2.jpg" alt=""></div>
                                <div class="colarge-3 slide-right"><img src="images/colarge/s3.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="welcome-section-bottom overlay-wraper bg-cover bg-no-repeat " style="background-image:url(images/background/bg-2.jpg);">
                <div class="overlay-main bg-orange-light opacity-09"></div>
                <div class="container welcome-section-bottom-space p-t80 p-b50">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="video-section-outer mfp-gallery">
                                <!--Fade slider-->
                                <div class="owl-carousel home-video-slider owl-btn-top-left light-next-prev m-b30">

                                    <div class="item">
                                        <div class="video-section">
                                            <img src="images/gallery/pic1.jpg" alt="">
                                            <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                <i class="icon fa fa-play"></i>
                                                <span class="ripple"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="video-section">
                                            <img src="images/gallery/pic2.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="video-section">
                                            <img src="images/gallery/pic1.jpg" alt="">
                                            <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                <i class="icon fa fa-play"></i>
                                                <span class="ripple"></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!--fade slider END-->
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="about-section-outer">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator">
                                        <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                                        <div>Welcome to</div>
                                        <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                                    </div>
                                </div>
                                <h2>Our Video Presentation</h2>
                                <!-- TITLE END-->

                                <p>Professional stylist tell me how beautiful it is to hide or emphasize your image. the beauty lies in the details of trends, the choice of fabrics and colors. guarantee
                                    you a unique result. We will provide you with the highest quality of our service</p>

                                <div class="counter-outer p-t10">

                                    <div class="row justify-content-center">

                                        <div class="col-lg-4 col-md-4 m-b30 ">
                                            <div class="wt-icon-box-wraper center bg-no-repeat bg-top-center" style="background-image:url(images/background/count-bg.png);">
                                                <h2 class="counter site-text-secondry">23</h2>
                                                <span class="site-text-secondry title-style-2">Awards</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 m-b30">
                                            <div class="wt-icon-box-wraper center bg-no-repeat bg-top-center" style="background-image:url(images/background/count-bg.png);">
                                                <h2 class="counter site-text-secondry">14</h2>
                                                <span class="site-text-secondry title-style-2">Years</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 m-b30">
                                            <div class="wt-icon-box-wraper center bg-no-repeat bg-top-center" style="background-image:url(images/background/count-bg.png);">
                                                <h2 class="counter site-text-secondry" >26</h2>
                                                <span class="site-text-secondry title-style-2">Experts</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- ABOUT SECTION  SECTION END -->

        <!-- SERVICES SECTION START -->
        <div class="section-full p-t80 p-b70 bg-white bg-no-repeat bg-top-right" style="background-image:url(images/background/bubble-bg.png)">

            <div class="container">
                <!-- TITLE START-->
                <div class="center wt-small-separator-outer section-head">
                    <div class="wt-small-separator">
                        <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                        <div>Save 20% On Haircuts</div>
                        <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                    </div>
                    <h2 data-title="Services">Our Services</h2>
                </div>

                <!-- TITLE END-->
            </div>

            <div class="section-content container-fluid">

                <div class="owl-carousel services-slider owl-btn-bottom-center light-next-prev">

                    <div class="item">
                        <div class="wt-box service-box-1">
                            <div class="service-box-media"><img src="images/services/pic1.jpg" alt=""></div>
                            <div class="service-box-info p-t20 text-center">
                                <h2 class="text-black">01</h2>
                                <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Change Coloring</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="wt-box service-box-1">
                            <div class="service-box-media"><img src="images/services/pic2.jpg" alt=""></div>
                            <div class="service-box-info p-t20 text-center">
                                <h2 class="text-black">02</h2>
                                <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">HairCuts</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="wt-box service-box-1">
                            <div class="service-box-media"><img src="images/services/pic3.jpg" alt=""></div>
                            <div class="service-box-info p-t20 text-center">
                                <h2 class="text-black">03</h2>
                                <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Perfect Hairstyles</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="wt-box service-box-1">
                            <div class="service-box-media"><img src="images/services/pic4.jpg" alt=""></div>
                            <div class="service-box-info p-t20 text-center">
                                <h2 class="text-black">04</h2>
                                <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Makeup</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="wt-box service-box-1">
                            <div class="service-box-media"><img src="images/services/pic5.jpg" alt=""></div>
                            <div class="service-box-info p-t20 text-center">
                                <h2 class="text-black">05</h2>
                                <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">Nail Art</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="wt-box service-box-1">
                            <div class="service-box-media"><img src="images/services/pic6.jpg" alt=""></div>
                            <div class="service-box-info p-t20 text-center">
                                <h2 class="text-black">06</h2>
                                <h3 class="m-b0"><a href="javascript:;" class="site-text-primary">HairCuts</a></h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- SERVICES SECTION END -->

        <!-- PRICING SECTION START -->
        <div class="section-full p-t80 p-b50 bg-orange-light bg-brush-img">
            <div class="container">
                <div class="section-content">

                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                            <div>Cutting and styling</div>
                            <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                        </div>
                        <h2 data-title="Pricing">Our Pricing</h2>
                    </div>
                    <!-- TITLE END-->

                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-12 col-sm-12 m-b30">

                            <div class="pricing-list-block bg-white p-a20">
                                <div class="pricing-list-img p-b10"><img src="images/sep-leaf-left.png" alt=""></div>
                                <ul>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Ombré Color </h3>
                                            <p>We have a passion for promoting healthy</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">35</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Hair cut with Blow dry</h3>
                                            <p>Step up your healthy hair care routine with tips</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">25</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Blow Dry & Curl</h3>
                                            <p>Take a peek at a little sample of what we are best.</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">15</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Shampoo & Set</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">40</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Color & highlights</h3>
                                            <p>Cutting and styling with cruelty free luxury brands</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">45</span></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 m-b30">
                            <div class="pricing-list-block bg-white p-a20">
                                <div class="pricing-list-img p-b10"><img src="images/sep-leaf-left.png" alt=""></div>
                                <ul>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Shampoo & Set</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">40</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Color & highlights</h3>
                                            <p>Cutting and styling with cruelty free luxury brands</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">45</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Ombré Color </h3>
                                            <p>We have a passion for promoting healthy</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">35</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Hair cut with Blow dry</h3>
                                            <p>Step up your healthy hair care routine with tips</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">25</span></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="price-list-info">
                                            <h3>Blow Dry & Curl</h3>
                                            <p>Take a peek at a little sample of what we are best.</p>
                                        </div>
                                        <div class="price-list-amount">
                                            <h3 class="text-black"><span class="amount-sign">$</span><span class="amount-price">15</span></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- PRICING SECTION END -->

        <!-- DISCOUNT SECTION START -->
        <div class="section-full  p-tb80 bg-white discount-section-outer">

            <div class="container">
                <div class="discount-add shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-7 col-md-12 bg-cover" style="background-image:url(images/background/add-bg.png);">
                            <div class="discount-add-info">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator">
                                        <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                                        <div>Make an Appointment!</div>
                                        <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                                    </div>
                                </div>
                                <h2>& get <span class="text-black"> 25%</span> discount!</h2>
                                <!-- TITLE END-->
                                <p>Glowing, dewy skin is our thing.</p>
                                <a href="javascript:;" class="site-button site-btn-effect">More Detail</a>
                                <div class="hilite-large-title">
                                    <span>Offer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-5 col-md-12 bg-cover discount-add-pic  bg-bottom-center" style="background-image:url(images/add-pic.jpg)">

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- DISCOUNT WE LOVE SECTION START -->

        <!-- CLIENT LOGO SECTION START -->
        <div class="section-full bg-orange-light">
            <div class="container">
                <div class="section-content">

                    <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                    <div class="section-content">
                        <div class="section-content p-tb10 owl-btn-vertical-center">
                            <div class="owl-carousel home-client-carousel-2 m-b50">

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CLIENT LOGO  SECTION End -->

        <!-- OUR TEAM START -->
        <div class="section-full p-t80 p-b50 bg-white">
            <div class="container">
                <div class="section-content">

                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                            <div>Professionals</div>
                            <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                        </div>
                        <h2 data-title="Experts">Our Team</h2>
                    </div>

                    <!-- TITLE END-->

                    <div class="section-content">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">

                                    <div class="wt-media">
                                        <img src="images/team/pic1.jpg" alt="">
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);">Facebook</a></li>
                                                <li><a href="javascript:void(0);">Twitter</a></li>
                                                <li><a href="javascript:void(0);">Instagram</a></li>
                                            </ul>
                                            <div class="team-book-now text-right"><a href="Javscript:;" class="site-button-secondry">Book Now</a></div>
                                        </div>
                                    </div>

                                    <div class="wt-info bg-white p-a30 shadow-lg">
                                        <div class="team-detail  text-center">
                                            <h3 class="m-t0">Bethany Bryan</h3>
                                            <span class="title-style-2 team-position">Makeup</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">

                                    <div class="wt-media">
                                        <img src="images/team/pic2.jpg" alt="">
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);">Facebook</a></li>
                                                <li><a href="javascript:void(0);">Twitter</a></li>
                                                <li><a href="javascript:void(0);">Instagram</a></li>
                                            </ul>
                                            <div class="team-book-now text-right"><a href="Javscript:;" class="site-button-secondry">Book Now</a></div>
                                        </div>
                                    </div>

                                    <div class="wt-info bg-white p-a30 shadow-lg">
                                        <div class="team-detail  text-center">
                                            <h3 class="m-t0">Carolina Miller</h3>
                                            <span class="title-style-2 team-position">Nail Artist</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">

                                    <div class="wt-media">
                                        <img src="images/team/pic3.jpg" alt="">
                                        <div class="team-social-center">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);">Facebook</a></li>
                                                <li><a href="javascript:void(0);">Twitter</a></li>
                                                <li><a href="javascript:void(0);">Instagram</a></li>
                                            </ul>
                                            <div class="team-book-now text-right"><a href="Javscript:;" class="site-button-secondry">Book Now</a></div>
                                        </div>
                                    </div>

                                    <div class="wt-info bg-white p-a30 shadow-lg">
                                        <div class="team-detail  text-center">
                                            <h3 class="m-t0">Amber Lane</h3>
                                            <span class="title-style-2 team-position">Makeup</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- OUR TEAM SECTION END -->

        <!-- CONTACT US START -->
        <div class="section-full p-t80 p-b50 bg-orange-light">
            <div class="container">
                <div class="section-content">


                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="home-contact-section m-b30">
                                    <form class="cons-contact-form" method="post" action="form-handler2.php">

                                        <!-- TITLE START-->
                                        <div class="left wt-small-separator-outer">
                                            <div class="wt-small-separator">
                                                <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                                                <div>Have Questions?</div>
                                                <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                                            </div>
                                        </div>
                                        <h2>Feel free to get in touch! contact now</h2>
                                        <!-- TITLE END-->

                                        <div class="row m-b30">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="site-button site-btn-effect">Send us a message</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="contact-right-section">
                                    <div class="wt-media">
                                        <img src="images/contact-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- CONTACT US SECTION END -->

        <!-- TESTIMONIAL SECTION START -->
        <div class="section-full  p-t80 p-b80 bg-white testimonial-2-outer">
            <div class="container">
                <!-- TITLE START-->
                <div class="center wt-small-separator-outer section-head">
                    <div class="wt-small-separator">
                        <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                        <div>What our clients say</div>
                        <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                    </div>
                    <h2 data-title="Clients">Testimonials</h2>
                </div>

                <!-- TITLE END-->
                <div class="section-content testimonial-home bg-cover" style="background-image:url(images/background/add-bg.png)">
                    <div id="testimonial-2-content" class="owl-carousel  dark-next-prev">
                        <div class="item">
                            <div class="testimonial-2 corner-radius">
                                <div class="testimonial-content">
                                    <div class="testimonial-text">
                                        <p>This is not just another nail salon! These ladies are super talented! My nails have never looked/felt more amazing!! The environment here is so happy and
                                            cheery! Keep up the great work!</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <span class="testimonial-name  title-style-2">Rustin Duza</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-2 corner-radius">

                                <div class="testimonial-content">
                                    <div class="testimonial-text">
                                        <p>This is not just another nail salon! These ladies are super talented! My nails have never looked/felt more amazing!! The environment here is so happy and
                                            cheery! Keep up the great work!</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <span class="testimonial-name title-style-2">Carolina Miller</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-2 corner-radius">

                                <div class="testimonial-content">
                                    <div class="testimonial-text">
                                        <p>This is not just another nail salon! These ladies are super talented! My nails have never looked/felt more amazing!! The environment here is so happy and
                                            cheery! Keep up the great work!</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <span class="testimonial-name  title-style-2">Francis Burton</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="testimonial-2-pic" class="owl-carousel owl-theme testimonial-1-thumb">
                        <div class="item">
                            <div class="wt-media">
                                <img src="images/testimonials/pic1.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="wt-media">
                                <img src="images/testimonials/pic2.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="wt-media">
                                <img src="images/testimonials/pic3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- TESTIMONIAL SECTION END -->

        <!-- OUR BLOG START -->
        <div class="section-full  p-t80 p-b40 bg-white blog-post-outer-3 ">
            <div class="container">

                <!-- TITLE START-->
                <div class="center wt-small-separator-outer section-head">
                    <div class="wt-small-separator">
                        <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                        <div>Update The New Trend</div>
                        <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                    </div>
                    <h2 data-title="Blog">Latest Articles</h2>
                </div>
                <!-- TITLE END-->

                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--Block one-->
                            <div class="blog-post date-style-2">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:;"><img src="images/blog/default/thum1.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>20 Jan 2019</span> </li>
                                            <li class="post-user"><a href="javascript:void(0);"> By <span class="site-text-primary"> Sophia Varner</span></a> </li>
                                            <li class="post-comment"><a href="javascript:void(0);">Comment <span class="site-text-primary"> 24</span></a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:;" class="site-text-primary">How to keep your makeup in place all day</a></h3>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="javascript:;" class="site-button-link black">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--Block two-->
                            <div class="blog-post date-style-2">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:;"><img src="images/blog/default/thum2.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>25 Jan 2019</span> </li>
                                            <li class="post-user"><a href="javascript:void(0);"> By <span class="site-text-primary"> Sophia Varner</span></a> </li>
                                            <li class="post-comment"><a href="javascript:void(0);">Comment <span class="site-text-primary"> 24</span></a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:;" class="site-text-primary">Everything’s Coming Up Rose Gold</a></h3>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="javascript:;" class="site-button-link black">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--Block three-->
                            <div class="blog-post date-style-2">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:;"><img src="images/blog/default/thum3.jpg" alt=""></a>
                                </div>
                                <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>31 Jan 2019</span> </li>
                                            <li class="post-user"><a href="javascript:void(0);"> By <span class="site-text-primary"> Sophia Varner</span></a> </li>
                                            <li class="post-comment"><a href="javascript:void(0);">Comment <span class="site-text-primary"> 24</span></a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:;" class="site-text-primary">How to return your hair to normal after the Winter</a></h3>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="javascript:;" class="site-button-link black">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- OUR BLOG END -->

        <!-- INSTAGRAM FOLLOW START -->
        <div class="section-full p-t80 p-b50 bg-orange-light">
            <div class="container-fluid">
                <div class="section-content">

                    <div class="section-content">
                        <div class="row">

                            <div class="col-xl-4 col-lg-5 col-md-12 instagram-follows-section bg-white">
                                <div class="p-a30">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator">
                                            <div  class="sep-leaf-left"><img src="images/sep-leaf-left.png" alt=""></div>
                                            <div>Follow Us On</div>
                                            <div  class="sep-leaf-right"><img src="images/sep-leaf-right.png"  alt=""></div>
                                        </div>
                                    </div>
                                    <h2>Instagram</h2>
                                    <!-- TITLE END-->
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7 col-md-12 instagram-pics-slide-outer">
                                <div class="instagram-pics-slide">
                                    <div class="owl-carousel instagram-slider owl-btn-bottom-left light-next-prev">

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/1.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Haircut</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/2.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Hair Color</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/3.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Makeup</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/4.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Hair Style</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/5.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Makeup</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/6.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Makeup</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/7.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Hair Wash</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-box instagram-box-1">
                                                <div class="instagram-box-media"><img src="images/instagram/8.jpg" alt=""></div>
                                                <div class="instagram-box-info  text-center">
                                                    <a href="javascript:;" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                        <span class="title-style-2">Makeup</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- INSTAGRAM FOLLOW SECTION END -->


    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="site-footer footer-large footer-dark text-white">

        <!-- FOOTER BLOCKES START -->
        <div class="footer-top  dot2-left-top-img">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="widget widget_about">
                            <div class="logo-footer clearfix p-b15">
                                <a href="index.html"><img src="images/logo-light.png" alt="" ></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod temporin cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.eiusmod tempo.</p>

                            <div class="newsletter-input">
                                <div class="input-group">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Enter your email">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text nl-search-btn text-black site-bg-secondry">Subscribe</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget_services">
                            <h4 class="widget-title">Useful links</h4>
                            <ul>
                                <li><a href="javascript:;">About</a><a href="javascript:;">Portfolio</a></li>
                                <li><a href="javascript:;">Pricing Plan </a><a href="javascript:;">Contact Us</a></li>
                                <li><a href="javascript:;">Career </a><a href="javascript:;">Policy</a></li>
                                <li><a href="javascript:;">Our Team </a><a href="javascript:;">FAQ's</a></li>
                                <li><a href="javascript:;">Services </a><a href="javascript:;">About</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget recent-posts-entry">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="widget_address">
                                <li><i class="fa fa-map-marker"></i>San Francisco City Hall, San Francisco, CA</li>
                                <li><i class="fa fa-envelope"></i>contact123@gmail.com</li>
                                <li> <i class="fa fa-phone"></i>(654) 321-7654 </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->

        <div class="footer-bottom">
            <div class="container">
                <div class="wt-footer-bot-left d-flex justify-content-between">
                    <span class="copyrights-text">Copyright © 2019 Thewebmax</span>
                    <ul class="copyrights-nav">
                        <li><a href="javascript:void(0);">Terms  &amp; Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="contact-1.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>



</div>

<!-- LOADING AREA START ===== -->
<!--div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader">
            <div class="cssload-dots">
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
            </div>
        </div>
    </div>
</div-->
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
<script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('/assets/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script src="{{ asset('/assets/s/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="js/rev-script-2.js"></script>

</body>

</html>


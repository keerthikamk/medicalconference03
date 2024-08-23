<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>{{ $page->name .' - '. $page->title }}</title>

<meta name="title" content="{{ $page->title }}" />
<meta name="description" content="{{ $page->description }}" />
<meta name="keywords" content="{{ $page->keywords }}">

<!-- Responsive -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<!-- Stylesheets -->

<link href="/css/bootstrap.min.css" rel="stylesheet">

<link href="/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->

<link href="/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->

<link href="/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="/css/style.css" rel="stylesheet">

<link href="/css/responsive.css" rel="stylesheet">



<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

<link rel="icon" href="/images/favicon.png" type="image/x-icon">

<!--Color Switcher Mockup-->

<link href="/css/color-switcher-design.css" rel="stylesheet">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9VVELPR6XQ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'G-9VVELPR6XQ');
</script>

</head>



<body>



<div class="page-wrapper">



    <!-- Preloader -->

    <div class="preloader"></div>



    <!-- Main Header-->

    <header class="main-header header-style-one">



        <!-- Header top -->

        <div class="header-top">

            <div class="auto-container">

                <div class="inner-container">

                    <div class="top-left">

                        <!-- <ul class="social-icon-one">

                            <li><a href="/#"><span class="fab fa-dribbble"></span></a></li>

                            <li><a href="/#"><span class="fab fa-facebook-f"></span></a></li>

                            <li><a href="/#"><span class="fab fa-twitter"></span></a></li>

                            <li><a href="/#"><span class="fab fa-pinterest-p"></span></a></li>

                        </ul> -->

                    </div>

                    <div class="top-right">

                        <ul class="contact-list-one">

                            <li><i class="icon flaticon-phone"></i> <a href="tel:+18167548064">+1 816 754 8064</a> <strong>Call</strong></li>

                            <!-- <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li> -->

                            <li><i class="flaticon-email-1"></i> <a href="mailto:advancedsurgerycongress@bluggleconferences.online">advancedsurgerycongress@bluggleconferences.online</a> <strong>Mail to us</strong></li>

                        </ul>



                        <button class="nav-toggler"><i class="flaticon flaticon-menu-2"></i></button>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Header Top -->

        

        <!-- Header Lower -->

        <div class="header-lower">

            <div class="auto-container">    

                <!-- Main box -->

                <div class="main-box">

                    <div class="logo-box">

                        <div class="logo">
                            <a href="/"><img src="/images/bb1-logo.png" alt="Advanced Surgery" style="height:88px;"></a>
                        </div>

                    </div>



                    <div class="nav-outer">



                        <!-- Main Menu -->

                        <nav class="main-menu navbar-expand-md">

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="/">Home</a></li>
                                    <li class="{{ request()->is('about') ? 'current' : '' }}"><a href="about">About</a></li>
                                    <li class="{{ request()->is('organizing') ? 'current' : '' }}"><a href="organizing">Organizing Committee</a></li>
                                    <li class="{{ request()->is('scientific') ? 'current' : '' }}"><a href="scientific">Scientific Sessions</a></li>
                                    <li class="{{ request()->is('abstract') ? 'current' : '' }}"><a href="abstract">Abstract Submission</a></li>
                                    <li class="dropdown"><a href="/#">Technical Program</a>
                                        <ul>
                                            <li><a href="speaker">Speaker Guidlines & FAQ's</a></li>
                                            <li><a href="sponsorship">Sponsorship Package</a></li>
                                            <li><a href="terms">Terms & Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('contact-us') ? 'current' : '' }}"><a href="contact-us">Contact</a></li>

                                </ul>

                            </div>

                        </nav>

                        

                        <!-- Main Menu End-->

                        <div class="outer-box clearfix">

                            <!-- Search Btn -->

                            <!-- <div class="search-box-btn search-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->

                            <!-- Quote Btn -->

                            <div class="btn-box">

                                <a href="/register" class="theme-btn btn-style-one"><span class="btn-title"><i class="flaticon-chair"></i> Register Now</span></a>

                            </div>

                            

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Sticky Header  -->

        <div class="sticky-header">

            <div class="auto-container">            



                <div class="main-box">

                    <div class="logo-box">

                        <div class="logo"><a href="/"><img src="/images/bb1-logo.png" alt="" title=""></a></div>

                        <div class="upper-right">

                            <div class="search-box">

                                <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>

                            </div>

                            <a href="/#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>

                        </div>

                    </div>

                    

                    <nav class="main-menu navbar-expand-md">

                        <!--Keep This Empty / Menu will come through Javascript-->

                    </nav>

                </div>

            </div>

        </div><!-- End Sticky Menu -->



        <!-- Mobile Header -->

        <div class="mobile-header">

            <div class="logo"><a href="/"><img src="/images/bb1-logo.png" alt="" title=""></a></div>



            <!--Nav Box-->

            <div class="nav-outer clearfix">

                <div class="outer-box">

                    <!-- Search Btn -->

                    <div class="search-box">

                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>

                    </div>



                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>

                </div>

            </div>

        </div>



        <!-- Mobile Menu  -->

        <div class="mobile-menu">

            <div class="menu-backdrop"></div>

            

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

            <nav class="menu-box">

                <div class="upper-box">

                    <div class="nav-logo"><a href="/"><img src="/images/bb1-logo.png" alt="" title=""></a></div>

                    <div class="close-btn"><i class="icon flaticon-close"></i></div>

                </div>



                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>



                <ul class="contact-list-one">

                    <li><i class="icon flaticon-phone"></i> <a href="tel:+18167548064">+1 816 754 8064</a> <strong>Call</strong></li>

                    <!-- <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li> -->

                    <li><i class="flaticon-email-1"></i> <a href="mailto:advancedsurgerycongress@bluggleconferences.online">advancedsurgerycongress@bluggleconferences.online</a> <strong>Mail to us</strong></li>

                </ul>



                <ul class="social-links">

                    <li><a href="/#"><span class="fab fa-facebook-f"></span></a></li>

                    <li><a href="/#"><span class="fab fa-pinterest"></span></a></li>

                    <li><a href="/#"><span class="fab fa-twitter"></span></a></li>

                    <li><a href="/#"><span class="fab fa-dribbble"></span></a></li>

                </ul>

            </nav>

        </div><!-- End Mobile Menu -->



        <!-- Header Search -->

        <div class="search-popup">

            <button class="close-search"><i class="flaticon-close"></i></button>

            <form method="post" action="#">

                <div class="form-group">

                    <input type="search" name="search-field" value="" placeholder="Search" required="">

                    <button type="submit"><i class="fa fa-search"></i></button>

                </div>

            </form>

        </div>

        <!-- End Header Search -->



    </header>

    <!--End Main Header -->



    <!-- Hidden bar back drop -->

    <div class="form-back-drop"></div>



    <!-- Hidden Bar -->

    <section class="hidden-bar">

        <div class="inner-box">

            <div class="title-box">

                <h2>Contact Us</h2>

                <div class="cross-icon"><span class="fa fa-times"></span></div>

            </div>

            

            <!--Appointment Form-->

            <div class="form-style-one">

                <form action="/#" method="post">

                    <div class="form-group">

                        <input type="text" name="username" class="username" placeholder="Your Name *">

                    </div>

                    <div class="form-group">

                        <input type="email" name="email" class="email" placeholder="Your Email *">

                    </div>

                    <div class="form-group">

                        <input type="text" name="phone" class="phone" value="" placeholder="Your Phone*" required>

                    </div>

                    <div class="form-group">

                        <textarea name="contact_message" class="message" placeholder="Text Message"></textarea>

                    </div>

                    <div class="form-group">

                        <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form"><span class="btn-title">Submit Now</span> </button>

                    </div>

                </form>

            </div>

            



            <ul class="contact-list-one">

                <li><i class="icon flaticon-phone"></i> <a href="tel:+18167548064">+1 816 754 8064</a> <strong>Call</strong></li>

                <!-- <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li> -->

                <li><i class="flaticon-email-1"></i> <a href="mailto:advancedsurgerycongress@bluggleconferences.online">advancedsurgerycongress<br>@bluggleconferences.online</a> <strong>Mail to us</strong></li>

            </ul>

        </div>

    </section>

    <!--End Hidden Bar -->

    @yield('content')

    <!-- Call to Action Two -->
    <section class="call-to-action-two" style="background-image: url(/images/background/5.png);">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 offset-lg-6">
                    <div class="content-box wow fadeInUp">
                        <!-- <span class="sub-title">GET EXPERIENCE</span> -->
                        <h2>Get Experience</h2>
                        <span class="text">Immerse yourself in the latest advancements in the medical and surgical fields. Renowned experts from around the world present their research and findings, providing a wealth of up-to-date information on groundbreaking techniques, procedures, and technologies.</span>
                        <!-- <a href="/register" class="theme-btn btn-style-two"><span class="btn-title">Buy Ticket</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Two -->

    <!--Clients Section-->

    <section class="clients-section alternate2">

        <div class="auto-container">

            <div class="row">

                <!-- Title Column -->

                <div class="title-column col-xl-3 col-lg-4 col-md-12">

                    <div class="sec-title">

                        <span class="sub-title">Clients</span>

                        <h2>Media Partners</h2>

                        <div class="divider"></div>

                        <!-- <div class="text">We have dedicated tracks for every industry Whether you want to hire tech’s top talent.</div>  -->

                        <a href="/contact-us" class="theme-btn btn-style-one mt-4"><span class="btn-title">Contact Us</span></a>

                    </div>

                </div>



                <!-- Title Column -->

                <div class="title-column col-xl-9 col-lg-8 col-md-12">

                    <div class="sponsors-outer">

                        <div class="row">

                            @foreach($myList[1] as $item)
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">

                                <figure class="image-box">
                                    @if($item->link)
                                    <a href="{{ $item->link }}" target="_blank"><img src="{{ $item->img }}"></a>
                                    @else
                                    <img src="{{ $item->img }}">
                                    @endif
                                </figure>

                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--End Clients Section-->``
    <!-- Main Footer -->
    <footer class="main-footer style-three" style="margin-top:0;padding-top:0">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="/"><img src="/images/bb1-logo.png" alt="" width="250px" /></a>
                                    </div>
                                    <div class="text">
                                        <!-- <p>We have very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.</p> -->
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget lnks-widget">
                                    <h2 class="widget-title">Useful Links</h2>
                                    <ul class="user-links">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/contact-us">Contact Us</a></li>
                                        <li><a href="/terms">Terms & Conditions</a></li>
                                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                                        <li><a href="/refund-policy">Refund Policy</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-12 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Get in Touch</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list-three">
                                            <li>
                                                <i class="icon flaticon-email-1"></i>
                                                <div class="text">
                                                    <strong>Mail to us</strong>
                                                    <a href="mailto:advancedsurgerycongress@bluggleconferences.online">advancedsurgerycongress@bluggleconferences.online</a><br>
                                                </div>
                                            </li>

                                            <li>
                                                <i class="icon flaticon-phone"></i>
                                                <div class="text">
                                                    <strong>Call</strong>
                                                    <a href="tel:+18167548064">+1 816 754 8064</a>
                                                </div>
                                            </li>

                                            <li>
                                                <i class="icon flaticon-location"></i>
                                                <div class="text">
                                                    <strong>Mailing Address</strong>
                                                    Asia-Pacific: Door No F6, 1st floor, Bhagya Complex, Priyadharshini Nagar Main Rd, Sithalapakkam, <br>Chennai, Tamil Nadu 600126
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- <div class="footer-widget mt-3">
                                    <div class="widget-content">

                                        <ul class="social-icon-two">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>       
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright-text">Copyright © {{ date('Y') }} All Rights Reserved by <a href="https://blugglegroups.com/" target="_blank">Bluggle</a></div>
        </div>
    </footer>
    <!--End Main Footer -->

</div>

<!-- End Page Wrapper -->



<!--Scroll to top-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="js/jquery.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-ui.js"></script>

<script src="js/jquery.fancybox.js"></script>

<script src="js/jquery.countdown.js"></script>

<script src="js/appear.js"></script>

<script src="js/owl.js"></script>

<script src="js/wow.js"></script>

<script src="js/script.js"></script>


<!--Revolution Slider-->

<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="js/main-slider-script.js"></script>

<!--Revolution Slider-->


</body>

</html>
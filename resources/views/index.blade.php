<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- ========================= preloader start ========================= -->
            <div class="preloader">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('img/logo/logo.svg') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#location">Location</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                                <div class="header-btn">
                                    <a href="javascript:void(0)" class="theme-btn">Get Started</a>
                                </div>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

        </header>
        <!-- ========================= header end ========================= -->

        <!-- ========================= carousel-section end ========================= -->
        <section id="home" class="carousel-section-wrapper">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('assets/img/carousel/1.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Bootstrap 5 One Page Template</h2>
                                            <p class="text-white">We Crafted an awesome design library that is
                                                robust and intuitive to use. No matter you're building a business
                                                presentation
                                                websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href="javascript:void(0)" class="theme-btn border-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-section carousel-item clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('assets/img/carousel/2.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Get Started with Mighty Bootstrap 5</h2>
                                            <p class="text-white">Create Stunning Websites in Easier
                                                and Effecient Way! No matter you're building a business
                                                presentation websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href="javascript:void(0)" class="theme-btn border-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control carousel-control-prev" href="#carouselExampleCaptions" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="lni lni-arrow-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control carousel-control-next" href="#carouselExampleCaptions" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="lni lni-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- ========================= carousel-section end ========================= -->

        <!-- ========================= feature-section start ========================= -->
        <section id="features" class="feature-section pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Features</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Why Choose?</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Bootstrap 5</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-brush-alt"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Awesome Design</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-pointer-up"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>One-page Template</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= feature-section end ========================= -->

        <!--========================= about-section start========================= -->
        <section id="about" class="pt-100">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="{{ asset('img/about/about-img.png') }}" alt="">

                                    <div class="about-experience">
                                        <h3>5 Year Of Working Experience</h3>
                                        <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">About Us</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Built-With Boostrap 5, a New Experiance</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">We Crafted an awesome design library
                                        that is robust and intuitive to use. No matter you're building a business
                                        presentation websit or a complex web application our design</p>
                                    <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">10</span>
                                            <h4>Happy Client</h4>
                                            <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                        </div>
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">5</span>
                                            <h4>Project Done</h4>
                                            <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================= about-section end========================= -->

        <!-- ========================= service-section start ========================= -->
        <section id="services" class="service-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Best Services</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-3 col-md-6">
                            <div class="service-box box-style">
                                <div class="service-icon box-icon-style">
                                    <i class="lni lni-leaf"></i>
                                </div>
                                <div class="box-content-style service-content">
                                    <h4>Clean & Refreshing</h4>
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                        labor dolore magna.</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= location-section start ========================= -->
        {{-- <section id="location" class="location-section pt-130">
<section id="team" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('{{ asset('img/bg/cta-bg.jpg') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section-title mb-60">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Hey</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">You are using free lite version of Fancy</h2>
                            <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of template to get all elements, section and permission to remove credits.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5">
                        <div class="contact-btn text-left text-lg-right">
                            <a href="https://rebrand.ly/fancy-ud" rel="nofollow" class="theme-btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section> --}}
        <!-- ========================= portfolio-section end ========================= -->

        <!-- ========================= process-section start ========================= -->
        <section id="location" class="process-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Process</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Working Process</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= process-section end ========================= -->

        <!-- ========================= team-section start ========================= -->
<section id="team" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('{{ asset('img/bg/cta-bg.jpg') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section-title mb-60">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Hey</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">You are using free lite version of Fancy</h2>
                            <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of template to get all elements, section and permission to remove credits.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5">
                        <div class="contact-btn text-left text-lg-right">
                            <a href="https://rebrand.ly/fancy-ud" rel="nofollow" class="theme-btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= team-section end ========================= -->

        <!-- ========================= client-logo-section start ========================= -->
        <section class="client-logo-section pt-100 pb-100">
            <div class="container">
                <div class="client-logo-wrapper">
                    <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                        <div class="client-logo">
                            <img src="assets/img/client-logo/uideck-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/pagebulb-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/graygrids-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('assets/img/bg/cta-bg.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section-title mb-60">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Hey</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">Do you have any project in mind?</h2>
                            <p class="text-white wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5">
                        <div class="contact-btn text-left text-lg-right">
                            <a href="#location" class="theme-btn">View Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section class="contact-section pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact-item-wrapper">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Contact</h4>
                                            <p>0984537278623</p>
                                            <p>yourmail@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-map-marker"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Address</h4>
                                            <p>175 5th Ave, New York, NY 10010 </p>
                                            <p>United States</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-alarm-clock"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Shedule</h4>
                                            <p>24 Hours / 7 Days Open </p>
                                            <p>Office time: 10 AM - 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-form-wrapper">
                            <div class="row">
                                <div class="col-xl-10 col-lg-8 mx-auto">
                                    <div class="section-title text-center mb-50">
                                        <span class="wow fadeInDown" data-wow-delay=".2s">Get in Touch</span>
                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ready to Get Started</h2>
                                        <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                            dignissimos ducimus quiblanditiis praesentium</p>
                                    </div>
                                </div>
                            </div>
                            <form action="assets/php/mail.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" id="email" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Type Message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button text-center">
                                            <button type="submit" class="theme-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class="subscribe-section pt-70 pb-70 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-30">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Subscribe</span>
                            <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <form action="#" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                            <input type="text" name="subs-email" id="subs-email" placeholder="Your Email">
                            <button type="submit"><i class="lni lni-telegram-original"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="assets/img/logo/logo.svg" alt="logo"></a>
                            <p class="mb-30 footer-desc">We Crafted an awesome desig library that is robust and intuitive to use. No matter you're building a business presentation websit.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Service</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4>Service</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Branding</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Web Design</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Graphics Design</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4>Contact</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p>+00983467367234</p>
                                </li>
                                <li>
                                    <p>yourmail@gmail.com</p>
                                </li>
                                <li>
                                    <p>Jackson Heights, NY</br>
                                    USA</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                             <div class="footer-social-links">
                                <ul class="d-flex">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="wow fadeInUp" data-wow-delay=".3s">Template by <a
                                    href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->


        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>

		<!-- ========================= JS here ========================= -->
		<script src="{{ asset('js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="{{ asset('js/count-up.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>

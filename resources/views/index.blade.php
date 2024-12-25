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
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        @livewireStyles
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
                            <a class="navbar-brand" href="#">
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
                                    <li class="nav-item">
                                        @auth
                                            <button class="nav-link px-0" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                                <img class="p-0 mt-2 d-none d-lg-block" style="height: 25px;" src="{{ asset('bootstrap/bootstrap-icons-1.11.3/person-check.svg') }}" alt="">
                                                <p class="btn btn-link text-dark p-0 d-lg-none">Logout</p>
                                            </button>
                                        @endauth

                                        @guest
                                            <button class="nav-link px-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                                                <img class="p-0 mt-2 d-none d-lg-block" style="height: 25px;" src="{{ asset('bootstrap/bootstrap-icons-1.11.3/person-exclamation.svg') }}" alt="">
                                                <p class="btn btn-link text-dark p-0 d-lg-none">Login</p>
                                            </button>
                                        @endguest
                                    </li>
                                </ul>
                                <div class="header-btn ms-lg-3">
                                    <button type="button" class="btn btn-primary theme-btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                        Get Booked
                                    </button>
                                    {{-- <a href="javascript:void(0)" class="">Get Started</a> --}}
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
            <div class="app-content-header">
                <!-- Display success message -->
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('{{ asset('img/carousel/1.jpg') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Unleash Your Best Look</h2>
                                            <p class="text-white">Experience beauty and relaxation like never before—because you deserve to shine.</p>
                                        </div>
                                        <button type="button" class="btn btn-primary theme-btn border-btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                            Get Booked
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-section carousel-item clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('{{ asset('img/carousel/2.jpg') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Where Beauty Blossoms</h2>
                                            <p class="text-white">Step into elegance, leave with confidence.</p>
                                        </div>
                                        <button type="button" class="btn btn-primary theme-btn border-btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                            Get Booked
                                        </button>
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
                            <p class="wow fadeInUp" data-wow-delay=".6s">Exceptional care, personalized service, and stunning results—experience the difference.</p>
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
                                <h4>Transformative Haircare</h4>
                                <p>At Angel's Salon, we believe your hair is your crown, and we’re here to help you wear it with confidence. From precision cuts to vibrant coloring and restorative treatments, our stylists work with you to achieve the look you’ve always desired.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-brush-alt"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Relaxation Redefined</h4>
                                <p>Step into a world of tranquility where relaxation meets rejuvenation. Our spa-inspired services, including soothing facials and stress-relieving massages, will leave you feeling refreshed from head to toe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-pointer-up"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Inclusive Beauty Services</h4>
                                <p>Beauty has no limits. Our salon proudly offers inclusive services for all hair textures, skin types, and personal styles, embracing diversity, individuality, and self-expression. Everyone is welcome here.</p>
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
                                        <p>Expert care and style, tailored for every client – your ultimate salon experience online.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">About Us</span>
                                    {{-- <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Built-With Boostrap 5, a New Experiance</h2> --}}
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" style="text-indent: 10px;" data-wow-delay=".6s">Angel’s Touch Salon offers a propitious touch to each client such as hair rebond, hair styling, hair coloring and make-up. With the vision of bringing Fine Filipino hairdressing to the province of Catanduanes, Owner Angel Temporado brand has made a name for itself offering a wide range of hair and beauty services to a wide range of customers. It is a name that has been admired and amazed many people especially the municipality of San Andres since its first salon opened in 2019. Although despite of her salon is not on a several decade the owner itself is professionally doing it on decades. That’s why choosing their salon is not a waste of time rather its legit to inquire.</p>
                                    <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">10</span>
                                            <h4>Happy Client</h4>
                                            {{-- <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p> --}}
                                        </div>
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">5</span>
                                            <h4>Hairdo Done</h4>
                                            {{-- <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p> --}}
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
        <section id="location" class="location-section pt-130">
            <section id="location" class="contact-section cta-bg img-bg pt-110 pb-100">
                <div class="container d-flex flex-column">
                    <div class="section-title text-center mb-55">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Location</span>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1615.218784146229!2d124.09685634931125!3d13.597618974719241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a03d0036ea75c3%3A0x5f54a9608c3fe9bd!2sACC%20Hypermart%20Hardware%20Section%20-%20San%20Andres!5e0!3m2!1sen!2sph!4v1734964346710!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </section>
        <!-- ========================= portfolio-section end ========================= -->

        <!-- ========================= process-section start ========================= -->
        {{-- <section id="location" class="process-section pt-100 pb-100">
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
        </section> --}}
        <!-- ========================= process-section end ========================= -->

        <!-- ========================= team-section start ========================= -->
        <section id="team" class="contact-section pt-110 pb-100">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Team</span>
                        </div>
                    </div>
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-10 col-lg-4 mb-3">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                b5
                              </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <!-- ========================= team-section end ========================= -->

        <!-- ========================= client-logo-section start ========================= -->
        {{-- <section class="client-logo-section pt-100 pb-100">
            <div class="container">
                <div class="client-logo-wrapper">
                    <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                        <div class="client-logo">
                            <img src="{{ asset('img/client-logo/uideck-logo.svg') }}" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="{{ asset('img/client-logo/pagebulb-logo.svg') }}" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="{{ asset('img/client-logo/lineicons-logo.svg') }}" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="{{ asset('img/client-logo/graygrids-logo.svg') }}" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="{{ asset('img/client-logo/lineicons-logo.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        {{-- <section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('{{ asset('img/bg/cta-bg.jpg') }}');">
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
        </section> --}}
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section id="contact" class="contact-section pt-130 pb-100">
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
                                            <p>09488986916</p>
                                            <p>angel_temporado29@yahoo.com</p>
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
                                            <p>jan lang </p>
                                            <p>jan lang </p>
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
                                @csrf
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

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo"></a>
                            <p class="mb-30 footer-desc">Expert care and style, tailored for every client – your ultimate salon experience online.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="#home">Home</a>
                                </li>
                                <li>
                                    <a href="#about">About Us</a>
                                </li>
                                <li>
                                    <a href="#services">Service</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4>Service</h4>
                            <ul class="footer-links">
                                <li>
                                    <button class="btn btn-link text-secondary px-0 py-1" data-bs-toggle="modal" data-bs-target="#bookingModal">Marketing</button>
                                </li>
                                <li>
                                    <button class="btn btn-link text-secondary px-0 py-1" data-bs-toggle="modal" data-bs-target="#bookingModal">Branding</button>
                                </li>
                                <li>
                                    <button class="btn btn-link text-secondary px-0 py-1" data-bs-toggle="modal" data-bs-target="#bookingModal">Web Design</button>
                                </li>
                                <li>
                                    <button class="btn btn-link text-secondary px-0 py-1" data-bs-toggle="modal" data-bs-target="#bookingModal">Web Design</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4>Contact</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p>09488986916</p>
                                </li>
                                <li>
                                    <p>angel_temporado29@yahoo.com</p>
                                </li>
                                <li>
                                    <p>jan lang</br>
                                    jan lang</p>
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
                                    <li><a href="https://www.facebook.com/geldorapomte" target="_blank"><i class="lni lni-facebook-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->

        <!-- Button trigger modal -->

        {{-- <!-- Login Modal -->
        <div class="modal fade" id="loginLogoutModal" tabindex="-1" aria-labelledby="loginLogoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLogoutModalLabel">Login/Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="h-100 d-flex align-items-center" id="loginForm">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                      </div>
                                      <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                      </div>
                                      <p class="text-center mt-3">
                                        Don't have an account? <button class="btn btn-link" class="btn btn-link" data-bs-target="#signupModal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                      </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div> --}}
        @guest
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                           <!-- Livewire Component -->
                            @livewire('login')

                    </div>
                </div>
            </div>
        </div>
        @endguest

        @auth
        <!-- Login Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container d-flex justify-content-end gap-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Log out</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth

        <!-- Signup Modal -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('customer.signup') }}" method="POST" class="h-100 d-flex align-items-center">
                    @csrf
                    <div class="modal-body py-3 mt-1">
                        <div class="container">
                            <div class="row">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" required  aria-describedby="fullNameHelp">
                                        <div id="fullNameHelp" class="form-text">Dela Cruz, Juan P</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_number" class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="mb-3 d-none">
                                        <label for="role" class="form-label">role</label>
                                        <input hidden type="text" class="form-control" id="role" name="role" value="1">
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                    </div>
                                    <p class="text-center mt-3">
                                    Already have an account? <button class="btn btn-link" data-bs-target="#loginLogoutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>

		<!-- ========================= JS here ========================= -->
        <script src="{{ asset('jquery/jquery-3.7.1.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="{{ asset('js/count-up.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

        <script>
            // Get references to the modal and form
            const modal = new bootstrap.Modal(document.getElementById('myModal'));
            const form = document.getElementById('myForm');

            // Add an event listener for the form submission
            form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            // You can process the form data here (AJAX, etc.)

            // Optionally, keep the modal open and show a success message or other feedback
            alert('Form submitted, but modal remains open!');
            // No need to close the modal, so it stays open
            });
        </script>

        @livewireScripts
    </body>
</html>

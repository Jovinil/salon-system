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
                            {{-- <li class="nav-item">
                                <a class="page-scroll" href="#team">Team</a>
                            </li> --}}
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
                            @auth
                            <a type="button" class="btn btn-primary theme-btn" href="{{ route('get.booking') }}" target="_blank">
                                Get Booked
                            </a>
                        @endauth
                        @guest
                            <button class="btn btn-primary theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Get Booked</button>
                        @endguest
                            {{-- <a href="javascript:void(0)" class="">Get Started</a> --}}
                        </div>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</header>
<!-- ========================= header end ========================= -->

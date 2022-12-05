<!doctype html>
<html lang="en">

<head>
    <title>{{ $logo->title }} &mdash; Kursus Mengemudi Terbaik </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/icomoon/style.css">
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/vehicle.png" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend') }}/css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend') }}/css/css/style.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/lib/animate/animate.min.css" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">

</head>

<body>
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">
            <div class="fixed-top container">
                <div class="row align-items-center position-relative">
                    <div class="col-3">
                        <div class="site-logo">
                            <a href="{{ route('frontend.index') }}"><strong style="color: white">{{ $logo->title
                                    }}</strong></a>
                        </div>
                    </div>

                    <div class="col-9 text-right">
                        <span class="d-inline-block d-lg-none">
                            <a href="#" class=" site-menu-toggle js-menu-toggle py-5 ">
                                <span class="icon-menu h3 text-black"></span>
                            </a>
                        </span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="#home" class="nav-link text-white">Home</a></li>
                                <li><a href="#paket" class="nav-link text-white">Paket</a></li>
                                <li><a href="#kendaraan" class="nav-link text-white">Kendaraan</a></li>
                                <li><a href="#trainer" class="nav-link text-white">Trainer</a></li>
                                <li><a href="#about" class="nav-link text-white">About</a></li>
                                <a href="{{ route('frontend.index') }}" class="btn btn-outline-white">Home</a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                </div>
            </div>
        </div>

        <!-- Contact Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="text-primary text-uppercase">Contact Us</h5>
                    <h1 class="mb-0">Feel Free To Contact Us</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="ps-4">
                                <h5 class="mb-2">Call</h5>
                                <h4 class="text-primary mb-0">+6181212311111</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                            <div class="ps-4">
                                <h5 class="mb-2">Email</h5>
                                <h4 class="text-primary mb-0">k.emudi@gmail.com</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                            <div class="ps-4">
                                <h5 class="mb-2">Visit our office</h5>
                                <h4 class="text-primary mb-0">Jl Merdeka no 15
                                    Malang, Jawa Timur</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control border-0 bg-light px-4"
                                        placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control border-0 bg-light px-4"
                                        placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" rows="4"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=binus malang&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-2">Location</h4>
                    <p class="lead mb-4">
                        Jl Merdeka no 15
                        <br />
                        Malang, Jawa Timur
                    </p>
                    <h4 class="text-uppercase">Phone</h4>
                    <p class="lead mb-0">
                        0812-1231-1111
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-2">About Us</h4>
                    <p class="lead mb-0">
                        "{{ $logo->title }}" adalah salah satu dari sekian banyak kursus mengemudi di kota anda
                        yang tetap eksis sampai sekarang. Sudah teruji memiliki instruktur yang handal dan
                        berpengalaman di bidangnya.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('frontend') }}/js/aos.js"></script>

    <script src="{{ asset('frontend') }}/js/main.js"></script>

</body>

</html>

</html>

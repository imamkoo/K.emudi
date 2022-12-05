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
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

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
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/search/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/search/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/search/css/templatemo-training-studio.css">

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
                                <span class="icon-menu h3 text-white"></span>
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

        <div class="container-fluid bg-black">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white animated zoomIn section-heading dark-bg">Jadwal <em
                            style="color: #ed563b;">Belajar</em>
                    </h1>
                </div>
            </div>
        </div>
        <!-- Search-->
        <section class="section" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="schedule-table filtering">
                            <table class="border-danger">
                                <tbody>
                                    <tr>
                                        <td style="color: #ed563b; font-weight: 900">Jenis Mobil</td>
                                        <td style="color: wheat; font-weight: 900">Nama Mobil</td>
                                        <td style="color: #ed563b; font-weight: 900">Tanggal Belajar</td>
                                        <td style="color: wheat; font-weight: 900">Waktu belajar</td>
                                    </tr>
                                    @foreach ($jadwal as $cari)
                                    <tr>
                                        <td style="color: #ed563b;">{{ $cari->kendaraan->tipe }}</td>
                                        <td>{{ $cari->kendaraan->title }}</td>
                                        <td style="color: #ed563b;">{{ $cari->tanggal_indo }}</td>
                                        <td>{{ $cari->waktu }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Search End-->

        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="https://wa.me/62123456789" class="btn btn-primary btn-white"><span
                                class="icon-whatsapp"></span> Whatsapp now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-2">Location</h4>
                        <p class="lead mb-4" style="color: white">
                            Jl Merdeka no 15
                            <br />
                            Malang, Jawa Timur
                        </p>
                        <h4 class="text-uppercase">Phone</h4>
                        <p class="lead mb-0" style="color: white">
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
                        <p class="lead mb-0" style="color: white">
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

    <!-- Bootstrap -->
    <script src="{{ asset('frontend') }}/search/js/popper.js"></script>
    <script src="{{ asset('frontend') }}/search/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{ asset('frontend') }}/search/js/scrollreveal.min.js"></script>
    <script src="{{ asset('frontend') }}/search/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/search/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/search/js/imgfix.min.js"></script>
    <script src="{{ asset('frontend') }}/search/js/mixitup.js"></script>
    <script src="{{ asset('frontend') }}/search/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="{{ asset('frontend') }}/search/js/custom.js"></script>

</body>

</html>

</html>

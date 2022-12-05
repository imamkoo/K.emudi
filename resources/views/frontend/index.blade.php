<!doctype html>
<html lang="en">

<head>
    <title>{{ $logo->title }} &mdash; Kursus Mengemudi Terbaik </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
</head>

<body>
    <div class="site-wrap" id="home">
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
                            <a href="{{ route('frontend.index') }}"><strong>{{ $logo->title }}</strong></a>
                        </div>
                    </div>

                    <div class="col-9 text-right">
                        <span class="d-inline-block d-lg-none">
                            <a href="#" class=" site-menu-toggle js-menu-toggle py-5 ">
                                <span class="icon-menu h3 text-black"></span>
                            </a>
                        </span>

                        <nav class=" site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="#home" class="nav-link">Home</a></li>
                                <li><a href="#paket" class="nav-link">Paket</a></li>
                                <li><a href="#kendaraan" class="nav-link">Kendaraan</a></li>
                                <li><a href="#trainer" class="nav-link">Trainer</a></li>
                                <li><a href="#about" class="nav-link">About</a></li>
                                <a href="{{ route('frontend.contact') }}" class="btn btn-outline-primary">Contact
                                    Now</a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="hero mb-5" style="background-image: url('../frontend/images/hero_1_a.jpg');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">
                        <div class="row mb-5">
                            <div class="col-lg-7 intro ">
                                <h1 class="judul"><strong>{{ $judul->title }}</strong> {!! $judul->text !!}</h1>
                            </div>
                        </div>
                        <!-- DATA SEARCH -->
                        <form class="trip-form" action="cari" method="GET">
                            @csrf
                            <div class="row align-items-center">
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <select value="{{ old('cariMobil') }}" name="mobil"
                                        class="custom-select form-control form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Nama Mobil</option>
                                        @foreach ($jadwalKendaraan as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control form-control-sm" name="cari" id="cari"
                                            aria-describedby="helpId" value="{{ old('cari') }}">
                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <select value="{{ old('cariWaktu') }}" name="waktu"
                                        class="custom-select form-control form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Waktu Belajar</option>
                                        <option value="10:00">10:00</option>
                                        <option value="14:00">14:00</option>
                                    </select>
                                </div>

                                <div class="mb-3 mb-md-0 col-md-3">
                                    <input type="submit" value="Search" class="btn btn-primary btn-block py-3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="{{ asset('frontend') }}/images/feature_01.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>Tentang Kami</strong></h3>
                        <p class="mb-5">"{{ $logo->title }}" adalah salah satu dari sekian banyak kursus mengemudi
                            di kota anda yang tetap eksis sampai sekarang. Sudah teruji memiliki instruktur yang handal
                            dan berpengalaman di bidangnya.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" id="paket">
            <div class="container step_paket">
                <span>Paket Kursus</span>
                <p class="mb-5">Kami menawarkan Paket Latihan Manual dan Matic yang tentu saja dengan harga bersaing
                    dan pelayanan yang maksimal.</p>

                <div class="step_paket_jenis mb-3">
                    <span>Paket Manual</span>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>1</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $manual1->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $manual1->price }}</h4>
                                        <p>{!! $manual1->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>2</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $manual2->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $manual2->price }}</h4>
                                        <p>{!! $manual2->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>3</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $manual3->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $manual3->price }}</h4>
                                        <p>{!! $manual3->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>4</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $manual4->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $manual4->price }}</h4>
                                        <p>{!! $manual4->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="step_paket_jenis mb-3">
                    <span>Paket Matic</span>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>1</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $matic1->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $matic1->price }}</h4>
                                        <p>{!! $matic1->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>2</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $matic2->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $matic2->price }}</h4>
                                        <p>{!! $matic2->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>3</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $matic3->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $matic3->price }}</h4>
                                        <p>{!! $matic3->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="step">
                            <span>4</span>
                            <div class="paket__card card" style="height:440px">
                                <div class="paket__card-header">
                                    <h1 class="paket__card-title fw-bold text-uppercase">{{ $matic4->title }}</h1>
                                    <div class="paket__card-body">
                                        <h4 class="paket__card-price">{{ $matic4->price }}</h4>
                                        <p>{!! $matic4->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container" id="kendaraan">
                <div class="step_paket mb-5">
                    <span>Daftar Kendaraan</span>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('foto') . '/' . $kendaraan[0]->foto }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $kendaraan[0]->title }}</h3>
                                <div>
                                    <p>Manual Transmission</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('foto') . '/' . $kendaraan[1]->foto }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $kendaraan[1]->title }}</h3>
                                <div>
                                    <p>Manual Transmission</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('foto') . '/' . $kendaraan[2]->foto }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $kendaraan[2]->title }}</h3>
                                <div>
                                    <p>Manual Transmission</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('foto') . '/' . $kendaraan[4]->foto }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $kendaraan[4]->title }}</h3>
                                <div>
                                    <p>Automatic Transmission</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('foto') . '/' . $kendaraan[5]->foto }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $kendaraan[5]->title }}</h3>
                                <div>
                                    <p>Automatic Transmisson</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ asset('foto') . '/' . $kendaraan[6]->foto }}" alt="Image"
                                    class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $kendaraan[6]->title }}</h3>
                                <div>
                                    <p>Automatic Transmission</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container step_paket" id="trainer">
                <span>Trainer</span>
                <div class="row trainer-2 mt-3">
                    <div class="col-3 mb-2">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $trainer[0]->foto }}" alt="Image"
                                    class="img-fluid mr-3 ">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $trainer[0]->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-2 ">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $trainer[1]->foto }}" alt="Image"
                                    class="img-fluid mr-3">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $trainer[1]->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-2 ">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $trainer[2]->foto }}" alt="Image"
                                    class="img-fluid mr-3">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $trainer[2]->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-2 ">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $trainer[3]->foto }}" alt="Image"
                                    class="img-fluid mr-3">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $trainer[3]->nama }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container step_paket">
                <span>Pengurus</span>
                <div class="row trainer-2 mt-3">
                    <div class="col-3 mb-2">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $pengurus[0]->foto }}" alt="Image"
                                    class="img-fluid mr-3 ">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $pengurus[0]->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-2 ">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $pengurus[1]->foto }}" alt="Image"
                                    class="img-fluid mr-3">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $pengurus[1]->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-2 ">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $pengurus[2]->foto }}" alt="Image"
                                    class="img-fluid mr-3">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $pengurus[2]->nama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-2 ">
                        <div class="service-1 dark ">
                            <div class="v-card align-items-center">
                                <img src="{{ asset('foto') . '/' . $pengurus[3]->foto }}" alt="Image"
                                    class="img-fluid mr-3">
                            </div>
                            <div class="author-name">
                                <span class="d-block">{{ $pengurus[3]->nama }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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
    <script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>

</body>

</html>

</html>

@extends('layouts.frontend.minor')

@section('title', 'Fitur — Collegetivity')
@section('content')

<!--====== Start Header ======-->
<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="index.html">
                        <img src="{{url('landio/assets/img/logo-3.png')}}" alt="logo">
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li class="active">
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('fitur')}}">Fitur Aplikasi</a>
                        </li>
                        <li>
                            <a href="{{url('team')}}">Team Member</a>
                        </li>
                        <li>
                            <a href="{{url('tentang')}}">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Masuk
                        </a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="assets/img/logo-1.png" alt="Landio">
                </a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li class="active">
                        <a href="index.html">Demos</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Homepage Sass</a></li>
                            <li><a href="index-2.html">Homepage SEO</a></li>
                            <li><a href="index-3.html">Homepage App</a></li>
                            <li><a href="index-4.html">Homepage Chatbot</a></li>
                            <li><a href="index-5.html">Homepage Consultant</a></li>
                            <li><a href="index-6.html">Homepage Fintech</a></li>
                            <li><a href="index-7.html">Homepage Software</a></li>
                            <li><a href="index-8.html">Homepage E-Wallet</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">Our Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog-standard.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <img src="assets/img/logo-1.png" alt="Canvas Logo">
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">About Us</h5>
                <p>
                    Sed perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem
                    aperams eaque ipsa quae abillo inventore veritatis
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Contact Us</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        354 Oakridge, Camden NJ 08102 - USA
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:support@landio.com">support@landio.com</a>
                        <a href="www.landio.net" target="_blank">www.landio.net</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+01234567899">+012 (345) 678 99</a></span>
                        <span><a href="tel:+8563214">+8563214</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="page-title">Fitur Collegetivity</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Fitur</li>
            </ul>
        </div>
    </div>
    <div class="page-title-effect d-none d-md-block">
        <img class="particle-1 animate-zoom-fade" src="{{url('landio/assets/img/particle/particle-1.png')}}"
            alt="particle One">
        <img class="particle-2 animate-rotate-me" src="{{url('landio/assets/img/particle/particle-2.png')}}"
            alt="particle Two">
        <img class="particle-3 animate-float-bob-x" src="{{url('landio/assets/img/particle/particle-3.png')}}"
            alt="particle Three">
        <img class="particle-4 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-4.png')}}"
            alt="particle Four">
        <img class="particle-5 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-5.png')}}"
            alt="particle Five">
    </div>
</section>
<!--====== Page title area End ======-->

<!--====== Service Details Start ======-->
<section class="service-details-area p-t-130 p-b-130">
    <div class="container">
        <div class="service-details-content">
            <h2 class="service-title">Ada apa saja di Collegetivity?</h2>

            <p class="m-b-30">Collegetivity menyediakan banyak sekali solusi dan banyak sekali fitur yang membuat kalian
                semakin terorganisir dan produktif. Mulai dari jadwal pelajaran, catatan pelajaran, penyimpanan file
                tugas, resources website yang membantu kalian dalam dunia perkuliahan dan lain lain!</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="m-b-30">
                        <img src="{{url('landio/assets/img/services/service-details-thumbnail-1.jpg')}}"
                            alt="Service One">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="m-b-30">
                        <img src="{{url('landio/assets/img/services/service-details-thumbnail-2.jpg')}}"
                            alt="Service Two">
                    </div>
                </div>
            </div>

            <h3 class="service-subtitle">Collegetivity sebagai workspaces para mahasiswa</h3>

            <p>Kalian tidak perlu mengunjungi banyak website untuk mencari fitur yang kalian ingin cari, di
                Collegetivity kami menyatukan berbagai macam website dan tools yang membantu kalian menyelesaikan tugas
                secara cepat dan tepat </p>

            <div class="row justify-content-center iconic-boxes-v1">
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-3">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <h4 class="title">Atur Jadwalmu</h4>
                        <p>
                            Atur jadwal kuliahmu dengan mudah di Collegetivity
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-4">
                            <i class="far fa-database"></i>
                        </div>
                        <h4 class="title">Kelola Datamu</h4>
                        <p>
                            Kelola semua data akademikmu agar rapih di Collegetivity
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-5">
                            <i class="far fa-file-word"></i>
                        </div>
                        <h4 class="title">Simpan Tugasmu</h4>
                        <p>
                            Simpan semua tugasmu tanpa perlu takut hilang di Collegetivity
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-6">
                            <i class="far fa-bookmark"></i>
                        </div>
                        <h4 class="title">Resources Terbaik</h4>
                        <p>
                            Nikmati banyak website dan tools penunjang perkuliahanmu
                        </p>
                    </div>
                </div>
            </div>

            <div class="service-faq p-t-70 p-b-70">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 order-lg-last">
                        <div class="faq-content">
                            <h3 class="service-subtitle">Pertanyaan yang sering ditanyakan</h3>

                            <div class="landio-accordion-v1 accordion-bordered">
                                <div class="accordion" id="accordionFAQ">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Apakah Collegetivity dapat digunakan secara gratis?
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Ya, Collegetivity bisa kalian gunakan secara gratis lho. Makanya,
                                                    buruan deh cobain dan daftar sekarang!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                Apa saja persyaratan daftar Collegetivity?
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Ga ada persyaratan khusus kok! kamu hanya cukup daftar menggunakan
                                                    email dan password kamu agar dapat masuk ke aplikasi kami</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Saya mengalami error, pada siapa saya bisa lapor?
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Kebetulan Collegetivity sekarang ada pada versi BETA. Oleh karena itu
                                                    kemungkinan aplikasi kami error pasti ada, kalian cukup lapor ke
                                                    form kontak di atas ya!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Gimana cara nya request fitur?
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Wah, jika kalian punya masukan atau fitur kalian bisa kontak kami
                                                    dengan kirim pesan di halaman kontak di atas ya!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 order-lg-first">
                        <div class="faq-image text-lg-left m-t-md-60">
                            <img src="{{url('landio/assets/img/services/service-details-thumbnail-3.jpg')}}"
                                alt="faq image">
                        </div>
                    </div>
                </div>
            </div>

            <p>
                Collegetivity akan selalu berusaha membuat website dan mengupdate websitenya secara berkala untuk
                membantu para mahasiswa menyelesaikan semua tugas dan masa studi nya di Universitas. Tetap dukung kami
                dengan cara bagikan web ini ke teman teman mahasiswa lainnya ya!
            </p>
        </div>
    </div>
</section>
<!--====== Service Details End ======-->

<!--====== Newsletter Area Start ======-->
<section class="newsletter-area bg-cover-center bg-soft-grey-color p-t-130 p-b-130"
    style="background-image: url(./../landio/assets/img/particle/newsletter-bg.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="newsletter-text">
                    <div class="common-heading-v1 text-center m-b-40 p-0 px-5">
                        <span class="tagline">Subscribe layanan newsletter</span>
                        <h2 class="title">Subscribe layanan newsletter kami untuk mendapatkan info terbaru</h2>
                    </div>

                    <form action="#" class="newsletter-form">
                        <div class="input-field">
                            <input type="email" placeholder="Masukkan alamat email anda">
                            <button class="template-btn">Subscribe <i class="far fa-arrow-right"></i></button>
                        </div>

                        <p class="text-center m-t-25">Kami ga bakal kirim email spam kok</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-particle-effect d-none d-md-block">
        <img class="particle-1 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-2.png')}}"
            alt="particle Two">
        <img class="particle-2 animate-zoominout" src="{{url('landio/assets/img/particle/particle-3.png')}}"
            alt="particle Three">
        <img class="particle-3 animate-zoominout" src="{{url('landio/assets/img/particle/particle-4.png')}}"
            alt="particle Four">
        <img class="particle-4 animate-zoominout" src="{{url('landio/assets/img/particle/particle-5.png')}}"
            alt="particle Five">
    </div>
</section>
<!--====== Newsletter Area End ======-->

@endsection
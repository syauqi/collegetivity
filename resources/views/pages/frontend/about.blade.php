@extends('layouts.frontend.minor')

@section('title', 'Tentang — Collegetivity')
@section('content')

<!--====== Start Header ======-->
<header class="template-header navbar-left sticky-header">
    <div class="container">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{url('/')}}">
                        <img src="{{url('landio/assets/img/logo-new-2.svg')}}" alt="logo" width="36" class="mx-auto">
                    </a>
                </div>

                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('fitur')}}">Fitur</a>
                        </li>
                        <li class="active">
                            <a href="{{url('tentang')}}">Tentang</a>
                        </li>
                        <li>
                            <a href="{{url('team')}}">Team</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-md-block">
                        <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
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
                <a href="{{url('/')}}">
                    <img src="{{url('landio/assets/img/logo-new-2.svg')}}" width="32" alt="Logo">
                </a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{url('/fitur')}}">Fitur</a>
                    </li>
                    <li>
                        <a href="{{url('/tentang')}}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{url('/team')}}">Team</a>
                    </li>
                    <li>
                        <a href="{{url('/kontak')}}">Kontak</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->
</header>
<!--====== End Header ======-->

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="page-title">Tentang Kami</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Tentang</li>
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

<!-- ===== About Area Start ===== -->
<section class="about-us-area p-t-130 p-b-130 border-bottom-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-6 col-md-10">
                <div class="preview-image-showcase p-r-70 p-r-lg-40 p-r-md-0 p-b-md-40">
                    <div class="images-left">
                        <div class="image-hover-zoom-overly">
                            <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-1.jpg')}}"
                                alt="About thumbnail one">
                        </div>
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-3.jpg')}}"
                            alt="About thumbnail three">
                    </div>
                    <div class="images-right">
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-2.jpg')}}"
                            alt="About thumbnail two">
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-4.jpg')}}"
                            alt="About thumbnail four">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="about-us-content">
                    <div class="common-heading tagline-boxed m-b-30">
                        <span class="tagline">Tentang Collegetivity</span>
                        <h2 class="title">Menjadi Solusi Bagi Mahasiswa di Masa Pandemi</h2>
                    </div>
                    <p>
                        Collegetivity dibuat untuk membantu para mahasiswa agar tetap terorganisir, terjadwal dan
                        produktif pada masa pandemi yang membuat kita harus melakukan segalanya secara online
                    </p>
                    <a href="#" class="template-btn bordered-btn m-t-40">Bergabung Sekarang <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== About Area End ===== -->

<!-- ===== Service Section Start ===== -->
<section class="service-area p-t-130 p-b-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="common-heading tagline-boxed text-center m-b-30">
                    <span class="tagline">Fitur Populer</span>
                    <h2 class="title">Buat dunia dan masa kuliahmu menjadi menyenangkan</h2>
                </div>
            </div>
        </div>

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
    </div>
</section>
<!-- ===== Service Section End ===== -->

<!--====== Start Team Loop ======-->
<section class="team-member-area section-half-dots-pattern-fixed p-t-130 p-b-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="common-heading tagline-boxed text-center m-b-60">
                    <span class="tagline">Dibalik Collegetivity</span>
                    <h2 class="title">Kami Mempunyai Team Hebat</h2>
                </div>
            </div>
        </div>

        <div class="row team-members">
            <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="member-box m-b-30">
                    <div class="member-photo">
                        <img src="{{url('landio/assets/img/team/syauqi.jpg')}}" alt="Member Photo">
                    </div>
                    <div class="member-info">
                        <h5 class="name"><a href="#">Syauqizaidan Khairan Khalaf</a></h5>
                        <p class="title">Developer &amp; Founder</p>
                        <ul class="social-links">
                            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="member-box m-b-30">
                    <div class="member-photo">
                        <img src="{{url('landio/assets/img/team/dodi.jpeg')}}" alt="Member Photo">
                    </div>
                    <div class="member-info">
                        <h5 class="name"><a href="#">Dodi Wahyono</a></h5>
                        <p class="title">Ketua Team</p>
                        <ul class="social-links">
                            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="member-box m-b-30">
                    <div class="member-photo">
                        <img src="{{url('landio/assets/img/team/naufal.jpeg')}}" alt="Member Photo">
                    </div>
                    <div class="member-info">
                        <h5 class="name"><a href="#">Naufal Fawwaz</a></h5>
                        <p class="title">Divisi Kreatif</p>
                        <ul class="social-links">
                            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Team Loop ======-->

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
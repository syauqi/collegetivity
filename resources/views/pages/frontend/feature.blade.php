@extends('layouts.frontend.minor')

@section('title', 'Fitur Aplikasi — Collegetivity')
@section('content')

<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{url('/')}}">
                        <h1 class="font-weight-normal">🎓</h1>
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="#">|</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li class="active">
                            <a href="{{url('fitur')}}">Fitur Aplikasi</a>
                        </li>
                        <li>
                            <a href="{{url('tentang')}}">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak Kami</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Masuk Aplikasi
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
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{('/fitur')}}">Fitur Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/tentang')}}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{('/kontak')}}">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="{{('/login')}}">Masuk Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/register')}}">Daftar Akun</a>
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
                <h1 class="font-weight-normal">🎓</h1>
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">Tentang Kami</h5>
                <p>
                    Collegetivity adalah aplikasi yang membantu dunia perkuliahan mahasiswa mulai dari mengorganisasi
                    pelajaran, tugas dan jadwal serta resources yang membantu para mahasiswa.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Kontak Kami</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        Universitas Siliwangi, Tasikmalaya
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:collegetivity@gmail.com">collegetivity@gmail.com</a>
                        <a href="#" target="_blank">collegetivity.herokuapp.com</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+6285156162840">+62 851-5616-2840</a></span>
                        <span><a href="tel:+6282127350768">+62 821-2735-0768</a></span>
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
        <div class="page-title-content text-center mt-5">
            <h1 class="page-title">Fitur Aplikasi</h1>
            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Fitur Aplikasi</li>
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
            <div class="col-xl-8">
                <div class="about-us-content">
                    <div class="common-heading tagline-boxed m-b-30">
                        <span class="tagline">⚡ • Fitur Aplikasi di Collegetivity</span>
                        <h2 class="title">Fitur Buat Kamu yang Gak Suka Diatur Karena Kamu Sendiri yang Ngatur<span
                                class="font-weight-normal small">🐱‍🏍</span></h2>
                    </div>
                    <p>
                        Fitur yang ada di Collegetivity disediakan All-in-one buat kamu yang gak mau ribet ganti tab,
                        ganti layanan dan harus ganti akun cuma buat ngurusin data kuliah. Dengan kami, kamu bisa
                        lakukan itu di satu tempat
                    </p>
                    <a href="{{url('/register')}}" class="template-btn bordered-btn m-t-40">Bergabung Sekarang <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== About Area End ===== -->

<!--====== Service Details Start ======-->
<section class="service-details-area p-t-130 p-b-130">
    <div class="service-tab">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading text-center m-b-65">
                        <span class="tagline color-primary-5">🤔 • Ada apa aja sih di Collegetivity?</span>
                        <h2 class="title">Solusi Kece & Ampuh Bagi Para Mahasiswa Waktu Kuliah <span
                                class="font-weight-normal small">🔥</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="service-tab-nav">
                <ul class="nav nav-tabs service-tab-nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#tabItem1" role="tab">
                            <i class="far fa-browser"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem2" role="tab">
                            <i class="far fa-books"></i> Jadwal Pelajaran
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem3" role="tab">
                            <i class="far fa-edit"></i> Catatan Pelajaran
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem4" role="tab">
                            <i class="far fa-video"></i> Virtual Meeting
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem5" role="tab">
                            <i class="far fa-folder"></i> File Manager
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem6" role="tab">
                            <i class="far fa-check-square"></i> Todolist
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem7" role="tab">
                            <i class="far fa-chalkboard-teacher"></i> LifeAt
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem8" role="tab">
                            <i class="far fa-bookmark"></i> Resources
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="service-tab-content container-fluid">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabItem1" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/dashboard.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                            filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem2" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/jadwal.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem3" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/catatan.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem4" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/virtual.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem5" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/file.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem6" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/todo.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem7" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/lifeat.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem8" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/resources.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Service Details End ======-->

<!--====== Start Call To Action ======-->
<section class="cta-section bg-cover-center p-t-90 p-b-90"
    style="background-image: url(./../landio/assets/img/cta/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="cta-content text-center">
                    <div class="common-heading heading-white m-b-65">
                        <span class="tagline">Tunggu Apa Lagi?</span>
                        <h2 class="title">Segera Daftar dan Bergabung Bersama Collegetivity</h2>
                    </div>

                    <a href="{{url('/register')}}" class="template-btn white-bg bordered-btn">Daftar Sekarang <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
        <img src="{{url('landio/assets/img/cta/cta-absolute-img.png')}}" alt="">
    </div>
</section>

@endsection
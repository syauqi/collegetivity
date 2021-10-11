@extends('layouts.frontend.minor')

@section('title', 'Team — Collegetivity')
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
                        <li>
                            <a href="{{url('tentang')}}">Tentang</a>
                        </li>
                        <li class="active">
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
            <h1 class="page-title">Member Team</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Team</li>
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

<!--====== Start Skill Section ======-->
<section class="skill-section p-t-130 p-b-130">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between justify-content-center">
            <div class="col-lg-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="preview-image-v4 m-b-md-60">
                    <div class="image-one animate-float-bob-y">
                        <img src="{{url('landio/assets/img/preview-gallery/team-skills-thumbnail-1.jpg')}}"
                            alt="Thumbnail one">
                    </div>
                    <div class="image-two animate-float-bob-y">
                        <img src="{{url('landio/assets/img/preview-gallery/team-skills-thumbnail-2.jpg')}}"
                            alt="Thumbnail two">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="skill-text-block p-r-70 p-l-70 p-r-lg-30 p-l-lg-40 p-l-md-0 p-r-md-0">
                    <div class="common-heading tagline-boxed m-b-30">
                        <span class="tagline">Perkenalkan Team</span>
                        <h2 class="title">Mahasiswa Baru Informatika yang Ingin Membantu Mahasiswa</h2>
                    </div>

                    <p>
                        Kami harap dengan adanya collegetivity ini dapat membantu para mahasiswa dari universitas
                        manapun maupun dari semester apapun agar tetap produktif di masa pandemi ini
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Skill Section ======-->

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

@endsection
@extends('layouts.frontend.minor')

@section('title', 'Team — Collegetivity')
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
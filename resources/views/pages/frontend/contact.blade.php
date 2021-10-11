@extends('layouts.frontend.minor')

@section('title', 'Kontak — Collegetivity')
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
                        <li>
                            <a href="{{url('team')}}">Team</a>
                        </li>
                        <li class="active">
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
            <h1 class="page-title">Hubungi Kami</h1>

            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Kontak Kami</li>
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

<!--====== Start Contact Area ======-->
<section class="blog-area p-t-130 p-b-130">
    <div class="container">
        <div class="row justify-content-lg-start justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                <div class="contact-info-boxes-v2">
                    <div class="contact-info-box m-b-30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon icon-gradient-1">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Lokasi Kami</h5>
                            <p>Tasikmalaya <br> Universitas Siliwangi - Jawa Barat</p>
                        </div>
                    </div>
                    <div class="contact-info-box m-b-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon icon-gradient-2">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Alamat Email</h5>
                            <p><a href="mailto:supportinfobiz@gmail.com">apps.collegetivity@gmail.com</a></p>
                            <p><a href="www.businesscon.net" target="_blank">www.collegetivity.herokuapp.com</a></p>
                        </div>
                    </div>
                    <div class="contact-info-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon icon-gradient-3">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Nomor Darurat</h5>
                            <p><a href="tel:+01234578999">+012 (345) 678 99</a></p>
                            <p><a href="tel:+8563214">+8563214</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-1 col-md-10">
                <div class="contact-form-area m-t-md-100">
                    <div class="common-heading tagline-boxed m-b-40">
                        <span class="tagline">Kirim Kami Pesan</span>
                        <h2 class="title">Ada pertanyaan ? <br> Kirim pesan dibawah</h2>
                    </div>
                    <div class="contact-form-v2">
                        <form>
                            <div class="input-field m-b-30">
                                <input type="text" id="fullName" placeholder="Nama Lengkap" name="name" required="">
                                <label for="fullName">Name</label>
                            </div>
                            <div class="input-field m-b-30">
                                <input type="text" id="phoneNumber" placeholder="Nomor Telepon" name="phone"
                                    required="">
                                <label for="phoneNumber">Phone</label>
                            </div>
                            <div class="input-field m-b-30">
                                <input type="email" id="emailAddress" placeholder="Alamat Email" name="email"
                                    required="">
                                <label for="emailAddress">Email</label>
                            </div>
                            <div class="input-field m-b-30">
                                <input type="text" id="subject" placeholder="Saya ingin bertanya tentang .. "
                                    name="subject" required="">
                                <label for="subject">Subject</label>
                            </div>
                            <div class="input-field textarea-field m-b-30">
                                <textarea id="message" placeholder="Pesan" name="message"></textarea>
                            </div>
                            <div class="input-field">
                                <button type="submit" class="template-btn">Kirim Pesan <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Contact Area ======-->

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
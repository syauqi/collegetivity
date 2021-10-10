@extends('layouts.frontend.master')

@section('title', 'Kontak — Collegetivity')
@section('content')

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

@endsection
@extends('layouts.frontend.master')

@section('title', 'Collegetivity — Aplikasi yang Membantu Dunia Perkuliahanmu!')
@section('content')

<div class="page-wrapper">
    <!--====== Start Hero Area ======-->
    <section class="hero-area-v7">
        <div class="container-fluid">
            <div class="hero-content">
                <span class="title-tag wow fadeInUp mb-3" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <span class="badge rounded-pill bg-primary py-2 px-3 text-white">
                        <span class="font-weight-normal">📢</span>• Collegetivity hadir dalam versi beta!
                    </span>
                </span>
                <h3 class="hero-title wow fadeInLeft" data-wow-delay="0.2s">Website yang membantu dunia perkuliahanmu!
                </h3>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                    🎓 • Collegetivity hadir untuk membantu kalian para mahasiswa agar lebih produktif, terorganisir dan
                    pekerjaanmu lebih mudah!
                </p>
                <a href="{{url('/register')}}" class="template-btn primary-bg-5 wow fadeInUp" data-wow-delay="0.4s">
                    Daftar Sekarang <i class="fas fa-arrow-right"></i>
                </a>

                <span class="notice wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{url('landio/assets/img/hero/notice-icon.png')}}" alt="Image"> Collegetivity bisa kalian
                    akses dan gunakan secara gratis lho!
                </span>
            </div>
            <div class="hero-img d-none d-lg-block wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{url('landio/assets/img/hero/home-software-2.png')}}" alt="Image">
            </div>
        </div>
    </section>
    <!--====== End Hero Area ======-->

    <!--====== Section Service Start ======-->
    <section class="service-section p-t-130 p-b-130 bg-secondary-color-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading text-center heading-white m-b-30">
                        <h2 class="title">Pandemi membuat kita harus melakukan semuanya secara online, dengan
                            kami kamu
                            bisa lebih produktif</h2>
                    </div>
                </div>
            </div>
            <div
                class="row no-gutters justify-content-lg-between justify-content-md-start justify-content-center icon-boxes-v3">
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box box-version-white color-v1 m-t-50">
                        <div class="icon">
                            <i class="far fa-calendar"></i>
                        </div>
                        <h4 class="title"><a href="#">Buat Tugas & Jadwalmu Terorganisir</a></h4>
                        <p>
                            Collegetivity adalah tempat kamu mengatur semua data akademikmu, dilengkapi fitur jadwal
                            pelajaran, catatan pelajaran dan lain lain yang membuatmu terorganisir
                        </p>
                        <a href="{{url('/fitur')}}" class="box-btn">Selengkapnya <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="iconic-box box-version-white color-v2 m-t-50">
                        <div class="icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h4 class="title"><a href="#">Simpan File Tugas & Akademikmu</a></h4>
                        <p>
                            Jangan takut kalau file tugas atau file yang berkaitan dengan kuliahmu hilang, dengan
                            collegetivity kamu bisa dengan aman menyimpan file file tersebut
                        </p>
                        <a href="{{url('/fitur')}}" class="box-btn">Selengkapnya <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="iconic-box box-version-white color-v3 m-t-50">
                        <div class="icon">
                            <i class="far fa-bookmark"></i>
                        </div>
                        <h4 class="title"><a href="{{url('/fitur')}}">Banyak Resources yang Membantu</a></h4>
                        <p>
                            Disini juga kami menyediakan banyak resources mulai dari website atau thread yang bakal
                            membantu kamu menjadi lebih produktif dari sebelumnya
                        </p>
                        <a href="#" class="box-btn">Selengkapnya <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Section Service End ======-->

    <!--====== Start Design & Layout Section ======-->
    <section class="sof-design-layout p-t-130 p-b-130">
        <div class="container">
            <div class="row align-items-center justify-content-center no-gutters">
                <div class="col-lg-7">
                    <div class="software-preview m-b-md-80 animate-float-bob-y">
                        <img src="{{url('landio/assets/img/preview-gallery/design-layout.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="software-text-block p-l-50 p-l-lg-30 p-l-md-0">
                        <div class="common-heading m-b-40">
                            <span class="tagline color-primary-5">✨ • Tujuan & Manfaat</span>
                            <h2 class="title">Atur semua dunia dan data perkuliahanmu</h2>
                        </div>
                        <p>
                            Kamu ga usah ribet buat ganti tab dari berbagai aplikasi cuma buat jadwal, bikin catatan
                            atau nyimpen file dan foto berharga karena kami udah nyediain semua fiturnya di satu
                            website!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Design & Layout Section ======-->

    <!--====== Service Details Start ======-->
    <section class="service-details-area p-b-130">
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

    <br>
    <br>

    <!--====== Start Call To Action ======-->
    <section class="cta-section bg-cover-center p-t-90 p-b-90 mt-5"
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


    <!--====== End Call To Action ======-->
</div>
@endsection
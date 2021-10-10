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
                    <span class="badge rounded-pill bg-primary py-2 px-3 text-white">Collegetivity hadir dalam versi
                        beta!</span>
                </span>
                <h2 class="hero-title wow fadeInLeft" data-wow-delay="0.2s">Website yang membantu dunia perkuliahanmu!
                </h2>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                    🎓 • Collegetivity hadir untuk membantu kalian para mahasiswa agar lebih produktif, terorganisir dan
                    perkuliahanmu lebih mudah!
                </p>
                <a href="#" class="template-btn primary-bg-5 wow fadeInUp" data-wow-delay="0.4s">
                    Daftar Sekarang <i class="fas fa-arrow-right"></i>
                </a>

                <span class="notice wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{url('landio/assets/img/hero/notice-icon.png')}}" alt="Image"> Collegetivity bisa kalian
                    akses dan gunakan secara gratis
                </span>
            </div>
            <div class="hero-img d-none d-lg-block wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{url('landio/assets/img/hero/home-software.png')}}" alt="Image">
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
                        <h2 class="title">Pandemi membuat kita harus melakukan semuanya secara online, dengan kami anda
                            bisa lebih produktif</h2>
                    </div>
                </div>
            </div>
            <div
                class="row no-gutters justify-content-lg-between justify-content-md-start justify-content-center icon-boxes-v3">
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box box-version-white color-v1 m-t-50">
                        <div class="icon">
                            <i class="far fa-code"></i>
                        </div>
                        <h4 class="title"><a href="#">Open Source Platform</a></h4>
                        <p>
                            But I must explain to how mistaken denouncing pleasures praisinge pain was born and complete
                        </p>
                        <a href="#" class="box-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="iconic-box box-version-white color-v2 m-t-50">
                        <div class="icon">
                            <i class="far fa-cloud-upload"></i>
                        </div>
                        <h4 class="title"><a href="#">On-Demand Cloud</a></h4>
                        <p>
                            To take a trivial example which of ever undertakes laborious physicals exercise except
                            obtain some
                        </p>
                        <a href="#" class="box-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="iconic-box box-version-white color-v3 m-t-50">
                        <div class="icon">
                            <i class="far fa-gamepad"></i>
                        </div>
                        <h4 class="title"><a href="#">Real Time Dashboard</a></h4>
                        <p>
                            Quis autem veleum reprehenderit quin voluptate velit esse quam nihile molestiae consequatur
                            vel
                        </p>
                        <a href="#" class="box-btn">Learn More <i class="far fa-arrow-right"></i></a>
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
                        <img src="assets/img/preview-gallery/design-layout.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="software-text-block p-l-50 p-l-lg-30 p-l-md-0">
                        <div class="common-heading m-b-40">
                            <span class="tagline color-primary-5">Design & Layouts</span>
                            <h2 class="title">Keep Things Simple With Ability</h2>
                        </div>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudane totam rem aperiam eaque ipsa quae abilloe
                        </p>
                        <div class="icon-bordered-box icon-left m-t-30 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="icon">
                                <i class="far fa-gem"></i>
                            </div>
                            <div class="box-content">
                                <h4 class="title">Build With Animations</h4>
                                <p>
                                    Quis autem vel eum iure reprehenderit quin voluptate velit esse quam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center p-t-130">
                <div class="col-lg-7 col-md-10 order-lg-last order-first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="preview-galley-v8 text-right m-b-md-80">
                        <img src="assets/img/preview-gallery/sof-analysis-01.jpg" class="preview-one" alt="Image">
                        <img src="assets/img/preview-gallery/sof-analysis-02.jpg"
                            class="preview-two animate-float-bob-x" alt="Image">
                        <img src="assets/img/preview-gallery/sof-analysis-03.jpg"
                            class="preview-three animate-float-bob-y" alt="Image">
                    </div>
                </div>

                <div class="col-lg-5 col-md-10 order-lg-first">
                    <div class="software-text-block">
                        <div class="common-heading m-b-25">
                            <span class="tagline color-primary-5">System Analysis</span>
                            <h2 class="title">Track Goals All In One Place</h2>
                        </div>

                        <p class="m-b-25">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudane totam rem aperiam eaque ipsa quae abilloe
                        </p>
                        <p>
                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                        </p>
                        <a href="about.html" class="template-btn primary-bg-5 m-t-40">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Design & Layout Section ======-->

    <!--====== Start Service Section ======-->
    <section class="service-tab-section p-t-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading text-center m-b-65">
                        <span class="tagline color-primary-5">Service We Provide</span>
                        <h2 class="title">Better Smart Solutions For Your Better Software</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-tab">
            <div class="container">
                <div class="service-tab-nav">
                    <ul class="nav nav-tabs service-tab-nav" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="tab" href="#tabItem1" role="tab">
                                <i class="far fa-browser"></i> Apply To Template
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem2" role="tab">
                                <i class="far fa-bullseye-arrow"></i> Build Your Promotos
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem3" role="tab">
                                <i class="far fa-coins"></i> Data Organizations
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem4" role="tab">
                                <i class="far fa-coins"></i> Assing Action Data
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem5" role="tab">
                                <i class="far fa-book"></i> Rich Documentation
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem6" role="tab">
                                <i class="far fa-phone-plus"></i> 100% Responsive
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem7" role="tab">
                                <i class="far fa-calendar-check"></i> Useablity Easy
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem8" role="tab">
                                <i class="far fa-tools"></i> Easy Installations
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="service-tab-content container-fluid">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabItem1" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem2" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem3" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem4" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem5" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem6" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem7" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem8" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="assets/img/service-tab-img.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Service Section ======-->

    <!--====== Start Testimonial Area ======-->
    <section class="testimonial-area-two p-t-130 p-b-130">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="preview-image-v5 m-r-45 m-r-lg-0 m-b-md-80 wow fadeInLeft animate-float-bob-y"
                        data-wow-delay="0.3s">
                        <img src="assets/img/preview-gallery/sof-testimonial.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="testimonial-slider-wrapper p-l-40 p-l-lg-0">
                        <div class="common-heading m-b-65">
                            <span class="tagline color-primary-5">Customer Reviews</span>
                            <h2 class="title">What our clients say about solutions</h2>
                        </div>

                        <div class="testimonial-slider-v1 quote-left-bordered" id="testimonialActiveFive">
                            <div class="testimonial-item">
                                <div class="quote-icon">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium
                                    totam rem
                                    aperiam eaque quae</p>
                                <div class="author-info">
                                    <img src="assets/img/testimonial/author-1.png" alt="testimonial author">
                                    <h6 class="name">Michael W. Kirwan <span class="title">CEO & Founder</span></h6>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="quote-icon">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium
                                    totam rem
                                    aperiam eaque quae</p>
                                <div class="author-info">
                                    <img src="assets/img/testimonial/author-2.png" alt="testimonial author">
                                    <h6 class="name">Michael W. Kirwan <span class="title">CEO & Founder</span></h6>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="quote-icon">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium
                                    totam rem
                                    aperiam eaque quae</p>
                                <div class="author-info">
                                    <img src="assets/img/testimonial/author-3.png" alt="testimonial author">
                                    <h6 class="name">Michael W. Kirwan <span class="title">CEO & Founder</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Area ======-->

    <!--====== Start Call To Action ======-->
    <section class="cta-section bg-cover-center p-t-90 p-b-90"
        style="background-image: url(assets/img/cta/cta-bg-2.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="cta-content text-center">
                        <div class="common-heading heading-white m-b-65">
                            <span class="tagline">Download Free Trial</span>
                            <h2 class="title">Get Our Software Very Easily Download Free Trial</h2>
                        </div>

                        <a href="#" class="template-btn white-bg bordered-btn">Download Free Trial <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
            <img src="assets/img/cta//cta-absolute-img.png" alt="">
        </div>
    </section>
    <!--====== End Call To Action ======-->
</div>
@endsection
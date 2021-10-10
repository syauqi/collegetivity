@extends('layouts.frontend.master')

@section('title', 'Team — Collegetivity')
@section('content')

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
@extends('layouts.frontend.master')

@section('title', 'Fitur — Collegetivity')
@section('content')

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="page-title">Fitur yang Tersedia</h1>

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

@endsection
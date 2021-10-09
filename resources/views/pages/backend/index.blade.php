@extends('layouts.backend.master')

@section('title', 'Dashboard — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <br>
    {{-- <div class="container-fluid my-3">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>💹 Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user"></i></div>
                            <div class="media-body"><span class="m-0">Anggota</span>
                                <h4 class="mb-0 counter">4</h4><i class="icon-bg"
                                    data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="edit"></i></div>
                            <div class="media-body"><span class="m-0">Artikel</span>
                                <h4 class="mb-0 counter">4</h4><i class="icon-bg"
                                    data-feather="edit"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                            <div class="media-body"><span class="m-0">Merchandise</span>
                                <h4 class="mb-0 counter">4</h4><i class="icon-bg"
                                    data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="image"></i></div>
                            <div class="media-body"><span class="m-0">Galeri</span>
                                <h4 class="mb-0 counter">4</h4><i class="icon-bg"
                                    data-feather="image"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages title header end-->
    <!-- main content start-->
    <div class="container-fluid">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                <div class="card o-hidden profile-greeting">
                    <div class="card-body">
                        <div class="media">
                            <div class="badge-groups w-100">
                                <div class="badge f-12"><i class="mr-1" data-feather="clock"></i><span id="txt"></span>
                                </div>
                                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                            </div>
                        </div>
                        <div class="greeting-user text-center">
                            <div class="profile-vector"><img class="img-fluid"
                                    src="{{url("cuba/assets/images/dashboard/welcome.png")}}" alt=""></div>
                            <h4 class="f-w-600"><span id="greeting">Good Morning</span></h4>
                            <p><span> Selamat datang di dashboard website Ciradyka, Anda dapat mengelola semua data
                                    website disini</span></p>
                            <div class="whatsnew-btn"><a href="#" class="btn btn-primary">Tambah
                                    Anggota</a></div>
                            <div class="left-icon"><i class="fa fa-bell"> </i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                <div class="card gradient-primary o-hidden">
                    <div class="card-body">
                        <div class="setting-dot">
                            <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                                    class="fa fa-spin fa-cog"></i></div>
                        </div>
                        <div class="default-datepicker">
                            <div class="datepicker-here" data-language="en"></div>
                        </div><span class="default-dots-stay overview-dots full-width-dots"><span
                                class="dots-group"><span class="dots dots1"></span><span
                                    class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span
                                    class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span
                                    class="dots dots6 dot-small"></span><span
                                    class="dots dots7 dot-small-semi"></span><span
                                    class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                                </span></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs end-->
@endsection

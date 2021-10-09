@extends('layouts.backend.master')

@section('title', $item->nama . '— Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            {{-- kosong wle --}}
        </div>
    </div>
    <!-- pages title header end-->
    <!-- main content start-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar"><img style="object-fit: cover;"
                                    src="{{url('storage/images/' . $item->foto )}}">
                            </div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-envelope"></i> Nomor Tanda Anggota</h6>
                                                <span>{{$item->nomor_tanda_anggota}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-calendar"></i> Angkatan/Tahun Masuk</h6>
                                                <span>{{$item->angkatan}}/{{$item->tahun_masuk}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="">{{$item->nama}}</a></div>
                                        <div class="desc mt-2">{{$item->ambalan}}</div>
                                        <small>{{$item->gender}}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-phone"></i> Nomor Handphone</h6>
                                                <span>{{$item->handphone}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-left">
                                                <h6><i class="fa fa-location-arrow"></i> Alamat Rumah</h6>
                                                <span>{{$item->alamat}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a
                                            href="{{url('https://www.facebook.com/' . $item->facebook )}}"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a
                                            href="{{url('https://www.twitter.com/' . $item->twitter )}}"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a
                                            href="{{url('https://www.instagram.com/' . $item->instagram )}}"><i
                                                class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
            </div>
        </div>
    </div>
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs start-->

@endsection
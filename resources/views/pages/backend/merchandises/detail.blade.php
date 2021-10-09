@extends('layouts.backend.master')

@section('title', $item->nama_barang . ' — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

@push('carousel-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/rating.css')}}">
@endpush

<!-- file wrapper for better tabs start-->
<div>
    <!-- Page Sidebar Ends-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Detail Merchandise</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Merchandise</li>
                        <li class="breadcrumb-item active">{{$item->nama_barang}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="my-3">
            <div class="card">
                <div class="row product-page-main">
                    <div class="col-xl-12">
                        <div class="card-body">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                <div class="item"><img src="{{url('storage/images/' . $item->gambar_barang)}}" alt="">
                                </div>
                            </div>
                            <div class="owl-carousel owl-theme" id="sync2">
                                <div class="item"><img src="{{url('storage/images/' . $item->gambar_barang)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="col-xl-12">
                    <div class="card-body">
                        <div class="product-page-details">
                            <h3>{{$item->nama_barang}}</h3>
                        </div>
                        <div class="product-price f-28">{{$item->harga_barang}}
                        </div>
                        <hr>
                        <p>{!!htmlspecialchars_decode($item->deskripsi_barang)!!}</p>
                        <hr>
                        <div>
                            <table class="product-page-width">
                                <tbody>
                                    <tr>
                                        <td> <b>Nomor Telepon 1 &nbsp;&nbsp;&nbsp;:</b></td>
                                        <td>{{$item->nomor_telepon_1}}</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Nomor Telepon 2 &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b>
                                        </td>
                                        <td>{{$item->nomor_telepon_2}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- file wrapper for better tabs start-->

@push('carousel-scripts')
<script src="{{url('cuba/assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{url('cuba/assets/js/rating/rating-script.js')}}"></script>
<script src="{{url('cuba/assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{url('cuba/assets/js/ecommerce.js')}}"></script>
@endpush

@endsection
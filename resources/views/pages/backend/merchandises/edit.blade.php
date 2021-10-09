@extends('layouts.backend.master')

@section('title', 'Edit Merchandise — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Edit Merchandise</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dihalaman ini anda dapat mengedit atau merubah merchandise yang telah anda tambahkan sebelumnya.
                        Pastikan semua data telah terisi dan isi dengan data yang valid. Jika terjadi error atau
                        bug anda dapat menghubungi developer [syauqi].
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- pages title header end-->
    <!-- main content start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Merchandise</h5>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" method="POST"
                            action="{{route('merchandises.update', $item->id)}}" enctype="multipart/form-data"
                            novalidate="">
                            @method('PUT')
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="gambar_barang">Foto Merchandise: <span
                                            class="text-danger">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar_barang"
                                            id="gambar_barang">
                                        <label class="custom-file-label" for="gambar_barang">Pilih foto merchandise
                                            ...</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Nama Merchandise: <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-basket" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <polyline points="7 10 12 4 17 10"></polyline>
                                                    <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z">
                                                    </path>
                                                    <circle cx="12" cy="15" r="2"></circle>
                                                </svg></span>
                                        </div>
                                        <input class="form-control" id="nama_barang" name="nama_barang"
                                            value="{{$item->nama_barang}}" type="text" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                            <label>Deskripsi Merchandise: <span class="text-danger">*</span></label>
                                            <textarea id="text-box" name="deskripsi_barang" cols="10" rows="2">
                                                {!!htmlspecialchars_decode($item->deskripsi_barang)!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    {{-- input instagram --}}
                                    <div class="form-group col-md-4">
                                        <label for="instagram">Harga Barang: <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-tag" width="20" height="20"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M11 3l9 9a1.5 1.5 0 0 1 0 2l-6 6a1.5 1.5 0 0 1 -2 0l-9 -9v-4a4 4 0 0 1 4 -4h4">
                                                        </path>
                                                        <circle cx="9" cy="9" r="2"></circle>
                                                    </svg></span>
                                            </div>
                                            <input id="harga_barang" type="text" class="form-control"
                                                value="{{$item->harga_barang}}" name="harga_barang">
                                        </div>
                                    </div>
                                    {{-- input twitter --}}
                                    <div class="form-group col-md-4">
                                        <label for="twitter">No. Telepon Penanggung Jawab <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-user" width="20" height="20"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                    </svg></span>
                                            </div>
                                            <input id="nomor_telepon_1" type="text" class="form-control"
                                                value="{{$item->nomor_telepon_1}}" name="nomor_telepon_1">
                                        </div>
                                    </div>
                                    {{-- input facebook --}}
                                    <div class="form-group col-md-4">
                                        <label for="facebook">No. Telepon Penanggung Jawab 2 <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-users" width="20"
                                                        height="20" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                                    </svg></span>
                                            </div>
                                            <input id="nomor_telepon_2" type="text" class="form-control"
                                                value="{{$item->nomor_telepon_2}}" name="nomor_telepon_2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                    <input class="btn btn-light" type="reset" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs start-->

@push('ckeditor-scripts')
<script src="{{url('cuba/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('cuba/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{url('cuba/assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{url('cuba/assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/email-app.js')}}"></script>
<script src="{{url('cuba/assets/js/form-validation-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/tooltip-init.js')}}"></script>
@endpush

@endsection
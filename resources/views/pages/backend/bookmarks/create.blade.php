@extends('layouts.backend.master')

@section('title', 'Tambah Bookmarks Baru — Collegetivity')
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
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">🔖🌏 • Tambah Bookmarks Baru</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah halaman untuk tambah bookmarksmu. <span class="d-none d-md-inline">
                            Bookmarks yang telah kamu tambahkan nantinya bisa kamu akses kok dimana saja dan kapan
                            saja.
                            Cocok buat simpen link penting, ya!
                        </span>
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
                        <h5>Tambah Bookmarks</h5>
                    </div>
                    <div class="card-body add-post">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    <h4>Ada error nih 😓</h4>
                                </li>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="row" method="POST" action="{{route('bookmarks.store')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="judul">Judul atau Nama Bookmarks: <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-notes" width="20"
                                                        height="20" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                                        <line x1="9" y1="7" x2="15" y2="7"></line>
                                                        <line x1="9" y1="11" x2="15" y2="11"></line>
                                                        <line x1="9" y1="15" x2="13" y2="15"></line>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input class="form-control" id="judul" name="judul" value="{{old('judul')}}"
                                                type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="matkul">Link atau URL Halaman Website: <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-world" width="20"
                                                        height="20" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="12" cy="12" r="9"></circle>
                                                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                                                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                                                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input class="form-control" id="url" name="url" value="{{old('url')}}"
                                                type="text" required="">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                            <label>Deskripsi Bookmarks atau Halaman Website: <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="deskripsi"
                                                id="exampleFormControlTextarea1" maxlength="255" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
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
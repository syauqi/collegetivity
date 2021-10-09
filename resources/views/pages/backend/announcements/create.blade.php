@extends('layouts.backend.master')

@section('title', 'Tambah Pengumuman — Ciradyka Pramuka SMAN 1 Ciamis')
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
                    <h5 class="text-white">Tambah Pengumuman</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dihalaman ini anda dapat mengupload artikel yang nantinya akan muncul di menu artikel di halaman
                        depan. Pastikan semua data telah terisi dan isi dengan data yang valid. Jika terjadi error atau
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
                        <h5>Tambah Pengumuman</h5>
                    </div>
                    <div class="card-body add-post">
                        <form class="row needs-validation" method="POST" action="{{route('announcements.store')}}"
                            enctype="multipart/form-data" novalidate="">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="judul">Judul:</label>
                                    <input class="form-control" id="judul" name="judul" value="{{old('judul')}}"
                                        type="text" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Thumbnail:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnail" id="customFile">
                                        <label class="custom-file-label" for="customFile">Pilih file thumbnail</label>
                                    </div>
                                </div>

                                {{-- ambalan input --}}
                                <div class="form-group">
                                    <label for="tahun_masuk">Kategori <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-building-community" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8">
                                                    </path>
                                                    <line x1="13" y1="7" x2="13" y2="7.01"></line>
                                                    <line x1="17" y1="7" x2="17" y2="7.01"></line>
                                                    <line x1="17" y1="11" x2="17" y2="11.01"></line>
                                                    <line x1="17" y1="15" x2="17" y2="15.01"></line>
                                                </svg></span>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="kategori">
                                            <option value="" disabled selected>Pilih kategori ...</option>
                                            <option value="Pengumuman">Pengumuman</option>
                                            <option value="Petunjuk">Petunjuk Teknis</option>
                                            <option value="Pemenang">Pemenang Lomba</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="author"
                                        value="{{Auth::user()->name}}">
                                    <input class="form-control" type="hidden" name="tanggal"
                                        value="{{{now()->toDateString()}}}">
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                            <label>Content:</label>
                                            <textarea id="text-box" name="content" cols="10" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Upload</button>
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
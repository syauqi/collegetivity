@extends('layouts.backend.master')

@section('title', 'Edit Catatan Pelajaran — Collegetivity')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">📓📝 • Edit Catatan Pelajaran <span class="d-none d-md-inline"> —
                        {{$item->judul}}</span></h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah form untuk edit catatan pelajaran berjudul {{$item->judul}}. <span
                        class="d-none d-md-inline">
                        Catatan yang telah kamu tulis nantinya bisa kamu akses kok dimana saja dan kapan saja.
                        Selamat menulis dan berkreasi, ya!
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Catatan Pelajaran</h5>
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
                    <form class="row needs-validation" method="POST" action="{{route('notes.update', $item->id)}}"
                        enctype="multipart/form-data" novalidate="">
                        @method('PUT')
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="judul">Judul Catatan: <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-notes" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                                    <line x1="9" y1="7" x2="15" y2="7"></line>
                                                    <line x1="9" y1="11" x2="15" y2="11"></line>
                                                    <line x1="9" y1="15" x2="13" y2="15"></line>
                                                </svg>
                                            </span>
                                        </div>
                                        <input class="form-control" id="judul" name="judul" value="{{$item->judul}}"
                                            type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="matkul">Nama Mata Kuliah: (Optional)</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-book" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                    <line x1="3" y1="6" x2="3" y2="19"></line>
                                                    <line x1="12" y1="6" x2="12" y2="19"></line>
                                                    <line x1="21" y1="6" x2="21" y2="19"></line>
                                                </svg>
                                            </span>
                                        </div>
                                        <input class="form-control" id="matkul" name="matkul" value="{{$item->matkul}}"
                                            type="text" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="customFile">Thumbnail: (Optional)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih file thumbnail</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="hidden" name="author" value="{{Auth::user()->name}}">
                                <input class="form-control" type="hidden" name="tanggal"
                                    value="{{{now()->toDateString()}}}">
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Catatan: <span class="text-danger">*</span></label>
                                        <textarea id="text-box" name="content" cols="10" rows="2">
                                                {!!htmlspecialchars_decode($item->content)!!}
                                            </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                        <div class="col-sm-12">
                            <div class="btn-showcase">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <input class="btn btn-light" type="reset" value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
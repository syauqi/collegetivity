@extends('layouts.backend.master')

@section('title', 'Tambah Data Galeri — Collegetivity')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">🎨📸 • Upload Galeri Foto Baru</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah halaman untuk tambah foto galeri barumu. <span class="d-none d-md-inline">
                            Foto yang telah kamu upload nantinya bisa kamu akses kok dimana saja dan kapan saja.
                            Simpan semua hal terkait perkuliahanmu disini, ya.
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
                        <h5>Upload Foto Galeri</h5>
                    </div>
                    <form method="POST" action="{{route('galleries.store')}}" enctype="multipart/form-data"
                        class="needs-validation" novalidate="">
                        @csrf
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-row mb-3">
                                <div class="col-12 alert alert-danger py-1" role="alert">
                                    ⚠ • Maximal file yang dapat diupload adalab 5MB dan hanya menerima file
                                    gambar/images
                                </div>
                            </div>
                            <div class="form-row">
                                {{-- upload foto --}}
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="foto"
                                            aria-describedby="inputGroupFileAddon01" accept="image/*">>
                                        <label class="custom-file-label" for="inputGroupFile01">Pilih file gambar yang
                                            akan kamu upload ..</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value={{Auth::user()->email}}>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary m-r-15" type="submit">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs start-->
@endsection
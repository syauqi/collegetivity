@extends('layouts.backend.master')

@section('title', 'Tambah Data Galeri — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Tambah Data Galeri</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dihalaman ini anda dapat menambah foto di data galeri. Foto yang anda upload harus dibawah 5MB.
                        Jika
                        kalian
                        menemukan error atau bug silahkan hubungi developer [syauqi]
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
                        <h5>Tambah Foto Galeri</h5>
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
                            <div class="form-row">
                                {{-- upload foto --}}
                                <label for="foto">Upload Foto <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="foto"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary m-r-15" type="submit">Tambah</button>
                            <button class="btn btn-light" type="reset">Reset</button>
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
@extends('layouts.backend.master')

@section('title', 'File Tugas & Pelajaran — Collegetivity')
@section('content')

<div class="container-fluid">

    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">📂 • File Tugas & Pelajaran</h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah file yang yang telah kamu upload. <span class="d-none d-md-inline">
                        Disini kalian bisa menyimpan file berharga dan penting dunia perkuliahanmu dengan aman.
                        Batas maksimal file yang dapat diupload adalah 50MB
                        Ingin upload file?
                        upload file dengan menekan tombol tambah dibawah
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <iframe class="rounded-lg" src="/laravel-filemanager"
                style="width: 100%; height: 520px; overflow: hidden; border: none;box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;"></iframe>
        </div>
    </div>

</div>

@endsection
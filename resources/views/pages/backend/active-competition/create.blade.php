@extends('layouts.backend.master')

@section('title', 'Tambah Data Lomba Aktif — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Tambah Data Lomba Aktif</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dihalaman ini anda dapat menambah data perlombaan yang sedang dilaksanakan. Isi data dibawah ini
                        dengan benar dan
                        seksama sesuai aturan yang ditulis. Jika kalian
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
                        <h5>Tambah Data Lomba Aktif</h5>
                    </div>
                    <form method="POST" action="{{route('active-competitions.store')}}" enctype="multipart/form-data"
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
                                <label for="exampleFormControlInput1">Nama lomba <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-award" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="9" r="6"></circle>
                                                <polyline points="9 14.2 9 21 12 19 15 21 15 14.2"
                                                    transform="rotate(-30 12 9)"></polyline>
                                                <polyline points="9 14.2 9 21 12 19 15 21 15 14.2"
                                                    transform="rotate(30 12 9)"></polyline>
                                            </svg></span>
                                    </div>
                                    <input required type="text" class="form-control" name="nama_lomba"
                                        aria-describedby="basic-addon1">
                                </div>

                                <label for="exampleFormControlInput1">Tipe lomba <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-users" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                            </svg></span>
                                    </div>
                                    <select required class="custom-select" name="tipe_lomba" id="inputGroupSelect01">
                                        <option disabled selected>Pilih...</option>
                                        <option value="Individu">Individu</option>
                                        <option value="Tim">Tim</option>
                                    </select>
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
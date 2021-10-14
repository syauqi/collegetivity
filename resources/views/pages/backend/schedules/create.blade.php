@extends('layouts.backend.master')

@section('title', 'Atur Jadwal Pelajaran — Collegetivity')
@section('content')

@push('timepicker-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/timepicker.css')}}">
@endpush

<!-- file wrapper for better tabs start-->
<section>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute">
                <div class="card-header bg-primary">
                    <h5 class="text-white">📚⚙ • Atur Jadwal Pelajaran</h5>
                </div>
                <div class="card-body">
                    <p>
                        Di halaman ini kalian bisa menambahkan jadwal pelajaran yang nantinya akan muncul di halaman
                        awal dan halaman jadwal pelajaranmu, pastikan data yang telah kamu isi valid ya!
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
                        <h5>Atur Jadwal Pelajaran</h5>
                    </div>
                    <form method="POST" action="{{route('schedules.store')}}" enctype="multipart/form-data"
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
                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_matkul">Nama Mata Kuliah <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-box-multiple-1" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="7" y="3" width="14" height="14" rx="2"></rect>
                                                    <path
                                                        d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2">
                                                    </path>
                                                    <path d="M14 14v-8l-2 2"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input id="nama_matkul" type="text" class="form-control"
                                            value="{{old('nama_matkul')}}" name="nama_matkul" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_dosen">Nama Dosen Pengampu <span
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
                                        <input id="nama_dosen" type="text" class="form-control"
                                            value="{{old('nama_dosen')}}" name="nama_dosen" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 mb-2">
                                    <label for="hari">Hari <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="hari"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-man" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="5" r="2"></circle>
                                                    <path
                                                        d="M10 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5">
                                                    </path>
                                                </svg></label>
                                        </div>
                                        <select class="custom-select" id="hari" name="hari">
                                            <option value="" disabled selected>Pilih ...</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="angkatan">Kelas <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-users" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                                </svg></span>
                                        </div>
                                        <input required id="kelas" type="text" value="{{old('kelas')}}"
                                            class="form-control" name="kelas">
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">SKS <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-calendar-time" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4">
                                                    </path>
                                                    <circle cx="18" cy="18" r="4"></circle>
                                                    <path d="M15 3v4"></path>
                                                    <path d="M7 3v4"></path>
                                                    <path d="M3 11h16"></path>
                                                    <path d="M18 16.496v1.504l1 1"></path>
                                                </svg></span>
                                        </div>
                                        <input required id="sks" type="number" value="{{old('sks')}}"
                                            class="form-control" name="sks">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 mb-2">
                                    <label for="waktu_mulai">Waktu Mulai <span class="text-danger">*</span></label>
                                    <div class="input-group clockpicker mb-3 pull-center" data-placement="top"
                                        data-align="top" data-autoclose="true">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-box-multiple-1" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="7" y="3" width="14" height="14" rx="2"></rect>
                                                    <path
                                                        d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2">
                                                    </path>
                                                    <path d="M14 14v-8l-2 2"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input id="waktu_mulai" type="text" class="form-control"
                                            value="{{old('waktu_mulai')}}" name="waktu_mulai" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label for="waktu_selesai">Waktu Selesai <span class="text-danger">*</span></label>
                                    <div class="input-group clockpicker mb-3 pull-center" data-placement="top"
                                        data-align="top" data-autoclose="true">
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
                                        <input id="waktu_selesai" type="text" class="form-control"
                                            value="{{old('waktu_selesai')}}" name="waktu_selesai" required>
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
</section>

@push('timepicker-scripts')
<script src="{{url('cuba/assets/js/time-picker/jquery-clockpicker.min.js')}}"></script>
<script src="{{url('cuba/assets/js/time-picker/highlight.min.js')}}"></script>
<script src="{{url('cuba/assets/js/time-picker/clockpicker.js')}}"></script>
@endpush
<!-- file wrapper for better tabs start-->
@endsection
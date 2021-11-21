@extends('layouts.backend.master')

@section('title', 'Atur Jadwal Pelajaran — Collegetivity')
@section('content')

@push('timepicker-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/timepicker.css')}}">
@endpush

<div class="container-fluid">

    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">
                    📅📚 • Atur Jadwal Pelajaran
                </h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah form untuk tambah jadwal pelajaran mata kuliahmu.
                    <span class="d-none d-md-inline">
                        Data dibawah pastikan kamu isi dengan benar dan lengkap ya, nanti datanya akan kami simpan
                        dan dapat kamu akses dimana saja dan kapan saja.
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Atur Jadwal Pelajaran</h5>
                </div>
                <form method="POST" action="{{route('schedules.store')}}" enctype="multipart/form-data"
                    class="needs-validation">
                    @csrf
                    <div class="card-body">
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
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="nama_matkul">Nama Mata Kuliah <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-book" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                <line x1="3" y1="6" x2="3" y2="19"></line>
                                                <line x1="12" y1="6" x2="12" y2="19"></line>
                                                <line x1="21" y1="6" x2="21" y2="19"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <input id="nama_matkul" type="text" class="form-control"
                                        value="{{old('nama_matkul')}}" name="nama_matkul" required>
                                </div>
                            </div>

                            <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                            <div class="form-group col-md-6 mb-2">
                                <label for="nama_dosen">Nama Dosen Pengampu <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-users" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                            </svg>
                                        </span>
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
                                        <span class="input-group-text" for="hari">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-calendar" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <line x1="11" y1="15" x2="12" y2="15"></line>
                                                <line x1="12" y1="15" x2="12" y2="18"></line>
                                            </svg>
                                        </span>
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
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-building-community" width="20"
                                                height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8">
                                                </path>
                                                <line x1="13" y1="7" x2="13" y2="7.01"></line>
                                                <line x1="17" y1="7" x2="17" y2="7.01"></line>
                                                <line x1="17" y1="11" x2="17" y2="11.01"></line>
                                                <line x1="17" y1="15" x2="17" y2="15.01"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <input required id="kelas" type="text" value="{{old('kelas')}}" class="form-control"
                                        name="kelas">
                                </div>
                            </div>

                            <div class="form-group col-md-4 mb-2">
                                <label for="sks">SKS <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-list-numbers" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M11 6h9"></path>
                                                <path d="M11 12h9"></path>
                                                <path d="M12 18h8"></path>
                                                <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4"></path>
                                                <path d="M6 10v-6l-2 2"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <input required id="sks" type="number" value="{{old('sks')}}" class="form-control"
                                        name="sks">
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-primary py-2" role="alert">
                            Klik pada textbox atau input waktu mulai & waktu selesai nantinya akan muncul jam untuk
                            memilih waktu
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="waktu_mulai">Waktu Mulai <span class="text-danger">*</span></label>
                                <div class="input-group clockpicker mb-3 pull-center" data-placement="top"
                                    data-align="top" data-autoclose="true">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-clock" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <polyline points="12 7 12 12 15 15"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                    <input id="waktu_mulai" type="text" class="form-control"
                                        value="{{old('waktu_mulai')}}" name="waktu_mulai" readonly required>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label for="waktu_selesai">Waktu Selesai <span class="text-danger">*</span></label>
                                <div class="input-group clockpicker mb-3 pull-center" data-placement="top"
                                    data-align="top" data-autoclose="true">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-circle-check" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <path d="M9 12l2 2l4 -4"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <input id="waktu_selesai" type="text" class="form-control"
                                        value="{{old('waktu_selesai')}}" name="waktu_selesai" readonly required>
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

@push('timepicker-scripts')
<script src="{{url('cuba/assets/js/time-picker/jquery-clockpicker.min.js')}}"></script>
<script src="{{url('cuba/assets/js/time-picker/highlight.min.js')}}"></script>
<script src="{{url('cuba/assets/js/time-picker/clockpicker.js')}}"></script>
@endpush

@endsection
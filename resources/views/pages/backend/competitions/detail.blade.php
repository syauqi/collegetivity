@extends('layouts.backend.master')

@section('title', 'Detail Peserta Lomba — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Detail Peserta Lomba</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dihalaman ini adalah detail peserta lomba {{$item->nama_peserta}}.
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
                        <h5>Detail Peserta Lomba</h5>
                    </div>
                    <form method="POST" action="{{route('competitions.update', $item->id)}}"
                        enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @method('PUT')
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
                                {{-- nomor peserta input --}}
                                <div class="form-group col-md-5 mb-2">
                                    <label for="nomor_peserta">Nomor peserta</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
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
                                                </svg></span>
                                        </div>
                                        <input required id="nomor_peserta" disabled type="tel" class="form-control"
                                            value="{{$item->nomor_peserta}}" name="nomor_peserta">
                                    </div>
                                </div>
                                {{-- nama lengkap input --}}
                                <div class="form-group col-md-7 mb-2">
                                    <label for="nama_peserta">Nama peserta/Nama Ketua (Jika team)</label>
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
                                        <input required id="nama_peserta" disabled type="text"
                                            value="{{$item->nama_peserta}}" class="form-control" name="nama_peserta">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                {{-- alamat input --}}
                                <div class="form-group col-md-8 mb-2">
                                    <label for="nama_tim">Nama tim (Isi jika lomba nya team)</label>
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
                                        <input required id="nama_tim" disabled type="text" class="form-control"
                                            value="{{$item->nama_tim}}" name="nama_tim">
                                    </div>
                                </div>
                                {{-- nomor handphone input --}}
                                <div class="form-group col-md-4 mb-2">
                                    <label for="nomor_handphone">Nomor handphone</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-device-mobile-message"
                                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M11 3h10v8h-3l-4 2v-2h-3z"></path>
                                                    <path
                                                        d="M15 16v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h2">
                                                    </path>
                                                    <path d="M10 18v.01"></path>
                                                </svg></span>
                                        </div>
                                        <input id="nomor_handphone" disabled type="tel"
                                            value="{{$item->nomor_handphone}}" class="form-control"
                                            name="nomor_handphone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                {{-- gender input --}}
                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_sekolah">Nama sekolah</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-school" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                                </svg></label>
                                        </div>
                                        <input required disabled id="nama_sekolah" type="text" class="form-control"
                                            value="{{$item->nama_sekolah}}" name="nama_sekolah">
                                    </div>
                                </div>
                                {{-- angkatan input --}}
                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_lomba">Nama lomba</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-award" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="9" r="6"></circle>
                                                    <polyline points="9 14.2 9 21 12 19 15 21 15 14.2"
                                                        transform="rotate(-30 12 9)"></polyline>
                                                    <polyline points="9 14.2 9 21 12 19 15 21 15 14.2"
                                                        transform="rotate(30 12 9)"></polyline>
                                                </svg></span>
                                        </div>
                                        <input required disabled id="nama_lomba" type="text"
                                            value="{{$item->nama_lomba}}" class="form-control" name="nama_lomba">
                                    </div>
                                </div>

                                {{-- upload foto --}}
                                <div class="form-group col-md-4">
                                    <label for="bukti_pembayaran">Bukti pembayaran</label>
                                    <div class="input-group mb-3">
                                        <img class="img-fluid"
                                            src="{{url('storage/images/' . $item->bukti_pembayaran )}}">
                                    </div>
                                </div>
                            </div>


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
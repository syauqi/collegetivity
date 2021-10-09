@extends('layouts.backend.master')

@section('title', $item->nama . ' — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Edit Data Anggota • {{$item->nama}}</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dihalaman ini anda dapat mengubah atau mengedit data milik {{$item->nama}}.
                        Isi data dibawah ini dengan benar dan seksama sesuai aturan yang ditulis.
                        Jika kalian menemukan error atau bug silahkan hubungi developer [syauqi]
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
                    <form method="POST" action="{{route('members.update', $item->id)}}" enctype="multipart/form-data"
                        class="needs-validation" novalidate="">
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
                                {{-- nomor tanda anggota input --}}
                                <div class="form-group col-md-5 mb-2">
                                    <label for="nomor_tanda_anggota">Nomor tanda anggota <span
                                            class="text-danger">*</span></label>
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
                                        <input required id="nomor_tanda_anggota" type="number" class="form-control"
                                            value="{{$item->nomor_tanda_anggota}}" name="nomor_tanda_anggota">
                                    </div>
                                </div>
                                {{-- nama lengkap input --}}
                                <div class="form-group col-md-7 mb-2">
                                    <label for="nomor_registrasi">Nama lengkap <span
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
                                        <input required id="nama" type="text" value="{{$item->nama}}"
                                            class="form-control" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                {{-- alamat input --}}
                                <div class="form-group col-md-8 mb-2">
                                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-map-pins" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z">
                                                    </path>
                                                    <line x1="8" y1="7" x2="8" y2="7.01"></line>
                                                    <path
                                                        d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z">
                                                    </path>
                                                    <line x1="16" y1="15" x2="16" y2="15.01"></line>
                                                </svg></span>
                                        </div>
                                        <input required id="alamat" type="text" class="form-control"
                                            value="{{$item->alamat}}" name="alamat">
                                    </div>
                                </div>
                                {{-- nomor handphone input --}}
                                <div class="form-group col-md-4 mb-2">
                                    <label for="handphone">Nomor handphone</label>
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
                                        <input id="handphone" type="number" value="{{$item->handphone}}"
                                            class="form-control" name="handphone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                {{-- gender input --}}
                                <div class="form-group col-md-4 mb-2">
                                    <label for="gender">Gender <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01"><svg
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
                                        <select class="custom-select" id="inputGroupSelect01" name="gender">
                                            <option value="{{$item->gender}}" selected>
                                                {{$item->gender}}</option>
                                            <option value="Wanita">Wanita</option>
                                            <option value="Pria">Pria</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- angkatan input --}}
                                <div class="form-group col-md-4 mb-2">
                                    <label for="angkatan">Angkatan <span class="text-danger">*</span></label>
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
                                        <input required id="angkatan" type="number" value="{{$item->angkatan}}"
                                            class="form-control" name="angkatan">
                                    </div>
                                </div>
                                {{-- tahun masuk input --}}
                                <div class="form-group col-md-4 mb-2">
                                    <label for="tahun_masuk">Tahun masuk <span class="text-danger">*</span></label>
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
                                        <input required id="tahun_masuk" type="number" value="{{$item->tahun_masuk}}"
                                            class="form-control" name="tahun_masuk">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                {{-- ambalan input --}}
                                <div class="form-group col-md-12 mb-2">
                                    <label for="tahun_masuk">Ambalan <span class="text-danger">*</span></label>
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
                                        <select class="custom-select" id="inputGroupSelect01" name="ambalan">
                                            <option value="{{$item->ambalan}}" selected>{{$item->ambalan}}
                                            </option>
                                            <option value="Ciung Wanara">Ciung Wanara</option>
                                            <option value="Dyah Pitaloka">Dyah Pitaloka</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- upload foto --}}
                            <label for="foto">Upload Foto</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="foto"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="form-row">
                                {{-- input instagram --}}
                                <div class="form-group col-md-4">
                                    <label for="instagram">Instagram</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-instagram" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                                </svg></span>
                                        </div>
                                        <input id="instagram" type="text" class="form-control"
                                            value="{{$item->instagram}}" name="instagram">
                                    </div>
                                </div>
                                {{-- input twitter --}}
                                <div class="form-group col-md-4">
                                    <label for="twitter">Twitter</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-twitter" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z">
                                                    </path>
                                                </svg></span>
                                        </div>
                                        <input id="twitter" type="text" class="form-control" value="{{$item->twitter}}"
                                            name="twitter">
                                    </div>
                                </div>
                                {{-- input facebook --}}
                                <div class="form-group col-md-4">
                                    <label for="facebook">Facebook</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-brand-facebook" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                    </path>
                                                </svg></span>
                                        </div>
                                        <input id="facebook" type="text" class="form-control"
                                            value="{{$item->facebook}}" name="facebook">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary m-r-15" type="submit">Ubah</button>
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
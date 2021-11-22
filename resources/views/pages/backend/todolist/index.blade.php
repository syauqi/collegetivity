@extends('layouts.backend.master')

@section('title', 'Todolist — Collegetivity')
@section('content')

@push('todo-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/todo.css')}}">
@endpush

<section>

    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">✅ • To-Do List</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah todolist yang telah kamu tambahkan. <span class="d-none d-md-inline">
                            Jika kamu selesai mengerjakan tugas yang telah kamu kerjakan cukup klik tombol checklist di
                            bagian kanan, Selamat Berproduktifitas!. Ingin tambah tugas?
                            tambah
                            tugasmu
                            di tombol berwarna ungu dibawah
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>To-Do List</h5>
                    </div>
                    <div class="card-body">
                        <div class="todo">
                            <div class="todo-list-wrapper">
                                <div class="todo-list-container">
                                    <div class="todo-list-body">
                                        @if ($errors->any())
                                        <div class="alert alert-danger mb-5">
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
                                        <ul id="todo-list">
                                            @forelse ($items as $item)
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">{{$item->nama_tugas}}</h4>
                                                    <span class="task-action-btn">
                                                        <form action="{{route('todolist.destroy', $item->id)}}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-success py-1 px-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-circle-check mt-1"
                                                                    width="20" height="20" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <circle cx="12" cy="12" r="9"></circle>
                                                                    <path d="M9 12l2 2l4 -4"></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </span>
                                                </div>
                                            </li>
                                            @empty
                                            <div class="col-md-6 mx-auto">
                                                <img src="{{url('images/illustrations/todo-list.png')}}"
                                                    class="img-fluid">
                                            </div>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div class="todo-list-footer">
                                        <div class="add-task-btn-wrapper pull-right"><span class="add-task-btn">
                                                <button class="btn btn-primary"><i class="icon-plus"></i> &nbsp; Tambah
                                                    tugas
                                                    baru</button></span></div>
                                        <form method="POST" action="{{route('todolist.store')}}"
                                            enctype="multipart/form-data" class="needs-validation" novalidate="">
                                            @csrf
                                            <div class="new-task-wrapper">
                                                <input class="form-control mb-3" name="nama_tugas" type="text"
                                                    placeholder="Masukkan tugas baru anda disini .."></input>
                                                <input type="hidden" name="is_done" value="0">
                                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>
                                                <span class="btn btn-danger cancel-btn"
                                                    id="close-task-panel">Tutup</span>
                                                <button type="submit" class="btn btn-success ml-3 add-new-task-btn">
                                                    Tambah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-popup hide">
                                <p><span class="task"></span><span class="notification-text"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('todo-scripts')
<script src="{{url('cuba/assets/js/todo/todo.js')}}"></script>
@endpush

@endsection
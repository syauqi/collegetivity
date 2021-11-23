@extends('layouts.backend.master')

@section('title', 'Selamat datang di Collegetivity ' . Auth::user()->name . '!')
@section('content')

@push('datatable-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/scrollable.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatable-extension.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.3.1/dist/css/splide.min.css">
@endpush

<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-xl-12 col-12 mt-4">
            <div class="splide"
                style="box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px; border-radius:8px;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{url('images/splide/announcement-dashboard-images-1.png')}}"
                                class="d-block w-100" style="border-radius:8px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{url('images/splide/announcement-dashboard-images-2.png')}}"
                                class="d-block w-100" style="border-radius:8px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{url('images/splide/announcement-dashboard-images-3.png')}}"
                                class="d-block w-100" style="border-radius:8px;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row second-chart-list third-news-update">
        <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
            <div class="card o-hidden profile-greeting">
                <div class="card-body">
                    <div class="media">
                        <div class="badge-groups w-100">
                            <div class="badge f-12">
                                <i class="mr-1" data-feather="clock"></i>
                                <span id="txt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="greeting-user text-center">
                        <div class="profile-vector">
                            <img class="img-fluid" src="{{url("cuba/assets/images/dashboard/welcome.png")}}" alt="">
                        </div>
                        <h4 class="f-w-600">
                            <span id="greeting">Halo!</span>
                        </h4>
                        <p>
                            <span>
                                Selamat datang di Collegetivity, kamu dapat mengelola semua
                                data akademik dan menjelajahi semua resources disini
                            </span>
                        </p>
                        <div class="whatsnew-btn">
                            <a href="{{url('dashboard/jadwal-pelajaran')}}" class="btn btn-primary px-4 py-2">Mulai
                                Sekarang ⇾
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
            <div class="card gradient-primary o-hidden py-2">
                <div class="card-body">
                    <div class="default-datepicker">
                        <div class="datepicker-here" data-language="en"></div>
                    </div>
                    <span class="default-dots-stay overview-dots full-width-dots">
                        <span class="dots-group">
                            <span class="dots dots1">
                            </span>
                            <span class="dots dots2 dot-small">
                            </span>
                            <span class="dots dots3 dot-small">
                            </span>
                            <span class="dots dots4 dot-medium">
                            </span>
                            <span class="dots dots5 dot-small">
                            </span>
                            <span class="dots dots6 dot-small">
                            </span>
                            <span class="dots dots7 dot-small-semi">
                            </span>
                            <span class="dots dots8 dot-small-semi">
                            </span>
                            <span class="dots dots9 dot-small">
                            </span>
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 xl-50 news box-col-6">
            <div class="card">
                <div class="card-header">
                    <div class="header-top">
                        <h5 class="m-0">✅ • To-Do List</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    @forelse ($todolist as $item)
                    <div class="news-update">
                        <h6>{{$item->nama_tugas}}</h6>
                        <a href="{{route('todolist.done', $item->id) }}">
                            Tandai sebagai selesai ✔
                        </a>
                    </div>
                    @empty
                    <div class="news-update">
                        <img src="{{url('images/illustrations/todo-list.png')}}" class="img-fluid">
                    </div>
                    @endforelse
                </div>
                <div class="card-footer">
                    <div class="bottom-btn">
                        <a href="{{url('/dashboard/todolist')}}">Lihat semua todolist ...</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 xl-50 appointment-sec box-col-6">
            <div class="row">
                <div class="col-xl-12 appointment">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">📝 • Catatanmu</h5>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="appointment-table table-responsive">
                                <table class="table">
                                    <tbody>
                                        @forelse ($catatan as $item)
                                        <tr>
                                            <td class="font-weight-bold">
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="font-weight-bold">{{$item->judul}}</div>
                                                        <div class="text-muted"><a href="#"
                                                                class="text-reset">{{$item->matkul}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-right">
                                                <a href="{{route('notes.show', $item->id)}}">
                                                    <div class="button btn btn-primary">Lihat</div>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>
                                                <h6>Kamu belum buat catatan, <a href="#">buat sekarang ⇾</a></h6>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="ml-0 pl-0 py-2 text-left" style="border-top:none;">
                                                <a href="{{url('/dashboard/catatan-pelajaran')}}"> Lihat semua ... </a>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 alert-sec">
                    <div class="card bg-img">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Butuh Bantuanmu</h5>
                                <div class="dot-right-icon">
                                    <i class="fa fa-share"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="body-bottom">
                                <h6>Jangan lupa untuk share dan ajak temanmu!</h6>
                                <span class="font-roboto">
                                    Ajak temanmu menggunakan collegetivity dan share ke sosial media biar bisa bantu
                                    teman teman mahasiswa yang lain juga, ya!
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>📚 • Jadwal Pelajaranmu</span>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="display" id="auto-fill">
                            <thead>
                                <tr>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Kelas</th>
                                    <th>SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="avatars mr-2">
                                                <div class="avatar ratio">
                                                    <img style="object-fit: cover;
                                                        width: 40px;
                                                        height: 40px;" class="b-r-8"
                                                        src="https://ui-avatars.com/api/?background=4466f2&color=fff&name={{$item->nama_dosen}}">
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="font-weight-bold">{{$item->nama_matkul}}</div>
                                                <div class="text-muted">
                                                    <a href="#" class="text-reset">{{$item->nama_dosen}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->hari}}</td>
                                    <td>({{$item->waktu_mulai}} — {{$item->waktu_selesai}})</td>
                                    <td>{{$item->kelas}}</td>
                                    <td>{{$item->sks}}</td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Kelas</th>
                                    <th>SKS</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('datatable-scripts')
<script src="{{url('cuba/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/custom.js')}}"></script>
<script src="{{url('cuba/assets/js/tooltip-init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.3.1/dist/js/splide.min.js"></script>
<script>
    new Splide( '.splide',{
        autoplay : 'playing',
        rewind: true,
        arrows: false,
        interval:1600,
    } ).mount();
</script>
@endpush

@endsection
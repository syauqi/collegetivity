@extends('layouts.backend.master')

@section('title', 'Bookmarks — Collegetivity')
@section('content')

@push('galleries-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/photoswipe.css')}}">
@endpush


<!-- file wrapper for better tabs start-->
<div>
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">🔖 • Bookmarks</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah kumpulan link bookmarks yang telah kamu tambahkan. <span
                            class="d-none d-md-inline">
                            Bookmarks dibawah juga bisa kamu
                            akses dimana saja dan kapan saja, cocok buat simpen link zoom atau link penting lainnya.
                            Ingin tambah bookmarks?
                            tambah
                            bookmarks
                            <a href="#">disini ⇾</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- pages title header end-->
    <!-- main content start-->
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            @forelse ($items as $item)
            <div class="col-xl-12 xl-100">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="f-w-600"><a href="{{$item->url}}">{{$item->judul}}</a>
                                        <form action="{{route('bookmarks.destroy', $item->id)}}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')<button
                                                class="badge badge-danger pull-right">Hapus</button>
                                        </form>
                                    </h6>
                                    <a class="small" href="{{$item->url}}">{{$item->url}}
                                    </a>
                                </div>
                            </div>
                            <hr class="mb-0">
                            <p class="mb-0 mt-2">
                                {{substr(strip_tags(htmlspecialchars_decode($item->deskripsi)),0,225)}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-xl-12 xl-100">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-md-6 mx-auto">
                                        <img src="{{url('images/illustrations/bookmarks.png')}}" class="img-fluid">
                                        <a href="{{('/dashboard/bookmarks/tambah-bookmarks')}}">
                                            <p class="text-dark text-underline text-center mt-2">
                                                Tambah Bookmarks Baru
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>


@push('galleries-scripts')
<script src="{{url('cuba/assets/js/isotope.pkgd.js')}}"></script>
<script src="{{url('cuba/assets/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{url('cuba/assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{url('cuba/assets/js/photoswipe/photoswipe.js')}}"></script>
<script src="{{url('cuba/assets/js/masonry-gallery.js')}}"></script>
<script src="{{url('cuba/assets/js/tooltip-init.js')}}"></script>
@endpush

@endsection
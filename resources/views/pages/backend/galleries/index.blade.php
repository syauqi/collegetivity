@extends('layouts.backend.master')

@section('title', 'Galeri Foto — Collegetivity')
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
                    <h5 class="text-white">📷 • Galeri Fotomu</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah foto yang telah kamu upload. <span class="d-none d-md-inline">
                            Foto dibawah juga bisa kamu
                            kamu lihat dengan menekan foto yang ingin kamu lihat, disana juga kamu bisa mendownload foto
                            dan menghapusnya. Ingin upload foto?
                            tambah
                            fotomu
                            <a href="#">disini ⇾</a>
                        </span>
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
                        <h5>Semua fotomu</h5>
                    </div>
                    <div class="gallery my-gallery card-body row" itemscope="">
                        @forelse ($items as $item)
                        <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope=""><a
                                href="{{url('storage/images/' . $item->foto)}}" itemprop="contentUrl"
                                data-size="1600x950"><img class="img-thumbnail"
                                    src="{{url('storage/images/' . $item->foto)}}" itemprop="thumbnail"
                                    alt="Image description"></a>
                            <figcaption itemprop="caption description">
                                <a href="{{url('storage/images/' . $item->foto)}}" class="btn btn-success py-1 px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye"
                                        width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="2"></circle>
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                        </path>
                                    </svg>
                                </a>
                                <a download href="{{url('storage/images/' . $item->foto)}}"
                                    class="btn btn-primary py-1 px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-download" width="16" height="16"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                        <polyline points="7 11 12 16 17 11"></polyline>
                                        <line x1="12" y1="4" x2="12" y2="16"></line>
                                    </svg>
                                </a>
                                <form action="{{route('galleries.destroy', $item->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger py-1 px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-trash" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="4" y1="7" x2="20" y2="7"></line>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                    </button>
                                </form>
                            </figcaption>
                        </figure>
                        @empty
                        <div class="col-md-7 mx-auto">
                            <a href="{{url('/dashboard/galeri-foto/tambah-foto')}}" target="_blank">
                                <img src="{{url('images/illustrations/galeri.png')}}" class="img-fluid">
                            </a>
                        </div>
                        @endforelse
                    </div>
                </div>
                <!-- Root element of PhotoSwipe. Must have class pswp.-->
                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>

                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                <button class="pswp__button pswp__button--share" title="Share"></button>

                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
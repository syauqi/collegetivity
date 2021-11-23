<!--====== Start Header ======-->
<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{url('/')}}">
                        <h1 class="font-weight-normal">🎓</h1>
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="#">|</a>
                        </li>
                        <li class="active">
                            <a href="{{url('/')}}">
                                Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('fitur')}}">Fitur Aplikasi</a>
                        </li>
                        <li>
                            <a href="{{url('tentang')}}">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak Kami</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Masuk Aplikasi
                        </a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{('/fitur')}}">Fitur Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/tentang')}}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{('/kontak')}}">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="{{('/login')}}">Masuk Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/register')}}">Daftar Akun</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <h1 class="font-weight-normal">🎓</h1>
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">Tentang Kami</h5>
                <p>
                    Collegetivity adalah aplikasi yang membantu dunia perkuliahan mahasiswa mulai dari mengorganisasi
                    pelajaran, tugas dan jadwal serta resources yang membantu para mahasiswa.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Kontak Kami</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        Universitas Siliwangi, Tasikmalaya
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:apps.collegetivity@gmail.com">apps.collegetivity@gmail.com</a>
                        <a href="#" target="_blank">collegetivity.herokuapp.com</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+6285156162840">+62 851-5616-2840</a></span>
                        <span><a href="tel:+6282127350768">+62 821-2735-0768</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->
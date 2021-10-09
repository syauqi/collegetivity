<div class="sidebar-wrapper">
    <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid for-light"
                src="{{url('cuba/assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark"
                src="{{url('cuba/assets/images/logo/logo_dark.png')}}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
        </div>
    </div>
    <div class="logo-icon-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid"
                src="../assets/images/logo/logo-icon.png" alt=""></a></div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2"
                            aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">Utama</h6>
                        <p class="lan-2">Dashboard & statistik</p>
                    </div>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather="home"> </i><span>Dashboard</span></a></li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Pengelolaan Data</h6>
                        <p class="lan-9">Kelola semua data disini</p>
                    </div>
                </li>
                {{-- pengelolaan data anggota --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Anggota </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data anggota</a></li>
                        <li><a href="#">Tambah data anggota</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data artikel --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="edit"></i><span>Artikel
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data artikel</a></li>
                        <li><a href="#">Tambah data artikel</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data galeri --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="image"></i><span>Galeri </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data galeri</a></li>
                        <li><a href="#">Tambah data galeri</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data merchandise --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="shopping-bag"></i><span>Merchandise
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data merchandise</a></li>
                        <li><a href="#">Tambah data merchandise</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Pengumuman & Lomba</h6>
                        <p class="lan-9">Umumkan segala hal terkait lomba</p>
                    </div>
                </li>
                {{-- pengelolaan data pengumuman --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="alert-circle"></i><span>Pengumuman
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data pengumuman</a></li>
                        <li><a href="#">Tambah data pengumuman</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data lomba --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="user"></i><span>Peserta
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data Peserta Lomba</a></li>
                        <li><a href="#">Tambah data perserta lomba</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="award"></i><span>Perlombaan
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data perlombaan yang diselenggarakan</a>
                        </li>
                        <li><a href="#">Tambah data lomba yang sedang
                                berlangsung</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>

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
                        <h6>Utama</h6>
                        <p>Dashboard & statistik</p>
                    </div>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather="home"> </i><span>Dashboard</span></a></li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola tugas & jadwal</h6>
                        <p>Todolist, Kalender & Timetable  </p>
                    </div>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather="check-square"></i><span>Todolist</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather="calendar"></i><span>Kalender</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather=clock></i><span>Timetable</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather=bookmark></i><span>Bookmark</span></a></li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola data akademik</h6>
                        <p>Jadwal, Catatan & Galeri</p>
                    </div>
                </li>
                {{-- pengelolaan data anggota --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="book"></i><span>Jadwal pelajaran</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Jadwal Pembelajaranmu</a></li>
                        <li><a href="#">Atur jadwal pembelajaran</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data artikel --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="edit"></i><span>Catatan pelajaran
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Catatan Pembelajaranmu</a></li>
                        <li><a href="#">Tulis catatan pembelajaran baru </a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="bar-chart"></i><span>Perkembangan Nilai
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Perkembangan nilaimu</a></li>
                        <li><a href="#">Input data nilai pelajaranmu </a></li>
                    </ul>
                </li>
                {{-- pengelolaan data galeri --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="image"></i><span>Galeri Foto</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Galeri fotomu</a></li>
                        <li><a href="#">Upload galeri foto baru</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data merchandise --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="paperclip"></i><span>File Tugas
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">File tugasmu</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Produktifitas</h6>
                        <p>Semua hal untuk produktif</p>
                    </div>
                </li>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather="clipboard"></i><span>Whiteboard</span></a></li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="clock"></i><span>Pomodoro
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Pomofocus</a></li>
                        <li><a href="#">Lifeat</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>

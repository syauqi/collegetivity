<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn"><a href="#"><img class="img-fluid" src="#" alt=""></a>
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2"
                            aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title pt-0">
                    <div>
                        <h6>Halaman Utama</h6>
                        <p>Dashboard & statistik</p>
                    </div>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('dashboard')}}"><i
                            data-feather="home">
                        </i><span>Dashboard</span></a></li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola data akademik</h6>
                        <p>Jadwal, Catatan & Galeri</p>
                    </div>
                </li>
                {{-- pengelolaan data anggota --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="book"></i><span>Jadwal
                            pelajaran</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/jadwal-pelajaran')}}">Jadwal pelajaranmu</a></li>
                        <li><a href="{{url('/dashboard/jadwal-pelajaran/atur-jadwal')}}">Atur jadwal pelajaran</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data artikel --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="edit"></i><span>Catatan pelajaran
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/catatan-pelajaran')}}">Catatan pelajaranmu</a></li>
                        <li><a href="{{url('/dashboard/catatan-pelajaran/tambah-catatan')}}">Tulis catatan pelajaran
                                baru </a></li>
                    </ul>
                </li>
                {{-- pengelolaan data galeri --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="image"></i><span>Galeri
                            Foto</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/galeri-foto')}}">Galeri fotomu</a></li>
                        <li><a href="{{url('/dashboard/galeri-foto/tambah-foto')}}">Upload galeri foto baru</a></li>
                    </ul>
                </li>
                {{-- pengelolaan data merchandise --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/file-tugas')}}"><i
                            data-feather="paperclip"></i><span>File
                            Tugas
                        </span></a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola tugas & jadwal</h6>
                        <p>Todolist, Kalender & Timetable </p>
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
                        <h6>Produktifitas</h6>
                        <p>Semua hal untuk produktif</p>
                    </div>
                </li>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                            data-feather="clipboard"></i><span>Whiteboard</span></a></li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="music"></i><span>Audio
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Moodly</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="clock"></i><span>Pomodoro
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Pomofocus</a></li>
                        <li><a href="#">Lifeat.io</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Resources</h6>
                        <p>Semua website yang membantumu</p>
                    </div>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="book-open"></i><span>Journal
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Pomofocus</a></li>
                        <li><a href="#">Lifeat</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="globe"></i><span>Translator
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Pomofocus</a></li>
                        <li><a href="#">Lifeat</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="share"></i><span>Grammar
                        </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Pomofocus</a></li>
                        <li><a href="#">Lifeat</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="search"></i><span>Plagiarism Checker
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
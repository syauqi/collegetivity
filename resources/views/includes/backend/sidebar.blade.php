<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#">
                        <img class="img-fluid" src="#" alt="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span>
                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="sidebar-main-title pt-0">
                    <div>
                        <h6>Halaman Utama</h6>
                        <p>Dashboard & Overview</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('dashboard')}}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Data Akademik</h6>
                        <p>Jadwal, Catatan, Galeri & File</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="book"></i>
                        <span>Jadwal Pelajaran</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li class="active">
                            <a href="{{url('/dashboard/jadwal-pelajaran')}}">
                                Data Jadwal Pelajaran
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/jadwal-pelajaran/atur-jadwal')}}">
                                Atur & Tambah Jadwal Pelajaran
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="edit"></i>
                        <span>Catatan & Tulisan</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/catatan-pelajaran')}}">
                                Semua Catatan Pelajaran
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/catatan-pelajaran/tambah-catatan')}}">
                                Tulis & Tambah Catatan Baru
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/file-tugas')}}">
                        <i data-feather="paperclip"></i>
                        <span>File Manager</span>
                    </a>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="image"></i>
                        <span>Galeri Foto</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/galeri-foto')}}">
                                Semua Galeri & Foto
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/galeri-foto/tambah-foto')}}">
                                Upload Foto Baru
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Todolist & Bookmark</h6>
                        <p>Todolist, Kalender & Bookmark</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/todolist')}}">
                        <i data-feather="check-square"></i>
                        <span>Todolist</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/calendar')}}">
                        <i data-feather="calendar"></i>
                        <span>Kalender</span>
                    </a>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="bookmark"></i>
                        <span>Bookmark</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/bookmarks')}}">
                                Semua Bookmarks
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/bookmarks/tambah-bookmarks')}}">
                                Tambah Bookmarks Baru
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-main-title">
                    <div>
                        <h6>Produktifitas</h6>
                        <p>Whiteboard, Audio & Pomodoro</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/whiteboard')}}">
                        <i data-feather="clipboard"></i>
                        <span>Whiteboard</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="music"></i>
                        <span>Audio Relaxation</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/audio/moodly')}}">Moodly</a></li>
                        <li><a href="{{url('/dashboard/audio/shhhnoise')}}">Shhhnoise</a></li>
                        <li><a href="{{url('/dashboard/audio/poolsuite')}}">Poolsuite</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="clock"></i>
                        <span>Pomodoro Timer</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/pomodoro/pomofocus')}}">Pomofocus</a></li>
                        <li><a href="{{url('/dashboard/pomodoro/lifeat')}}">Lifeat.io</a></li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="airplay"></i>
                        <span>Virtual Meeting</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/virtual-meeting/skyoffice')}}">Skyoffice</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Resources</h6>
                        <p>Semua website yang membantumu</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/journal')}}">
                        <i data-feather="book-open"></i>
                        <span>Journal</span>
                    </a>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/e-book')}}">
                        <i data-feather="book"></i>
                        <span>E-Book</span>
                    </a>
                </li>

                <li class="sidebar-list invisible">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/e-book')}}">
                        <i data-feather="book"></i>
                        <span>E-Book</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
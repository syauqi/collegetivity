<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png"
                        alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper pl-0">
            <ul class="horizontal-menu">
                <li class="mega-menu outside d-inline-block d-md-none"><a class="nav-link" href="#!"><i
                            data-feather="user"></i><span>
                            Anggota</span></a>
                    <div class="mega-menu-container nav-submenu menu-to-be-close header-mega onhover-dropdown">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col mega-box">
                                    <div class="link-section icon">
                                        <div>
                                            <h6>{{Auth::user()->name}}</h6>
                                        </div>
                                        <ul>
                                            <form action="{{ url('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-danger text-small">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-logout" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                                        </path>
                                                        <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                                    </svg> &nbsp; <span
                                                        class="d-inline-block text-dark my-auto">Keluar</span>
                                                </button>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="level-menu outside"><a class="nav-link" href="#!"><i data-feather="book"></i><span>Buat
                            Catatan</span></a>
                </li>
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="profile-nav onhover-dropdown p-0 mr-0">
                    <div class="media profile-media"><img class="b-r-10"
                            src="https://ui-avatars.com/api/?background=4466f2&color=fff&name={{Auth::user()->name}}"
                            width="37px">
                        <div class="media-body"><span>{{Auth::user()->name}}</span>
                            <p class="mb-0 font-roboto">👨🏻‍🎓 Mahasiswa <i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{route('logout')}}" onclick=" event.preventDefault();
                                document.getElementById('logout-form').submit();"><i data-feather="log-out">
                                </i><span>Log out</span></a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
       <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
       <div class="ProfileCard-details">
       <div class="ProfileCard-realName">nama</div>
       </div>
       </div>
     </script>
        <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
        </script>
    </div>
</div>
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
                <li class="mega-menu outside d-block d-md-none">
                    <a class="nav-link" href="{{route('logout')}}" onclick=" event.preventDefault();
                    document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>
                        <span>
                            Log out
                        </span>
                    </a>

                </li>
                <li class="level-menu outside">
                    <a class="nav-link" href="#!"><i data-feather="plus-square"></i>
                        <span class="d-none d-md-inline-block">
                            Catatan Pelajaran
                        </span>
                        <span class="d-inline-block d-md-none">
                            Catatan
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="text-decoration-none">
                    <a href="bookmark" data-toggle="tooltip" data-placement="bottom" title="Pomodoro">
                        <i class="text-dark text-decoration-none" data-feather="clock"> </i>
                    </a>
                </li>
                <li class="text-decoration-none">
                    <a href="bookmark" data-toggle="tooltip" data-placement="bottom" title="To-do List">
                        <i class="text-dark text-decoration-none" data-feather="check-square"> </i>
                    </a>
                </li>
                <li class="onhover-dropdown">
                    <div>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifikasi"></a> <i
                            data-feather="bell"> </i>
                    </div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li><i data-feather="bell"></i>
                            <h6 class="f-18 mb-0">Notifikasi</h6>
                        </li>
                        <li class="text-left">
                            <p class="text-left">Segera lengkapi data jadwal pelajaran
                                dan data kuliahmu disini ya ✨</p>
                            <small><a class="text-left" href="">Atur jadwal pelajaranmu ⇾</a></small>
                        </li>
                    </ul>
                </li>
                <li class="text-decoration-none">
                    <a href="bookmark">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Bookmark"> <i
                                class="text-dark text-decoration-none" data-feather="star"> </i></a>
                    </a>
                </li>
                <li>
                    <div class="mode"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Dark Mode"><i
                                data-feather="moon"> </i></a></div>
                </li>
                <li class="maximize"><a data-toggle="tooltip" data-placement="bottom" title="Full Screen"
                        class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                <li class="profile-nav onhover-dropdown p-0 ml-2 mr-0">
                    <div class="media profile-media"><img class="b-r-10"
                            src="https://ui-avatars.com/api/?background=4466f2&color=fff&name={{Auth::user()->name}}"
                            width="37px">
                        <div class="media-body"><span>{{Auth::user()->name}}</span>
                            <p class="mb-0 font-roboto">👨🏻‍🎓 Mahasiswa <i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{route('logout')}}" onclick=" event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i
                                    data-feather="log-out">
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
        <div class="ProfileCard-realName">name</div>
        </div>
        </div>
      </script>
        <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
        </script>
    </div>
</div>
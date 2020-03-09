<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme-notika/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/meanmenu/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/notika-custom-icon.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/wave/waves.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('theme-notika/css/responsive.css')}}">
    <script src="{{ asset('theme-notika/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a style="color:white; font-size:24px">
                            ESponsorship |  @yield('jenis_user_name')
                        </a>
                        {{-- <a href="#"><img src="{{ asset('theme-notika/img/logo/logo.png')}}" alt="" /></a> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle"><span><i
                                            class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle"><span><i
                                            class="notika-icon notika-mail"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Messages</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/1.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/2.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/4.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/1.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/2.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button"
                                    aria-expanded="false" class="nav-link dropdown-toggle"><span><i
                                            class="notika-icon notika-alarm"></i></span>
                                    <div class="spinner4 spinner-4"></div>
                                    <div class="ntd-ctn"><span>3</span></div>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notification</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/1.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/2.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/4.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/1.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="{{ asset('theme-notika/img/post/2.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle"><span><i
                                            class="notika-icon notika-menus"></i></span>
                                    <div class="spinner4 spinner-4"></div>
                                    <div class="ntd-ctn"><span>2</span></div>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Tasks</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                        <div class="skill">
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>HTML5 Validation Report</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="95%"
                                                    style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>95%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Google Chrome Extension</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="85%"
                                                    style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>85%</span> </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Social Internet Projects</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="75%"
                                                    style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>75%</span> </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Bootstrap Admin</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="65%"
                                                    style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>65%</span> </div>
                                            </div>
                                            <div class="progress progress-bt">
                                                <div class="lead-content">
                                                    <p>Youtube App</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="55%"
                                                    style="width: 55%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>55%</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle">
                                    <span><i class="notika-icon notika-chat"></i></span>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Chat</h2>
                                    </div>
                                    <div class="search-people">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" placeholder="Search People" />
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="{{ asset('theme-notika/img/post/1.jpg')}}" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i>
                                                    </div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="{{ asset('theme-notika/img/post/2.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Last seen 3 hours ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="{{ asset('theme-notika/img/post/4.jpg')}}" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Last seen 2 minutes ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="{{ asset('theme-notika/img/post/1.jpg')}}" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i>
                                                    </div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="{{ asset('theme-notika/img/post/2.jpg')}}" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i>
                                                    </div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Approval User</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="{{'approval/perusahaan'}}">Approval Perusahaan</a></li>
                                        <li><a href="{{'approval/mahasiswa'}}">Approval Mahasiswa</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Manajemen User</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Manajemen Perusahaan</a></li>
                                        <li><a href="google-map.html">Manajemen Mahasiswa</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active">
                            <a data-toggle="tab" href="#home"><i class="notika-icon notika-house"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#approval_user"><i class="notika-icon notika-edit"></i> 
                                Approval User
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#manajemen_user"><i class="notika-icon notika-form"></i> 
                                Manajemen User
                            </a>
                        </li>
                        <li class="pull-right">
                            <a data-toggle="tab" href="#Page" onclick="$('#logout-form').submit();"><i
                                    class="notika-icon notika-support"></i>{{auth()->user()->nama}} | Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="home" class="tab-pane notika-tab-menu-bg animated flipInX"></div>
                        <div id="approval_user" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{'approval/perusahaan'}}">Approval Perusahaan</a></li>
                                <li><a href="{{'approval/mahasiswa'}}">Approval Mahasiswa</a></li>
                            </ul>
                        </div>
                        <div id="manajemen_user" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="animations.html">Manajemen Perusahaan</a></li>
                                <li><a href="google-map.html">Manajemen Mahasiswa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @yield('content')

    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
                            . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('theme-notika/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/wow.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/jquery-price-slider.js')}}"></script>
    <script src="{{ asset('theme-notika/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <script src="{{ asset('theme-notika/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/counterup/counterup-active.js')}}"></script>
    <script src="{{ asset('theme-notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('theme-notika/js/jvectormap/jvectormap-active.js')}}"></script>
    <script src="{{ asset('theme-notika/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/sparkline/sparkline-active.js')}}"></script>
    <script src="{{ asset('theme-notika/js/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('theme-notika/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('theme-notika/js/flot/curvedLines.js')}}"></script>
    <script src="{{ asset('theme-notika/js/flot/flot-active.js')}}"></script>
    <script src="{{ asset('theme-notika/js/knob/jquery.knob.js')}}"></script>
    <script src="{{ asset('theme-notika/js/knob/jquery.appear.js')}}"></script>
    <script src="{{ asset('theme-notika/js/knob/knob-active.js')}}"></script>
    <script src="{{ asset('theme-notika/js/wave/waves.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/wave/wave-active.js')}}"></script>
    <script src="{{ asset('theme-notika/js/chat/moment.min.js')}}"></script>
    <script src="{{ asset('theme-notika/js/chat/jquery.chat.js')}}"></script>
    <script src="{{ asset('theme-notika/js/todo/jquery.todo.js')}}"></script>
    <script src="{{ asset('theme-notika/js/plugins.js')}}"></)script>    
    <script src="{{ asset('theme-notika/js/main.js')}}"></script>
    {{-- <script src="{{ asset('theme-notika/js/tawk-chat.js')}}"></script> --}}
</body>

</html>
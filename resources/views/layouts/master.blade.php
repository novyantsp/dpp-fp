<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title', 'Covid-19 Admin Dashboard')
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/img/icons/logo.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/leaflet.css') }}" rel="text/css">
    <!-- Page plugins -->
    @stack('pagePlugins')
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/argon.css?v=1.1.0') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}" type="text/css">
    @stack('afterArgonCSS')
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('assets/img/brand/logo.webp') }}" class="navbar-brand-img" alt="logo-jatim">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">
                                <i class="ni ni-chart-bar-32 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        @if($userOps->getUserGroup() == \App\Utilities\Constants::USER_GROUP_PEMANTAU_DINKES ||
                        $userOps->getUserGroup() == \App\Utilities\Constants::USER_GROUP_ADMIN || $userOps->getUserId() == null)

                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-data" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-data">
                                <i class="ni ni-single-copy-04 text-primary"></i>
                                <span class="nav-link-text">Data Pasien</span>
                            </a>
                            <div class="collapse" id="navbar-data">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('pasien.input-data.show') }}" class="nav-link">Input Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pasien.daftar-pasien.show') }}" class="nav-link">Daftar
                                            Pasien</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pasien.daftar-otg.show') }}" class="nav-link">Daftar
                                            OTG/KE</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if($userOps->getUserGroup() == \App\Utilities\Constants::USER_GROUP_KOMINFO ||
                        $userOps->getUserGroup() == \App\Utilities\Constants::USER_GROUP_ADMIN || $userOps->getUserId() == null)

                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-sebaran" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-data">
                                <i class="ni ni-map-big text-primary"></i>
                                <span class="nav-link-text">Diagram Sebaran</span>
                            </a>
                            <div class="collapse" id="navbar-sebaran">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/peta-sebaran') }}" class="nav-link">Peta Sebaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('peta-sebaran.network-diagram.show') }}" class="nav-link">Network Diagram</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if($userOps->getUserGroup() != \App\Utilities\Constants::USER_GROUP_PEMANTAU_DINKES || $userOps->getUserId() == null)
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-data-1" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-data">
                                <i class="ni ni-compass-04 text-primary"></i>
                                <span class="nav-link-text">Prediksi</span>
                            </a>
                            <div class="collapse" id="navbar-data-1">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('prediksi.show') }}" class="nav-link">Prediksi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('diagram-covid.show') }}" class="nav-link">Diagram Covid-19</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if($userOps->getUserGroup() == \App\Utilities\Constants::USER_GROUP_ADMIN || $userOps->getUserId() == null)
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-management" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-management">
                                <i class="ni ni-circle-08 text-primary"></i>
                                <span class="nav-link-text">Admin Management</span>
                            </a>
                            <div class="collapse" id="navbar-management">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.user.show') }}" class="nav-link">User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.rumah-sakit.show') }}" class="nav-link">Rumah Sakit</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="ml-3 ml-md-0 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <div
                                        class="icon icon-shape icon-sm bg-gradient-red text-white rounded-circle shadow mr-2 mr-lg-0">
                                        <i class="ni ni-single-02"></i>
                                    </div>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span
                                            class="mb-0 text-sm  font-weight-bold">{{ $userOps->getUserName() }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Selamat Datang!</h6>
                                </div>
                                <a href="{{ route('dashboard.user-detail.show') }}" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Profil Saya</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="get" id="logout-form">
                                    @csrf
                                </form>
                                <button type="submit" form="logout-form" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Keluar</span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @section('pageContent')
        @show
    </div>
    <!-- Argon Scripts -->
    <!--   Core   -->
    <script src="{{url('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{url('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    @stack('optionalJS')
    <!-- Argon JS -->
    <script src="{{url('assets/js/argon.js?v=1.1.0') }}"></script>
    <script src="{{url('assets/js/custom.js?v=1.0.0') }}"></script>
    <!-- After Argon JS -->
    @stack('afterArgon')
</body>

</html>

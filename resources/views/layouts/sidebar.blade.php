<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->routeIs('root')) ? 'active' : '' }}" href="{{ route('root') }}">
                        <i class="ri-dashboard-2-line"></i> <span>Dasbor</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-group-line"></i> <span>Data Pegawai</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-money-dollar-box-line"></i> <span>Slip Gaji</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPaidLeave" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPaidLeave">
                        <i class="ri-calendar-2-line"></i> <span>Cuti</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPaidLeave">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal" target="_blank" class="nav-link" >Approve Cuti</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached" target="_blank" class="nav-link" >Semua Data</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-file-text-line"></i> <span>Penilaian Kerja</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-file-copy-line"></i> <span>SK</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="ri-trophy-line"></i> <span>Penghargaan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs(['positions.*']) ? 'active' : '' }}" href="#sidebarOtherMenu" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarOtherMenu">
                        <i class="ri-folder-open-line"></i> <span>Menu Lain</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs(['positions.*']) ? 'show' : '' }}" id="sidebarOtherMenu">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('positions.index') }}" class="nav-link {{ (request()->routeIs('positions.*')) ? 'active' : '' }}" >Data Jabatan</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached" target="_blank" class="nav-link" >Data Lembaga</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

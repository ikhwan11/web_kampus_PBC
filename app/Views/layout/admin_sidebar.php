<div class="container-scroller">

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
            <a class="sidebar-brand brand-logo" href="#"><img src="/assets/img/logo.png" alt="logo"></a>
            <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="#"><img src="/assets/img/icon_pbc.png" alt="logo" /></a>
        </div>
        <ul class="nav mt-3">
            <li class="nav-item">
                <a class="nav-link" href="/admin_dashboard">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Basic UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <?php if (session()->get('role') == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/admin_tenagapengajar">
                        <i class="mdi mdi-account-card-details menu-icon"></i>
                        <span class="menu-title">Tenaga Pengajar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin_blog">
                        <i class="mdi mdi-newspaper menu-icon"></i>
                        <span class="menu-title">Kelola Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin_lapTahunan">
                        <i class="mdi mdi-calendar-text menu-icon"></i>
                        <span class="menu-title">Laporan Tahunan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin_spmi/create">
                        <i class="mdi mdi-file-check menu-icon"></i>
                        <span class="menu-title">Tambah Dokumen</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-spmi" aria-expanded="false" aria-controls="ui-spmi">
                        <i class="mdi mdi-file-multiple menu-icon"></i>
                        <span class="menu-title">SPMI</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-spmi">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/standar_mutu">Standar Mutu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/lap_monev">Laporan MONEV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/lap_ami">Laporan AMI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/lap_rtm">Laporan RTM</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-indeks" aria-expanded="false" aria-controls="ui-indeks">
                        <i class="mdi mdi-file-chart menu-icon"></i>
                        <span class="menu-title">Laporan Kinerja</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-indeks">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_rmbs">Monitoring, RPS, BAP, dan Seat in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_ikm">Kepuasan Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_ikd">Kepuasan Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_ikjd">Kinerja Dosen</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>

            <?php if (session()->get('role') == 2) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/admin_blog">
                        <i class="mdi mdi-newspaper menu-icon"></i>
                        <span class="menu-title">Kelola Blog</span>
                    </a>
                </li>
            <?php endif; ?>


            <?php if (session()->get('role') == 3) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin_lapTahunan">
                        <i class="mdi mdi-calendar-text menu-icon"></i>
                        <span class="menu-title">Laporan Tahunan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        <span class="menu-title">SPMI</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/standar_mutu">Standar Mutu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/lap_monev">Laporan MONEV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/lap_ami">Laporan AMI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Admin_spmi/lap_rtm">Laporan RTM</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-indeks" aria-expanded="false" aria-controls="ui-indeks">
                        <i class="mdi mdi-file-chart menu-icon"></i>
                        <span class="menu-title">Laporan Kinerja</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-indeks">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_rmbs">Monitoring, RPS, BAP, dan Seat in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_ikm">Kepuasan Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_ikd">Kepuasan Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin_spmi/lap_ikjd">Kinerja Dosen</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>

            <!-- <li class="nav-item">
                <a class="nav-link" href="/admin_banner">
                    <i class="mdi mdi-theater menu-icon"></i>
                    <span class="menu-title">Banner Promosi</span>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Kerjasama</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-table-large menu-icon"></i>
                    <span class="menu-title">Fasilitas</span>
                </a>
            </li> -->
        </ul>
    </nav>
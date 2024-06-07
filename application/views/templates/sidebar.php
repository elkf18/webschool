<body>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WebSchool</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('mahasiswa') ?>">
                    <i class="fas fa-user-graduate"></i>
                    <span>Daftar Mahasiswa </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dosen') ?>">
                    <i class="fas fa-user-tie"></i>
                    <span>Daftar Dosen</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('matkul') ?>">
                    <i class="fas fa-bookmark"></i>
                    <span>Daftar Mata Kuliah</span></a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('jadwalkuliah/index') ?>">
                    <i class="fas fa-bookmark"></i>
                    <span>Jadwal Kuliah</span></a>
            </li> -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('buku/index') ?>">
                    <i class="fas fa-book"></i>
                    <span>Rekomendasi Buku</span></a>
            </li> -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="d-sm-flex align-items-center justify-content-center">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang <?= format_admin($this->session->userdata('username')) ?></h1>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar ?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Klik <strong>Logout</strong> Jika Anda Ingin Keluar</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="<?= base_url('auth/login') ?>">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
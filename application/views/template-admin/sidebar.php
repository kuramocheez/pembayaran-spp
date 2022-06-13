<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/home') ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3">Pembayaran SPP</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/home') ?>">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/pembayaran') ?>">
                <i class="bi bi-wallet"></i>
                <span>Pembayaran SPP</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/pembayaran/riwayatPembayaran') ?>">
                <i class="bi bi-clock-history"></i>
                <span>Riwayat Pembayaran SPP</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <?php
        if ($this->session->userdata('levelAkses') == 'Admin') {
        ?>


            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/siswa') ?>">
                    <i class="bi bi-people-fill"></i>
                    <span>Siswa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/kategori') ?>">
                    <i class="bi bi-list-ul"></i>
                    <span>Kategori SPP</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        <?php
        }
        ?>
        <!-- Divider -->
        <!-- <hr class="sidebar-divider"> -->





        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

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

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama') ?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/user-img/'), $this->session->userdata('foto'); ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('admin/profile') ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
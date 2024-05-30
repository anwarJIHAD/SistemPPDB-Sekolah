<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB | MIM 01 PEKANBARU</title>

    <!-- Custom fonts for this template-->
    <link href=<?= base_url("assets2/vendor/fontawesome-free/css/all.min.css") ?> rel="stylesheet" type="text/css">
    <link
        href=https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?= base_url("assets2/css/sb-admin-2.min.css") ?> rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=<?= base_url("assets2/vendor/datatables/dataTables.bootstrap4.min.css") ?> rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">MIM 01 Pekanbaru</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('calonsiswa/home'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= site_url('calonsiswa/pendaftaran/calonsiswa'); ?>">Form Data
                            Diri Siswa</a>
                        <a class="collapse-item" href="<?= site_url('calonsiswa/pendaftaran/Pendidikan'); ?>">Form Data
                            Pendidikan</a>
                        <a class="collapse-item" href="<?= site_url('calonsiswa/pendaftaran/Kesehatan'); ?>">Form Data
                            Kesehatan</a>
                        <a class="collapse-item" href="<?= site_url('calonsiswa/pendaftaran/ortu'); ?>">Form Data Orang
                            Tua</a>


                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('calonsiswa/persyaratan/dokumen'); ?>">
                    <i class="fas fa-fw fa-check-square"></i>
                    <span>Persyaratan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('calonsiswa/pembayaran/bayar'); ?>">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Pembayaran</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePa"
                    aria-expanded="true" aria-controls="collapsePa">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Kelengkapan Data</span>
                </a>
                <div id="collapsePa" class="collapse" aria-labelledby="headingPa" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item"
                            href="<?= site_url('calonsiswa/kelengkapandata/dataprofile'); ?>">Profile Siswa</a>
                        <a class="collapse-item" href="<?= site_url('calonsiswa/kelengkapandata/datasiswa'); ?>">Data
                            Diri Siswa</a>
                        <a class="collapse-item" href="<?= site_url('calonsiswa/kelengkapandata/dataortu'); ?>">Data
                            Orang Tua</a>
                        <a class="collapse-item"
                            href="<?= site_url('calonsiswa/kelengkapandata/datapendidikan'); ?>">Data Pendidikan</a>
                        <a class="collapse-item"
                            href="<?= site_url('calonsiswa/kelengkapandata/datapersyaratan'); ?>">Data Persyaratan</a>
                        <a class="collapse-item"
                            href="<?= site_url('calonsiswa/kelengkapandata/datapembayaran'); ?>">Data Pembayaran</a>

                    </div>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url(''); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>





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



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?= $this->session->userdata('nama_lengkap') ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/'); ?>user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                 <a class="dropdown-item" href="<?= site_url('calonsiswa/kelengkapandata/dataprofile'); ?>">
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
<!DOCTYPE html>
<html lang="en">
<?php
include_once 'config.php';
include_once 'SuplierController.php';

$database = new database();
$db = $database->getKoneksi();

$suplierController = new SuplierController($db);
$suplier = $suplierController->getAllSuplier();
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Produk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/simprot.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/simprot.png" alt="">
                <span class="d-none d-lg-block">SIMPROT</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Budiono Siregar</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Budiono Siregar</h6>
                            <span>Owner</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Barang</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-stok.php">
                            <i class="bi bi-circle"></i><span>Stok</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-produk.php" class="active">
                            <i class="bi bi-circle"></i><span>Produk</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
        <a class="nav-link collapsed" href="tables-suplier.php">
          <i class="bi bi-box-seam"></i>
          <span>Suplier</span>
        </a>
      </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Barang</li>
                    <li class="breadcrumb-item">Produk</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section>
            <div class="px-auto">
                <form method="post" action="proses_tambah.php">
                    <div class="form-group">
                        <label for="sup_id">Pilih Suplier</label>
                        <div>
                        <select class="form-select form-select-md mb-1" name="sup_id" id="sup_id">
                            <?php
                            foreach ($suplier as $suplier) {
                                echo "<option value=" . $suplier['sup_id'] . ">" . $suplier['sup_nama'] . "</option>";
                            } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nm_brg">Nama Barang</label>
                        <input type="text" class="form-control" name="nm_brg" id="nm_brg">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-select" name="kategori" aria-label="Default select example">
                            <option selected></option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Bumbu Dapur">Bumbu Dapur</option>
                            <option value="Kosmetik">Kosmetik</option>
                            <option value="Obat-obatan">Obat-obatan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                    <div class="form-group">
                        <label for="kedaluwarsa">Kedaluwarsa</label>
                        <input type="date" class="form-control" name="kedaluwarsa" id="kedaluwarsa">
                    </div>
                    <div class="form-group">
                        <label for="stok">Banyak Stok</label>
                        <input type="text" class="form-control" name="stok" id="stok">
                    </div>
                    <div>
                        <label for=""></label>
                        <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Simpan</button>
                    </div>
            </div>
            </form>
            </div>
        </section>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
        <script src="../../assets/vendor/echarts/echarts.min.js"></script>
        <script src="../../assets/vendor/quill/quill.min.js"></script>
        <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="../../assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../../assets/js/main.js"></script>

    </main>
</body>

</html>
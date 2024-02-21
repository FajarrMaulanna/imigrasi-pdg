<?php 
    include '../../../koneksi.php';
    
    // mengaktifkan session
    session_start();
    
    // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
    if($_SESSION['status'] !="login"){
        header("location:../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Imigrasi Padang</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../../../img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Imigrasi Padang</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="../slider-dash.php">Slider</a>
                        <a class="collapse-item" href="../foto-dash.php">Photos</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Berita</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Berita :</h6>
                        <a class="collapse-item" href="../news/other/other_news_dash.php">Berita Media Lain</a>
                        <a class="collapse-item" href="../news/own/own_news_dash.php">Berita Pribadi</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-video"></i>
                    <span>Video</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Video :</h6>
                        <a class="collapse-item" href="../video-dash.php">Homepage</a>
                        <a class="collapse-item" href="../gallery-vid/gallery-dash.php">Gallery</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../majalah/majalah-dash.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Majalah</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../faq/faq-dash.php">
                    <i class="fas fa-fw fa-question"></i>
                    <span>FAQ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduk"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Produk Hukum</span>
                </a>
                <div id="collapseProduk" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Produk Hukum</h6>
                        <a class="collapse-item" href="../produk_hukum/undang_undang/undang.php">Undang-Undang</a>
                        <a class="collapse-item" href="../produk_hukum/peraturan_pemerintah/pemerintah.php">Peraturan Pemerintah</a>
                        <a class="collapse-item" href="../produk_hukum/peraturan_presiden/presiden.php">Peraturan Presiden</a>
                        <a class="collapse-item" href="../produk_hukum/peraturan_mentri/mentri.php">Peraturan Mentri</a>
                        <a class="collapse-item" href="../produk_hukum/surat_edaran/edaran.php">Surat Edaran</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="menu_dash.php">
                    <i class="fas fa-fw fa-th"></i>
                    <span>Menu</span></a>
            </li>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="../../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4" style="overflow-x: scroll;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menu Navigasi</h6>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah_majalah">Tambah</button>
                        </div>
                    </div>
                    <div class="card shadow mb-4" style="overflow-x: scroll;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Sub Judul</th>
                                        <th>Gambar</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no1 = 1;
                                        $data_menu1 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Profil'");
                                        while($menus1 = mysqli_fetch_array($data_menu1)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no1++; ?></td>
                                        <td><?php echo $menus1['nama_menu']; ?></td>
                                        <td><?php echo $menus1['subjudul']; ?></td>
                                        <td><a href="../../files/gambar_menu/<?php echo $menus1['gambarpost']; ?>" target="_blank"><?php echo $menus1['gambarpost']; ?></a></td>
                                        <td><a class="btn btn-danger" href="hapus_menu.php?id=<?php echo $menus1['id']?>" type="button">Delete</a></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card shadow mb-4" style="overflow-x: scroll;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Info Publik</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Sub Judul</th>
                                        <th>Gambar</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no2 = 1;
                                        $data_menu2 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Info Publik'");
                                        while($menus2 = mysqli_fetch_array($data_menu2)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no2++; ?></td>
                                        <td><?php echo $menus2['nama_menu']; ?></td>
                                        <td><?php echo $menus2['subjudul']; ?></td>
                                        <td><a href="../../files/gambar_menu/<?php echo $menus2['gambarpost']; ?>" target="_blank"><?php echo $menus2['gambarpost']; ?></a></td>
                                        <td><a class="btn btn-danger" href="hapus_menu.php?id=<?php echo $menus2['id']?>" type="button">Delete</a></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card shadow mb-4" style="overflow-x: scroll;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Warga Negara Indonesia</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Sub Judul</th>
                                        <th>Gambar</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no3 = 1;
                                        $data_menu3 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Warga Negara Indonesia'");
                                        while($menus3 = mysqli_fetch_array($data_menu3)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no3++; ?></td>
                                        <td><?php echo $menus3['nama_menu']; ?></td>
                                        <td><?php echo $menus3['subjudul']; ?></td>
                                        <td><a href="../../files/gambar_menu/<?php echo $menus3['gambarpost']; ?>" target="_blank"><?php echo $menus3['gambarpost']; ?></a></td>
                                        <td><a class="btn btn-danger" href="hapus_menu.php?id=<?php echo $menus3['id']?>" type="button">Delete</a></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card shadow mb-4" style="overflow-x: scroll;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Warga Negara Asing</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Sub Judul</th>
                                        <th>Gambar</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no4 = 1;
                                        $data_menu4 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Warga Negara Asing'");
                                        while($menus4 = mysqli_fetch_array($data_menu4)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no4++; ?></td>
                                        <td><?php echo $menus4['nama_menu']; ?></td>
                                        <td><?php echo $menus4['subjudul']; ?></td>
                                        <td><a href="../../files/gambar_menu/<?php echo $menus4['gambarpost']; ?>" target="_blank"><?php echo $menus4['gambarpost']; ?></a></td>
                                        <td><a class="btn btn-danger" href="hapus_menu.php?id=<?php echo $menus4['id']?>" type="button">Delete</a></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kantor Imigrasi Padang 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Majalah -->
    <div class="modal fade" id="tambah_majalah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambah_menu.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" class="form-control" name="namamenu" placeholder="Masukkan Nama Menu" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                <option>Profil</option>
                                <option>Info Publik</option>
                                <option>Warga Negara Indonesia</option>
                                <option>Warga Negara Asing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Judul</label>
                            <input type="text" class="form-control" name="subjudul" placeholder="Masukkan Sub Judul" required>
                        </div>
                        <div class="form-group">
                            <label>Isi Menu</label>
                            <textarea type="text" class="form-control" name="isimenu" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar Utama (PNG, JPG, JPEG)</label>
                            <input type="file" class="form-control" name="gambarmenu" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="Submit"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>
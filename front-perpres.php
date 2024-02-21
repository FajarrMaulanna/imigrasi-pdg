<?php 
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="maximum-scale=1">
    <title>Produk Hukum || Imigrasi Padang</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"> 
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="bootnavbar.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" id="navbar" style="background-color: #0d4d45;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo_imi" src="img/logo_imigrasi.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            PROFIL
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                            $data_menu1 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Profil'");
                            while($menus1 = mysqli_fetch_array($data_menu1)){
                        ?>
                            <li><a class="dropdown-item" href="article.php?id=<?php echo $menus1['id']?>"><?php echo $menus1['nama_menu'] ?></a></li>
                        <?php
                            }
                        ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            LAYANAN PUBLIK
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Warga Negara Indonesia</a>
                                <ul class="dropdown-menu">
                                <?php 
                                    $data_menu3 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Warga Negara Indonesia'");
                                    while($menus3 = mysqli_fetch_array($data_menu3)){
                                ?>
                                    <li><a class="dropdown-item" href="article.php?id=<?php echo $menus3['id']?>"><?php echo $menus3['nama_menu'] ?></a></li>
                                <?php
                                    }
                                ?>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Warga Negara Asing</a>
                                <ul class="dropdown-menu">
                                <?php 
                                    $data_menu2 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Warga Negara Asing'");
                                    while($menus2 = mysqli_fetch_array($data_menu2)){
                                ?>
                                    <li><a class="dropdown-item" href="article.php?id=<?php echo $menus2['id']?>"><?php echo $menus2['nama_menu'] ?></a></li>
                                <?php
                                    }
                                ?>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/imigrasiv1/cek_status_permohonan/paspor">Cek Status Permohonan Paspor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" id="menu-area">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            PRODUK HUKUM
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="front-uu.php">Undang-Undang</a></li>
                            <li><a class="dropdown-item" href="front-perpem.php">Peraturan Pemerintah</a></li>
                            <li><a class="dropdown-item" href="front-perpres.php">Peraturan Presiden</a></li>
                            <li><a class="dropdown-item" href="front-permen.php">Peraturan Mentri</a></li>
                            <li><a class="dropdown-item" href="front-edaran.php">Surat Edaran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            INFO PUBLIK
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                            $data_menu4 = mysqli_query($mysqli, "SELECT * FROM post_menu WHERE kategori = 'Info Publik'");
                            while($menus4 = mysqli_fetch_array($data_menu4)){
                        ?>
                            <li><a class="dropdown-item" href="article.php?id=<?php echo $menus4['id']?>"><?php echo $menus4['nama_menu'] ?></a></li>
                        <?php
                            }
                        ?>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/biaya-keimigrasian/">Biaya Jasa Keimigrasian</a></li>
                            <li><a class="dropdown-item" href="gallery_vid.php">Galeri Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            HUBUNGI KAMI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/hubungi-kami-direktorat-jenderal-imigrasi/">Direktorat Jendral Imigrasi</a></li>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/hubungi-kami-kantor-wilayah-keimigrasian/">Divisi Keimigrasian</a></li>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/hubungi-kami-kantor-imigrasi/">Kantor Imigrasi</a></li>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/hubungi-kami-rumah-detensi-imigrasi/">Rumah Detensi Imigrasi</a></li>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/hubungi-kami-tempat-pemeriksaan/">Tempat Pemeriksaan Imigrasi</a></li>
                            <li><a class="dropdown-item" href="https://www.imigrasi.go.id/id/hubungi-kami-perwakilan-imigrasi-di-luar-negeri/">Perwakilan Imigrasi di Luar Negeri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="voting.php">SURVEY LAYANAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
        <div class="jumbotron-fluid">
            <div class="container" id="content_vid">
                <h2 class="header_vid">Peraturan Presiden</h2>
                <div class="row">
                    <?php 
                        $data_perpres = mysqli_query($mysqli, "SELECT * FROM per_pres ORDER BY id DESC");
                        while($perpres = mysqli_fetch_array($data_perpres)){
                    ?>
                    <div class="col-lg-4">
                        <div class="modal-content" id="item_maj">
                            <div class="modal-header">
                                <a href="backend/files/peraturan_presiden/<?php echo $perpres['file_perpres']; ?>" target="_blank" class="btn btn-success btn-sm">
                                    <i class="bi bi-search"></i>
                                </a>
                            </div>
                            <div class="modal-body" id="body_u">
                                <a href="backend/files/peraturan_presiden/<?php echo $perpres['file_perpres']; ?>" target="_blank" style="text-decoration: none;"><p id="link_maj"><?php echo $perpres['judul_perpres'];?></p></a>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    <!-- END NAVBAR -->

    <!-- QUICK LINK -->
    <div class="jumbotron" id="quick-link">
        <div class="row align-items-center" id="rowlogo">
            <div class="col-lg-4">
                <img id="logo-bawah" src="img/logo_imigrasi.png" alt="logo">
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3088754620385!2d100.35859865294451!3d-0.9156179387943802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8cf161ca95d%3A0x39f1cac3892b5313!2sKantor%20Imigrasi%20Kelas%20I%20TPI%20Padang!5e0!3m2!1sid!2sid!4v1610939224496!5m2!1sid!2sid" width="378" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-4">
                <ul id="kontaks">
                    <li class="list-kontak">Anda dapat menghubungi kami melalui kontak dibawah</li>
                    <li class="list-kontak" style="list-style-image: url('img/placeholder1.png');">Jl. Khatib Sulaiman No. 50, RT. 03 / RW. 07, Kel. Lolong Belanti, South Ulak Karang, Padang Utara, Padang City</li>
                    <li class="list-kontak" style="list-style-image: url('img/telephone1.png');">(0751) 7055113</li>
                    <li class="list-kontak" style="list-style-image: url('img/email1.png');">kanim.pdg@gmail.com<br>kanim_padang@imigrasi.go.id</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p id="text-visitor">Pengunjung</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-275e5dd4-7f18-425c-81ed-0aef8883ee96"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK LINK -->

    <!-- FOOTER -->
    <div class="footer">
      <div class="container-fluid" id="footer-pdg">
        <div class="row">
          <div class="col-md-12 col-sm-12">  
            <div class="copyright">CONTACT US</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-6 justify-content-center d-flex">
            <a href="https://www.facebook.com/KanimPadang/" target="_blank"><img class="items" src="img/facebook.png"></a>
            <a href="https://twitter.com/kanimpadang" target="_blank"><img class="items" src="img/twitter.png"></a>
            <a href="https://www.instagram.com/imigrasipadang" target="_blank"><img class="items" src="img/instagram.png"></a>
            <a href="https://www.youtube.com/channel/UC9iMfCwzJPqrRsF_vxflOuQ" target="_blank"><img class="items" src="img/youtube.png"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">  
            <div class="copyright">Copyright © Kantor Imigrasi Padang 2021. All rights reserved</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="bootnavbar.js"></script>
    <script>
        window.addEventListener("scroll", function(){
            let nav_bar = document.getElementById('navbar');
            if(window.pageYOffset > 0){
                nav_bar.classList.add("cus-nav");
            }
            else{
                nav_bar.classList.remove("cus-nav");
            }  
        });
        $('#navbar').bootnavbar();
    </script>
</body>
</html>
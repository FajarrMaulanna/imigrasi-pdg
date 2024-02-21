<?php
    include_once("koneksi.php");
    $text_run = mysqli_query($mysqli, "SELECT run_text FROM running");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> 
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="bootnavbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <title>Kantor Imigrasi Kelas I TPI Padang</title>
    <link rel="shortcut icon" href="img/favicon.png">

    <style>
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 350px;
        }
    </style>
</head>
<body>
    <div class="preloader">
      <div class="loading">
        <div class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo_imi" id="logo_imi" src="img/logo_imigrasi.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
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
                            <li><a class="dropdown-item" href="front-uu">Undang-Undang</a></li>
                            <li><a class="dropdown-item" href="front-perpem">Peraturan Pemerintah</a></li>
                            <li><a class="dropdown-item" href="front-perpres">Peraturan Presiden</a></li>
                            <li><a class="dropdown-item" href="front-permen">Peraturan Mentri</a></li>
                            <li><a class="dropdown-item" href="front-edaran">Surat Edaran</a></li>
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
                            <li><a class="dropdown-item" href="gallery_vid">Galeri Video</a></li>
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
                        <a class="nav-link" aria-current="page" href="faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="voting">SURVEY LAYANAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HIGHLIGHT -->
    <div class="jumbotron jumbotron-fluid">
        <div class="overlay">
            <div class="row">
                <div class="col-lg-12">
                    <p class="highlight_text"><b>SELAMAT DATANG</b><br>DI KANTOR IMIGRASI KELAS I TPI<br>PADANG</p>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="https://www.imigrasi.go.id/id/permohonan-paspor-baru-untuk-masyarakat-secara-umum/" class="btn btn-success" id="btn_high"><p>Informasi Pelayanan Paspor Republik Indonesia <br> (Information on Passport Services of the Republic of Indonesia)</p></a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.imigrasi.go.id/id/informasi-kartu-perjalanan-pebisnis-apec-umum/" class="btn btn-success" id="btn_high"><p>Informasi Kartu Perjalanan Pebisnis APEC <br> (APEC Business Travel Card Information)</p></a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.imigrasi.go.id/id/permohonan-visa-republik-indonesia-wisata-b211a/" class="btn btn-success" id="btn_high"><p>Informasi Pelayanan Keimigrasian Bagi Orang Asing <br> (Immigration Service Information for Foreigners)</p></a>
                        </div>
                    </div>
                    <img class="highlight_img" src="img/highlight.jpeg" alt="gambar">
                </div>
            </div>
        </div>
    </div>
    <!-- END HIGHLIGHT -->

    <!-- RUNNING TEXT -->
    <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10" bgcolor="#191919" style="color:#FFFFFF;">
        <img id="megaphone" src="img/megaphone.png" alt="">
        <?php 
            while($text = mysqli_fetch_array($text_run)){
                echo $text['run_text'];
            }
        ?>
    </marquee>
    <!-- END RUNNING TEXT -->

    <!-- CAROUSEL INFO -->
    <div class="container" id="slide_info">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            <?php
                $data_slide = mysqli_query($mysqli, "SELECT * FROM slider_info");
                $i = 0;
                while($slide = mysqli_fetch_array($data_slide)){
                    $actives = '';
                    if($i == 0){
                        $actives = 'active';
                    }else{
                        $actives = '';
                    }
            ?>
                <div class="carousel-item <?php echo $actives ?>" data-interval="2000">
                    <img src="backend/files/slider/<?php echo $slide['file_slide'];?>" class="d-block w-100" alt="...">
                </div>
                <?php
                    $i++; }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- END CAROUSEL INFO -->

    <!-- LAYANAN -->
    <div class="jumbotron jumbotron-fluid" id="menu-user">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 justify-content-center">
                    <a href="https://visa-online.imigrasi.go.id/login.xhtml" target="_blank" class="button-link">
                        <div class="image-frame">
                            <img class="button-img" src="img/smartphone.png" alt="">
                        </div>
                        <div class="button-text"><p>LAYANAN VISA ONLINE</p></div>
                    </a>
                </div>
                <div class="col-md-2 justify-content-center">
                    <a href="https://whv.imigrasi.go.id/home" target="_blank" class="button-link">
                        <div class="image-frame">
                            <img class="button-img" src="img/reader.png" alt="">
                        </div>
                        <div class="button-text"><p>VISA BEKERJA DAN LIBURAN(SRPI)</p></div>
                    </a>
                </div>
                <div class="col-md-2 justify-content-center">
                    <a href="https://apoa.imigrasi.go.id/poa/" target="_blank" class="button-link">
                        <div class="image-frame">
                            <img class="button-img" src="img/tablet.png" alt="">
                        </div>
                        <div class="button-text"><p>APLIKASI PELAPORAN ORANG ASING</p></div>
                    </a>
                </div>
                <div class="col-md-2 justify-content-center">
                    <a href="https://www.lapor.go.id/" target="_blank" class="button-link">
                        <div class="image-frame">
                            <img class="button-img" src="img/blog.png" alt="">
                        </div>
                        <div class="button-text"><p>APLIKASI LAPOR</p></div>
                    </a>
                </div>
                <div class="col-md-2 justify-content-center">
                    <a href="https://izintinggal-online.imigrasi.go.id/" target="_blank" class="button-link">
                        <div class="image-frame">
                            <img class="button-img" src="img/journal.png" alt="">
                        </div>
                        <div class="button-text"><p>LAYANAN IZIN TINGGAL</p></div>
                    </a>
                </div>
                <div class="col-md-2 justify-content-center">
                    <a href="https://www.imigrasi.go.id/imigrasiv1/cek_status_permohonan/paspor" target="_blank" class="button-link">
                        <div class="image-frame">
                            <img class="button-img" src="img/laptop.png" alt="">
                        </div>
                        <div class="button-text"><p>CEK STATUS PERMOHONAN PASPOR</p></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END LAYANAN -->
    
    <!-- MAJALAH -->
    <div class="container-fluid" id="majalah_space">
                <div class="row justify-content-center">
                    <p id="text-majalah">MAJALAH IMIGRASI RANCAK</p>
                </div>
                <div class="row">
                    <a href="majalah_imi.php" target="_blank" class="btn btn-success" id="btn-majalah">SELENGKAPNYA</a>
                </div>
        <!--<div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <p id="text-majalah">EAZY PASSPORT</p>
                </div>
                <div class="row">
                    <a href="eazy/eazy.php" target="_blank" class="btn btn-success" id="btn-majalah">SELENGKAPNYA</a>
                </div>
            </div>
        </div>-->
    </div>
    <!-- END MAJALAH -->


    <div class="container" id="tiga_kolom">
        <div class="row">
            <div class="col-lg-8">
                <p class="sub_judul">SEPUTAR KANIM</p>
                <hr>
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $news_own = mysqli_query($mysqli, "SELECT * FROM own_news ORDER BY id DESC");
                            $j = 0;
                            while($own = mysqli_fetch_array($news_own)){
                                $aktif = '';
                                if($j == 0){
                                    $aktif = 'active';
                                }else{
                                    $aktif = '';
                                }
                        ?>
                        <div class="carousel-item <?php echo $aktif ?>" data-interval="2000">
                            <div class="card mb-3" id="seputar">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a href="backend/files/own_news/<?php echo $own['img_news'];?>" target="_blank"><img id="seputar_img" src="backend/files/own_news/<?php echo $own['img_news'];?>" width="200px" alt="..."></a>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $own['header']; ?></h5>
                                        <p class="card-text" id="descown"><?php echo substr($own['desc_news'],0,300);?>...</p>
                                        <p class="card-text"><small class="text-muted"><?php echo $own['date_news']; ?></small></p>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalseputar<?php echo $own['id']; ?>">
                                            Selengkapnya
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            include 'modal_seputar.php';
                            $j++; }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <p class="sub_judul">IMI PADANG NEWS</p>
                <hr>
                <div class="modal-content">
                    <div class="modal-body" id="news_other">
                        <ol>
                            <?php
                                $data_news_ot = mysqli_query($mysqli, "SELECT * FROM other_news ORDER BY id DESC");
                                while($news_ot = mysqli_fetch_array($data_news_ot)){
                            ?>
                            <li>
                                <h6><a href="<?php echo $news_ot['link_med']; ?>" target="_blank"><?php echo $news_ot['judul_med'];?></a></h6>
                                <p>Source Media : <?php echo $news_ot['sekilas_med']; ?></p>
                            </li>
                            <?php }?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- APAPO -->
    <div class="jumbotron-fluid" id="apk_space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center" id="app1">
                        <div class="col-lg-3 col-sm-12">
                            <img src="img/apapo2.png" class="img_apk" alt="">
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <div class="row">
                                <p class="text-justify">Aplikasi Layanan Paspor Online adalah aplikasi yang menggantikan mekanisme pengantrian secara manual menjadi antrian berbasis internet. Anda tidak perlu lagi mengantri dari pagi, melainkan tinggal pilih tanggal, pilih cluster pagi/siang, lalu isi data dengan sesuai dan valid. Aplikasi ini sangat membantu dan menghemat waktu. Namun anda tetap harus hadir langsung ke Kantor Imigrasi untuk proses lengkap pembuatan paspor yakni melakukan verifikasi berkas, wawancara, pengambilan sidik jari, dan foto hingga proses selesai. </p>
                            </div>
                            <div class="row">
                                <a href="https://play.google.com/store/apps/details?id=id.go.imigrasi.layananwni" target="_blank"><img class="tombol-apk" src="img/playstore.png" alt=""></a>
                                <a href="https://apps.apple.com/us/app/layanan-paspor-online/id1453138219" target="_blank"><img class="tombol-apk" src="img/appstore.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="app2">
                        <div class="col-lg-3 col-sm-12">
                            <img class="img_apk" src="img/apoa.png" alt="">
                        </div>
                        <div class="col-lg-9 col-sm-12">
                            <div class="row">
                                <p class="text-justify">Apikasi Pelaporan Orang Asing merupakan aplikasi online yang berguna untuk membantu dan memudahkan proses pelaporan orang asing. Aplikasi ini dibangun untuk memudahkan pemilik hotel, tempat penginapan, atau perorangan yang memberikan tempat penginapan. Dengan menggunakan  APOA, pemilik hotel atau tempat penginapan tidak perlu lagi datang ke Kantor Imigrasi secara berkala untuk melakukan pelaporan orang asing secara manual.</p>
                            </div>
                            <div class="row">
                                <a href="https://play.google.com/store/apps/details?id=go.id.imigrasi.dev.apoa"><img class="tombol-apk" src="img/playstore.png" alt=""></a>
                                <!--<a class="tombol-apk" href="#"><img src="img/appstore.png" width="200px" alt=""></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAJALAH -->

    <!-- GALLERY PHOTO -->
    <div class="jumbotron">
        <div class="container">
            <p class="sub_judul">FOTO</p>
            <hr>
            <div class="row">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php 
                            $data_foto = mysqli_query($mysqli, "SELECT * FROM foto_home ORDER BY id DESC");
                            while($foto = mysqli_fetch_array($data_foto)){
                        ?>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <img src="backend/files/foto_home/<?php echo $foto['file_foto'];?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $foto['judul_foto'];?></h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END GALLERY PHOTO -->

    <!-- SEPUTAR KANIM -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div data-mc-src="4da1f40f-0fdf-4519-acb2-01f1a9f4fd03#instagram"></div>
                <script src="https://cdn2.woxo.tech/a.js#601faf982a153a00154b7740" async data-usrc></script>
            </div>
            <div class="col-lg-4">
                <p class="sub_judul">TWITTER KANIM PADANG</p>
                <hr>
                <div class="modal-content">
                    <div class="modal-body" id="sosmed_post">
                        <a class="twitter-timeline" href="https://twitter.com/KanimPadang?ref_src=twsrc%5Etfw">Tweets by KanimPadang</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SEPUTAR KANIM -->

    <!-- VIDEO -->
    <div class="jumbotron">
        <div class="container">
            <p class="sub_judul">MAOTA DISIKO</p>
            <hr>
            <div class="row">
                <?php 
                    $data_vid = mysqli_query($mysqli, "SELECT * FROM video_home");
                    while($vid = mysqli_fetch_array($data_vid)){
                ?>
                <div class="col-lg-4">
                    <iframe id="vid_yt" src="https://www.youtube.com/embed/<?php echo $vid['kode_vid'];?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- END VIDEO -->

    <!-- LINK TERKAIT -->
    <div class="container" id="link-terkait">
        <p class="sub_judul">LINK TERKAIT</p>
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-2">
                <a href="https://www.lapor.go.id/" target="_blank" class="linkter"><img class="link" width="150px" src="img/lapor.png" alt=""></a>
            </div>
            <div class="col-lg-2">
                <a href="https://www.imigrasi.go.id/uploads/SK-PPID.pdf" target="_blank" class="linkter"><img class="link" width="100px" src="img/ppid.png" alt=""></a>
            </div>
            <div class="col-lg-2">
                <a href="https://lhkasn.kemenkumham.go.id/" target="_blank" class="linkter"><img class="link" width="170px" src="img/lhkasn.png" alt=""></a>
            </div>
            <div class="col-lg-2">
                <a href="https://majalah.imigrasi.go.id/" target="_blank" class="linkter"><img class="link" width="180px" src="img/bhumipura.png" alt=""></a>
            </div>   
            <div class="col-lg-2">
                <a href="http://kermakim.imigrasi.go.id/treatyroom" target="_blank" class="linkter"><img class="link" width="100px" src="img/e-leker.png" alt=""></a>
            </div>
            <div class="col-lg-2">
                <a href="https://lpse.kemenkumham.go.id/eproc4" target="_blank" class="linkter"><img class="link" width="170px" src="img/lpse.png" alt=""></a>
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2">
                <a href="https://wbs.kemenkumham.go.id/index.php?r=site/main" target="_blank" class="linkter"><img class="link" width="130px" src="img/wbs.png" alt=""></a>
            </div>
            <div class="col-lg-2">
                <a href="https://sipp.menpan.go.id/" target="_blank" class="linkter"><img class="link" width="145px" src="img/sipp.png" alt=""></a>
            </div>
            <div class="col-lg-2">
                <a href="https://upg.kemenkumham.go.id/" target="_blank" class="linkter"><img width="110px" class="link" src="img/upg.png" alt=""></a>
            </div>       
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 justify-content-center d-flex">
                <a href="https://www.imigrasi.go.id" target="_blank" class="linkter"><img class="link-img" src="img/linkterkait-dirjen.jpg" alt=""></a>
            </div>
            <div class="col-lg-3 justify-content-center d-flex">
                <a href="https://sumbar.kemenkumham.go.id/" target="_blank" class="linkter"><img class="link-img" src="img/linkterkait-kanwildki-2.jpg" alt=""></a>
            </div>
            <div class="col-lg-3 justify-content-center d-flex">
                <a href="https://www.kemenkumham.go.id/" target="_blank" class="linkter"><img class="link-img" src="img/linkterkait-kemenhum-02.jpg" alt=""></a>
            </div>
            <div class="col-lg-3 justify-content-center d-flex">
                <a href="https://poltekim.ac.id/" target="_blank" class="linkter"><img class="link-img" src="img/linkterkait-poltekimigrasi-02.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- END LINK TERKAIT-->
    
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3088754620385!2d100.35859865294451!3d-0.9156179387943802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8cf161ca95d%3A0x39f1cac3892b5313!2sKantor%20Imigrasi%20Kelas%20I%20TPI%20Padang!5e0!3m2!1sid!2sid!4v1610939224496!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
            <div class="copyright">Copyright © Kantor Imigrasi Padang <script>document.write(new Date().getFullYear());</script>. All rights reserved</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- MODAL POP UP 1-->
    <div class="modal fade" id="Modalpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                        $data_pop = mysqli_query($mysqli, "SELECT * FROM pop_up WHERE id = 1");
                        while($pop = mysqli_fetch_array($data_pop)){
                    ?>
                    <img src="backend/files/popup/<?php echo $pop['file_popup'];?>" alt="..." id="img_popup">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL POP UP -->

    <!-- MODAL POP UP 2-->
    <div class="modal fade" id="Modalpopup2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                        $data_pop = mysqli_query($mysqli, "SELECT * FROM pop_up WHERE id = 2");
                        while($pop = mysqli_fetch_array($data_pop)){
                    ?>
                    <img src="backend/files/popup/<?php echo $pop['file_popup'];?>" alt="..." id="img_popup">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL POP UP -->

    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/604e3f58f7ce1827092ff8c8/1f0oqesv8';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
    <!--End of Tawk.to Script-->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="bootnavbar.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".preloader").fadeOut(3000);
        });
        window.addEventListener("scroll", function(){
            let nav_bar = document.getElementById('navbar');
            let lo_go = document.getElementById('logo_imi');
            if(window.pageYOffset > 0){
                nav_bar.classList.add("cus-nav");
                lo_go.classList.add("cus-nav");
            }
            else{
                nav_bar.classList.remove("cus-nav");
                lo_go.classList.remove("cus-nav");
            }  
        });
        $('#navbar').bootnavbar();
        
        $(function(){
            $("#Modalpopup").modal('show');
        });
        $(function(){
            setTimeout(function(){ $("#Modalpopup2").modal('show'); }, 5000);
        });
        $(document).ready(function(){
            $(window).scrollTop(0);
        });
    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        });
    </script>
</body>
</html>
<?php 
    include '../../../koneksi.php';
    
    $idnews = htmlspecialchars($_POST['id_news']);
    $judulnews = htmlspecialchars($_POST['judul_med']);
    $linknews = htmlspecialchars($_POST['link_med']);
    $sekilasnews = htmlspecialchars($_POST['sekilas_med']);
 
    // update data ke database
    mysqli_query($mysqli, "UPDATE other_news SET judul_med='$judulnews', link_med='$linknews', sekilas_med='$sekilasnews' WHERE id='$idnews'");
 
    // mengalihkan halaman kembali ke index.php
    header("location:other_news_dash.php");
 
?>
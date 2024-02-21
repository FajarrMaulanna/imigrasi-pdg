<?php 
    include '../../koneksi.php';
    
    $idvid = htmlspecialchars($_POST['id_vid']);
    $judulvid = htmlspecialchars($_POST['judul_vid']);
    $kodevid = htmlspecialchars($_POST['kode_vid']);
 
    // update data ke database
    mysqli_query($mysqli, "UPDATE video_home SET judul_vid='$judulvid', kode_vid='$kodevid' WHERE id='$idvid'");
 
    // mengalihkan halaman kembali ke index.php
    header("location:video-dash.php");
 
?>
<?php
    include '../../../koneksi.php';
    
    $idvid = htmlspecialchars($_POST['id_vid']);
    $kodevid = htmlspecialchars($_POST['kode_vid']);
 
    // update data ke database
    mysqli_query($mysqli, "UPDATE gallery_vid SET kode_vid='$kodevid' WHERE id='$idvid'");
 
    // mengalihkan halaman kembali ke index.php
    header("location:gallery-dash.php");
 
?>
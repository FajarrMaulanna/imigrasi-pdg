<?php 
    include '../../../koneksi.php';
    
    $judul_med = htmlspecialchars($_POST['judul_med']);
    $link_med = htmlspecialchars($_POST['link_med']);
    $sekilas_med = htmlspecialchars($_POST['sekilas_med']);

    mysqli_query($mysqli, "INSERT INTO other_news VALUES(NULL, '$judul_med', '$link_med', '$sekilas_med')");

    header("location:other_news_dash.php");
?>
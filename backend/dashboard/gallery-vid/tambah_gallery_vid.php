<?php 
    include '../../../koneksi.php';
    
    $kodevid = htmlspecialchars($_POST['kode-vid']);
    
    mysqli_query($mysqli, "INSERT INTO gallery_vid VALUES(NULL,'$kodevid')");
    header("location:gallery-dash.php");

?>
<?php 
    include '../../../koneksi.php';
    
    $tanyafaq = htmlspecialchars($_POST['tanya_faq']);
    $jawabfaq = htmlspecialchars($_POST['jawab_faq']);
    
    mysqli_query($mysqli, "INSERT INTO faq VALUES(NULL,'$tanyafaq', '$jawabfaq')");
    header("location:faq-dash.php");

?>
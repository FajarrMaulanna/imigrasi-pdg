<?php 
    include '../../koneksi.php';
    
    $id = htmlspecialchars($_POST['idtext']);
    $runtext = htmlspecialchars($_POST['runtext']);
 
    // update data ke database
    mysqli_query($mysqli, "UPDATE running SET run_text='$runtext' WHERE id='$id'");
 
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
 
?>
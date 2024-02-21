<?php 
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM per_pemerintah WHERE id = $id");

    header("location:pemerintah.php");
?>
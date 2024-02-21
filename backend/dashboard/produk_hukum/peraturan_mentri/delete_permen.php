<?php 
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM per_men WHERE id = $id");

    header("location:mentri.php");
?>
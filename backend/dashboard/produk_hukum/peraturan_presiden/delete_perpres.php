<?php 
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM per_pres WHERE id = $id");

    header("location:presiden.php");
?>
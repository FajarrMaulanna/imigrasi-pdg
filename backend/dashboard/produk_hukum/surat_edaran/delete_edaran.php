<?php 
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM sur_edaran WHERE id = $id");

    header("location:edaran.php");
?>
<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "UPDATE eazy_pas SET statusnya = 'Sudah Selesai' WHERE id = $id");

    header("Location:eazy_dash.php");
?>
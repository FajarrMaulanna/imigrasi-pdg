<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM gallery_vid WHERE id = $id");

    header("Location:gallery-dash.php");
?>
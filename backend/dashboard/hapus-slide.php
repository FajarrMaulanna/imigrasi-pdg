<?php
    include '../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM slider_info WHERE id_slide = $id");

    header("Location:slider-dash.php");
?>
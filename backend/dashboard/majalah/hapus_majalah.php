<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM majalah_imi WHERE id_maj = $id");

    header("Location:majalah-dash.php");
?>
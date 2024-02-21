<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM eazy_pas WHERE id = $id");

    header("Location:eazy_dash.php");
?>
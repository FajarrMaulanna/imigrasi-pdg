<?php
    include '../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM foto_home WHERE id = $id");

    header("Location:foto-dash.php");
?>
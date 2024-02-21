<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM faq WHERE id = $id");

    header("Location:faq-dash.php");
?>
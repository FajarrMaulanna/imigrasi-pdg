<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM own_news WHERE id = $id");

    header("Location:own_news_dash.php");
?>
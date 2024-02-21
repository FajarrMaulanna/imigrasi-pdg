<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM other_news WHERE id = $id");

    header("Location:other_news_dash.php");
?>
<?php
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM post_menu WHERE id = $id");

    header("Location:menu_dash.php");
?>
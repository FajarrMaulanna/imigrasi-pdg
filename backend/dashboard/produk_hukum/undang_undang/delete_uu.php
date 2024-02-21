<?php 
    include '../../../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM undang_undang WHERE id = $id");

    header("location:undang.php");
?>
<?php 
    include '../../../koneksi.php';

    $namaproduk = htmlspecialchars($_POST['nama_uu']);

    $ekstensi = array('pdf');
    $filename = $_FILES['file_uu']['name'];
    $ukuran = $_FILES['file_uu']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $ekstensi)){
        header("location:mentri.php?alert=gagal_ekstensi");
    }
    else{
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['file_uu']['tmp_name'], '../../../files/peraturan_mentri/'.$filename);
        mysqli_query($mysqli, "UPDATE per_men SET judul_permen = '$namaproduk', file_permen = '$filename'");
        header("location:mentri.php");
    }
?>
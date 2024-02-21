<?php 
    include '../../../koneksi.php';

    $namaproduk = htmlspecialchars($_POST['nama_uu']);

    $ekstensi = array('pdf');
    $filename = $_FILES['file_uu']['name'];
    $ukuran = $_FILES['file_uu']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $ekstensi)){
        header("location:presiden.php?alert=gagal_ekstensi");
    }
    else{
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['file_uu']['tmp_name'], '../../../files/peraturan_presiden/'.$filename);
        mysqli_query($mysqli, "INSERT INTO per_pres VALUES(NULL, '$namaproduk', '$filename')");
        header("location:presiden.php");
    }
?>
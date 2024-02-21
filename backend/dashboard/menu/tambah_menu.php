<?php 
    include '../../koneksi.php';
    $namamenu = htmlspecialchars($_POST['namamenu']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $subjudul = htmlspecialchars($_POST['subjudul']);
    $isimenu = htmlspecialchars($_POST['isimenu']);

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif', 'JPG');
    $filename = $_FILES['gambarmenu']['name'];
    $ukuran = $_FILES['gambarmenu']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi)) {
        header("location:menu_dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['gambarmenu']['tmp_name'], '../../files/gambar_menu/'.$xx);
        mysqli_query($mysqli, "INSERT INTO post_menu VALUES(NULL,'$namamenu', '$kategori', '$subjudul', '$isimenu', '$xx')");
        header("location:menu_dash.php?alert=berhasil");
    }
?>
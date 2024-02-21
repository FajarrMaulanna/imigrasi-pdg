<?php 
    include '../../../koneksi.php';
    
    $judul_own = htmlspecialchars($_POST['judul_own']);
    $desc_own = htmlspecialchars($_POST['desc_own']);

    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['img_own']['name'];
    $ukuran = $_FILES['img_own']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        header("location:own_news_dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['img_own']['tmp_name'], '../../../files/own_news/'.$filename);
        mysqli_query($mysqli, "INSERT INTO own_news VALUES(NULL,'$judul_own', '$desc_own', '$filename', NULL)");
        header("location:own_news_dash.php?alert=berhasil");
    }
?>
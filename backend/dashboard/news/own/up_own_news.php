<?php 
    include '../../../koneksi.php';
    
    $idnews = htmlspecialchars($_POST['id_news']);
    $judulnews = htmlspecialchars($_POST['judul_own']);
    $descnews = htmlspecialchars($_POST['desc_own']);
 
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['img_own']['name'];
    $ukuran = $_FILES['img_own']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        header("location:own_news_dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['img_own']['tmp_name'], '../../../files/own_news/'.$filename);
        mysqli_query($mysqli, "UPDATE own_news SET header = '$judulnews', desc_news = '$descnews', img_news = '$filename' WHERE id = '$idnews'");
        header("location:own_news_dash.php?alert=berhasil");
    }
?>
<?php 
    include '../../koneksi.php';
    $namamajalah = htmlspecialchars($_POST['namamajalah']);
    $idmaj = htmlspecialchars($_POST['id_maj']);
    
    $ekstensi =  array('pdf');
    $ekstensi2 = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['filemajalah']['name'];
    $ukuran = $_FILES['filemajalah']['size'];
    $filename2 = $_FILES['covermajalah']['name'];
    $ukuran2 = $_FILES['covermajalah']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) && !in_array($ext,$ekstensi2)) {
        header("location:majalah-dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['filemajalah']['tmp_name'], '../../files/majalah/'.$filename);
        move_uploaded_file($_FILES['covermajalah']['tmp_name'], '../../files/cover_majalah/'.$filename2);
        mysqli_query($mysqli, "UPDATE majalah_imi SET file_maj = '$filename', nama_maj = '$namamajalah', cover_maj = '$filename2' WHERE id_maj = '$idmaj'");
        header("location:majalah-dash.php?alert=berhasil");
    }
?>
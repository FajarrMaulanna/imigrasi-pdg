<?php 
    include '../../koneksi.php';
    $namamajalah = htmlspecialchars($_POST['namamajalah']);

    $ekstensi =  array('pdf');
    $ekstensi2 = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['filemajalah']['name'];
    $ukuran = $_FILES['filemajalah']['size'];
    $filename2 = $_FILES['covermajalah']['name'];
    $ukuran2 = $_FILES['covermajalah']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
    $rand = rand();
    if(!in_array($ext,$ekstensi) && !in_array($ext,$ekstensi2) ) {
        header("location:majalah-dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        $xx2 = $rand.'_'.$filename2;
        move_uploaded_file($_FILES['filemajalah']['tmp_name'], '../../files/majalah/'.$xx);
        move_uploaded_file($_FILES['covermajalah']['tmp_name'], '../../files/cover_majalah/'.$xx2);
        mysqli_query($mysqli, "INSERT INTO majalah_imi VALUES(NULL,'$xx', '$namamajalah', '$xx2')");
        header("location:majalah-dash.php?alert=berhasil");
    }
?>
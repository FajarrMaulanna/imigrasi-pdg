<?php 
    include '../../koneksi.php';
    $judulfoto = htmlspecialchars($_POST['judul_foto']);
    $idfoto = htmlspecialchars($_POST['id_foto']);

    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['file_foto']['name'];
    $ukuran = $_FILES['file_foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $rand = rand();
    if(!in_array($ext,$ekstensi) ) {
        header("location:foto-dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['file_foto']['tmp_name'], '../files/foto_home/'.$xx);
        mysqli_query($mysqli, "UPDATE foto_home SET file_foto = '$xx', judul_foto='$judulfoto' WHERE id='$idfoto'");
        header("location:foto-dash.php?alert=berhasil");
    }
?>
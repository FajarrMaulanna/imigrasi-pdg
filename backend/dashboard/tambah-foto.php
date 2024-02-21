<?php 
    include '../../koneksi.php';
    $judulfoto = htmlspecialchars($_POST['judul_foto']);

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
        mysqli_query($mysqli, "INSERT INTO foto_home VALUES(NULL, '$judulfoto', '$xx')");
        header("location:foto-dash.php?alert=berhasil");
    }
?>
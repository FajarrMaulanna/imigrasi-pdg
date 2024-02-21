<?php 
    include '../koneksi.php';
    $nama = $_POST['inputnama'];
    $email = $_POST['inputemail'];
    $alamat = $_POST['inputAddress'];
    $nik = $_POST['inputnik'];
    $nohp = $_POST['inputno'];
    $instansi = $_POST['inputZip'];

    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['inputfoto']['name'];
    $ukuran = $_FILES['inputfoto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $rand = rand();
    if(!in_array($ext,$ekstensi)) {
        header("location:eazy.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['inputfoto']['tmp_name'], '../backend/files/eazy_foto/'.$xx);
        mysqli_query($mysqli, "INSERT INTO eazy_pas VALUES(NULL, '$nama', '$email', '$alamat', '$nik', '$nohp', '$instansi', '$xx', 'Belum Selesai')");
        header("location:eazy.php?alert=berhasil");
    }
?>
<?php 
    include '../../koneksi.php';
    
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['fileslide']['name'];
    $ukuran = $_FILES['fileslide']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    $rand = rand();
    if(!in_array($ext,$ekstensi) ) {
        header("location:slider-dash.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['fileslide']['tmp_name'], '../files/slider/'.$xx);
        mysqli_query($mysqli, "INSERT INTO slider_info VALUES(NULL,'$xx')");
        header("location:slider-dash.php?alert=berhasil");
    }
?>
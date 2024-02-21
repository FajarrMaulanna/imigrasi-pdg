<?php 
    include '../../koneksi.php';
    
    $id_slide = htmlspecialchars($_POST['id_slide']);
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
        mysqli_query($mysqli, "UPDATE slider_info SET file_slide = '$xx' WHERE id_slide = '$id_slide'");
        header("location:slider-dash.php?alert=berhasil");
    }
?>
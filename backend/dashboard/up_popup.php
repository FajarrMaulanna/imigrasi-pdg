<?php 
    include '../../koneksi.php';
    
    $idpop = htmlspecialchars($_POST['id_pop']);
    
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['filepopup']['name'];
    $ukuran = $_FILES['filepopup']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $rand = rand();
    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?alert=gagal_ekstensi");
    }else{		
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['filepopup']['tmp_name'], '../files/popup/'.$xx);
        mysqli_query($mysqli, "UPDATE pop_up SET file_popup = '$xx' WHERE id = '$idpop'");
        header("location:index.php?alert=berhasil");
    }
?>
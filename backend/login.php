<?php
    session_start();

    // menghubungkan dengan koneksi
    include '../koneksi.php';
     
    // menangkap data yang dikirim dari form
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(md5($_POST['password']));

    $mail = mysqli_real_escape_string($mysqli, $email);
    $pass = mysqli_real_escape_string($mysqli, $password);
     
    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($mysqli, "SELECT * FROM user WHERE email='$mail' AND password='$pass'");
    $row = mysqli_fetch_array($data);
    if($row['email'] == $email AND $row['password'] == $password){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $row['password'];
        $_SESSION['status'] = "login";
        header("location:dashboard/");
    }else{
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        header("location:index.php?pesan=gagal");
    }
?>
<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'imigrasipdg';

    $mysqli = mysqli_connect($host, $username, $password, $db);
    
    if (!$mysqli){
        die("Koneksi gagal:".mysqli_connect_error());
    }
?>
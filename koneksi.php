<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "php_crud";

    $conn = new mysqli($host,$user,$pass,$db_name);

    if($conn->connect_error){
        die('Koneksi Gagal :'. $conn->connect_error);
    }
    ?>
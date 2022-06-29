<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_cafe";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        die("Gagal Koneksi dengan server...");
    }
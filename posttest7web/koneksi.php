<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "pertanian_db";

    $conn = mysqli_connect(hostname: $server, username: $user, password: $password, database: $nama_database);

    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }else {
        echo "";
    }
?>
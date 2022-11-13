<?php

    $host = "localhost";
    $user = "u746375557_admin";
    $password = 'Panic12345.';
    $db_name = "u746375557_phplogin";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>

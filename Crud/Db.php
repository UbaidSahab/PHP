<?php
    $hostname = "localhost";
    $userName = "root";
    $pass = "";
    $DatabaseName ="mycompany";

    $connection = mysqli_connect($hostname,$userName,$pass,$DatabaseName);
    if(!$connection){
        echo "Connect not Build Sucessfully";
    }
?>
<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "contact_management_system";

    //create connection
    return $con = mysqli_connect($server, $username, $password, $database) or die("Connection failed!");
?>
<?php
    require "connect.php";

    $id = $_GET['id'];

    mysqli_query($con, "DELETE FROM contact WHERE id = '$id'");

    header("location:view.php");

?>
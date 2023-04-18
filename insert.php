<?php
    include "connect.php";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    if (ISSET($_POST['btn-create']) && $first_name !== '' && $last_name !== '' && $email !== '' && $phone_number !== '' && $address !== ''){
        mysqli_query($con, "INSERT INTO contact(first_name, last_name, email, phone_number, address) VALUES('$first_name', '$last_name', '$email', '$phone_number', '$address')");
    }

    header("location:view.php");
?>
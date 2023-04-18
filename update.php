<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <?php
        require "connect.php";
          $id = $_GET['id'];
            echo $id;

        if(ISSET($_GET['id'])){
            $id = $_GET['id'];
            echo $id;

            //check if data exists
            $response = mysqli_query($con, "SELECT * FROM contact WHERE id = '$id'");
            if(mysqli_num_rows($response) > 0) {
                //display data
                $existing_data = mysqli_fetch_array($response);

                $present_first_name = $existing_data['first_name'];
                $present_last_name = $existing_data['last_name'];
                $present_email = $existing_data['email'];
                $present_phone_number = $existing_data['phone_number'];
                $present_address = $existing_data['address'];
            }

        if(ISSET($_POST['btn-update'])){
            $new_first_name = $_POST['first_name'];
            $new_last_name = $_POST['last_name'];
            $new_email = $_POST['email'];
            $new_phone_number = $_POST['phone_number'];
            $new_address = $_POST['address'];
            mysqli_query($con, "UPDATE contact SET first_name = '$new_first_name', last_name = '$new_last_name', email = '$new_email', phone_number = '$new_phone_number', address = '$new_address' WHERE id = '$id'");

            header("location: view.php");
        } 

        
            
        if(ISSET($existing_data)){
            //display update form below 
    ?>


    <div class="main">
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="create.php">Create Contact Info</a>
            <a href="view.php">View Contact Info</a>
        </div>
        <div class="line"></div>
        <div class="form-content">
            <form action="" method="POST">
                <h1>Update Contact Information</h1>
                    <label style="display: flex; align-items: flex-start; justify-content: flex-start; align-content:flex-start;">First Name: </label>
                    <input type="text" name="first_name" id="" value="<?php echo $existing_data['first_name'] ?>">
                    <label>Second Name: </label>
                    <input type="text" name="last_name" id="" value="<?php echo $existing_data['last_name'] ?>">
                    <label>Email: </label>
                    <input type="email" name="email" id="" placeholder="abc@gmail.com" value="<?php echo $existing_data['email'] ?>">
                    <label>Phone Number: </label>
                    <input type="tel" name="phone_number" id="" value="<?php echo $existing_data['phone_number'] ?>">
                    <label>Address: </label>
                    <input type="text" name="address" id="" value="<?php echo $existing_data['address'] ?>">
                    <button type="submit" name="btn-update">Update</button>
            </form>
        </div>
    </div>

    <?php

        } else {
            //pass error
            echo "Sorry we did not find your contact information!. Create your contact information.";
        }

        }

    ?>

    <?php



    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Contact Management System</title>
</head>
<body>
   
    <div class="main">
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="create.php">Create Contact Info</a>
            <a href="view.php">View Contact Info</a>
        </div>
        <div class="line"></div>
        <div class="form-content">
            <form action="insert.php" method="POST">
                <h1>Create Contact Information</h1>
                    <label style="display: flex; align-items: flex-start; justify-content: flex-start; align-content:flex-start;">First Name: </label>
                    <input type="text" name="first_name" id="">
                    <label>Second Name: </label>
                    <input type="text" name="last_name" id="">
                    <label>Email: </label>
                    <input type="email" name="email" id="" placeholder="abc@gmail.com">
                    <label>Phone Number: </label>
                    <input type="tel" name="phone_number" id="">
                    <label>Address: </label>
                    <input type="text" name="address" id="">
                    <button type="submit" name="btn-create">Create</button>
            </form>
        </div>
    </div>

      <?php
        include "connect.php";

        $data = mysqli_query($con, "SELECT * FROM contact");

    ?>


    
</body>
</html>
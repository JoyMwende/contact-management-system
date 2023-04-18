<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Contact Information</title>

    <style>
        .view {
            width: 100%;
            margin-top: 50px;
            }

            table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
            color: #333;
            }

            th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            }

            th {
            background-color: #f2f2f2;
            font-weight: bold;
            }

            tr:hover {
            background-color: #f5f5f5;
            }

            .update, .delete {
            display: block;
            width: 60px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            border-radius: 4px;
            text-decoration: none;
            margin: 0 auto;
            }

            .delete {
            background-color: #f44336;
            margin-top: 10px;
            }

            .update:hover, .delete:hover {
            background-color: #3e8e41;
            }

            @media (max-width: 600px) {
            th, td {
                padding: 8px;
            }
            .update, .delete {
                font-size: 12px;
                padding: 6px;
            }
            }
    </style>
</head>
<body>
    <div class="main">
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="create.php">Create Contact Info</a>
            <a href="view.php">View Contact Info</a>
        </div>
        <div class="line"></div>
        <div class="view">
            <table>
                <tbody>
                    <tr>
                        <th>Contact ID</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                        include "connect.php";

                        $data = mysqli_query($con, "SELECT * FROM contact");

                        while($row_data = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $row_data['id'] ?></td>
                        <td><?php echo $row_data['first_name'] ?></td>
                        <td><?php echo $row_data['last_name'] ?></td>
                        <td><?php echo $row_data['email'] ?></td>
                        <td><?php echo $row_data['phone_number'] ?></td>
                        <td><?php echo $row_data['address'] ?></td>
                        <td><a class="update" href="update.php?id=<?php echo $row_data['id'] ?>">Update</a></td>
                        <td class="delete"><a href="delete.php?id=<?php echo $row_data['id'] ?>">Delete</a></td>
                    </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
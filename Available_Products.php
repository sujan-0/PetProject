<!DOCTYPE html>
<html lang="en">
<head>

<style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }
        
        nav ul li a:hover {
            color: #ff9900;
        }
        
        main {
            padding: 20px;
            text-align: center;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        footer p {
            margin: 0;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia - PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body style="margin:20px auto">
    <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="PetProduct.php">Pet Products</a></li>
                <li><a href="About_Us.php">About Us</a></li>
                <li><a href="CRUD1/index.php">Available Products</a></li>
                <li><a href="Contact.php">Contacts</a></li>
                <li><a href="Admin.php">Admin</a></li>
            </ul>
        </nav>

    <footer>
        <p>© 2024 Petshop Online Website. All Rights Reserved Group 4.</p>
    </footer>

    <div class="container">
        <h2 style="text-align:center; font-size:25px; color:blue;">Petopia</h2>
        <br>
        <div style="text-align:center; color:green;">
            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-plus"></span> Add New
            </a>
        </div>
        <br>
        <table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
            <thead>
                <tr>
                    <th><center>Picture</center></th>
                    <th><center>Name</center></th>
                    <th><center>Address</center></th>
                    <th><center>Phone</center></th>
                    <th><center>Action</center></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('database.php');
                $result = $mysqli->query("select * from pet_basics");
                while($row = $result->fetch_assoc()){
                    $img = "http://localhost/php_crud/profile_images/".$row['id']. ".jpg";
                ?>
                <tr>
                    <td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <a href="#detail<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-eye-open"></span> Detail
                        </a>&nbsp;
                        <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span> Edit
                        </a>&nbsp;
                        <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-trash"></span> Delete
                        </a>&nbsp;
                        <?php 
                        include('show_detail_modal.php');
                        include('show_edit_modal.php');
                        include('show_delete_modal.php');
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php include('show_add_modal.php'); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#empTable').dataTable();
            $('.file-upload').file_upload();
        });
    </script>
</body>
</html>

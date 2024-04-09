<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop Online Website</title>
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
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="PetProduct.php">Pet Products</a></li>
            <li><a href="About_Us.php">About Us</a></li>
            <li><a href="CRUD1/Available_Product.php">Available Products</a></li>
            <li><a href="Contact.php">Contacts</a></li>
            <li><a href="Admin.php">Admin</a></li>
        </ul>
    </nav>

   

    <footer>
        <p>© 2024 Petshop Online Website. All Rights Reserved Group 4.</p>
    </footer>
</body>
</html>

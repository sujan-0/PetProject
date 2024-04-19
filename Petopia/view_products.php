<?php
// Database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addproducts";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all products from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .product h3 {
            margin-top: 0;
            color: #333;
        }

        .product p {
            margin: 5px 0;
            color: #666;
        }

        .product img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>View All Products</h2>

    <div class="container">
        <?php
        // Display products and their images
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product'>";
            echo "<h3>" . $row['productName'] . "</h3>";
            echo "<p>Description: " . $row['productDescription'] . "</p>";
            echo "<p>Category: " . $row['productCategory'] . "</p>";
            echo "<p>Gender: " . $row['gender'] . "</p>";
            echo "<p>Weight: " . $row['itemsWeight'] . "</p>";
            echo "<p>Price: $" . $row['price'] . "</p>";
            echo "<p>Compare Price: $" . $row['comparePrice'] . "</p>";
            echo "<img src='PETPROJECT/Petopia/images/" . $row['image'] . "' alt='Product Image'>";
            echo "</div>";
        }
        ?>
    </div>

    <?php
    // Close database connection
    mysqli_close($conn);
    ?>

</body>
</html>

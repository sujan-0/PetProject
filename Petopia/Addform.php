<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea,
        input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Added margin to separate buttons */
            display: inline-block; /* Display buttons inline */
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        input[type="reset"] {
            background-color: #f44336;
            margin-left: 4%;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 80%;
            }

            input[type="submit"],
            input[type="reset"] {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required>

            <label for="productDescription">Product Description:</label>
            <textarea id="productDescription" name="productDescription" required></textarea>

            <label for="productCategory">Product Category:</label>
            <select id="productCategory" name="productCategory">
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Rabbit">Rabbit</option>
                <option value="Other">Other</option>
            </select>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="itemsWeight">Items Weight:</label>
            <input type="number" id="itemsWeight" name="itemsWeight" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <label for="comparePrice">Compare Price:</label>
            <input type="number" id="comparePrice" name="comparePrice">

            <label for="image">Product Image:</label>
            <input type="file" id="image" name="image" required>

            <input type="submit" value="Add Product" name="submit">
            <input type="reset" value="Cancel">
        </form>
    </div>
    
    <?php
        // Database connection code
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "addproducts"; // Corrected database name

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            // Process form data
            $productName = $_POST['productName'];
            $productDescription = $_POST['productDescription'];
            $productCategory = $_POST['productCategory'];
            $gender = $_POST['gender'];
            $itemsWeight = $_POST['itemsWeight'];
            $price = $_POST['price'];
            $comparePrice = $_POST['comparePrice'];

            // Handle image upload
            $image = $_FILES['image']['name'];
            $targetDir = "C:/xampp/htdocs/PetProject/Petopia/images/";
            $targetFilePath = $targetDir . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

            // Insert data into database
            $sql = "INSERT INTO products (productName, productDescription, productCategory, gender, itemsWeight, price, comparePrice, image)
                    VALUES ('$productName', '$productDescription', '$productCategory', '$gender', $itemsWeight, $price, $comparePrice, '$image')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Product added successfully.');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Close database connection
        mysqli_close($conn);
        ?>

        <div class="container">
                <a href="view_products.php" style="display: block; text-align: center; margin-top: 20px;">View All Products</a>
            </div>



</body>
</html>

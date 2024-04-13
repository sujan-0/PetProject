<!DOCTYPE html>
<html>
<head>
    <title>Pets Inquire Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pets Inquire Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" required><br>
            
            <label for="contact">Contact Information:</label><br>
            <input type="text" id="contact" name="contact" required><br>
            
            <label for="pet_name">Pet's Name:</label><br>
            <input type="text" id="pet_name" name="pet_name" required><br>
            
            <label for="pet_type">Pet's Type:</label><br>
            <input type="text" id="pet_type" name="pet_type" required><br>
            
            <input type="submit" value="Inquire us" name="submit">
        </form>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root"; // Your MySQL username
        $password = ""; // Your MySQL password
        $dbname = "pets_database";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Form submission handling
        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $pet_name = $_POST['pet_name'];
            $pet_type = $_POST['pet_type'];
            
            // Email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='error'>Invalid email address. Please enter a valid email.</div>";
                exit;
            }
            
            // Contact validation
            if (!preg_match("/^[0-9]{10}$/", $contact)) {
                echo "<div class='error'>Invalid contact number. Please enter a 10-digit number.</div>";
                exit;
            }
            
            // Insert data into database
            $sql = "INSERT INTO inquiries (email, contact, pet_name, pet_type)
                    VALUES ('$email', '$contact', '$pet_name', '$pet_type')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Inquiry submitted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html>

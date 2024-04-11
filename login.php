<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 600px; /* Increased max-width for desktop */
            margin: auto;
            margin-top: 100px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        </form>
        <?php
        if(isset($_POST['login'])) {
            // Database connection
            $servername = "localhost"; // Change this if your database server is different
            $username = "root"; // Change this if your database username is different
            $password = ""; // Change this if your database password is different
            $dbname = "admin"; // Change this if your database name is different

            // Attempt to establish connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve username and password from the form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // SQL injection prevention
            $username = $conn->real_escape_string($username);
            $password = $conn->real_escape_string($password);

            // SQL query to check if the provided credentials exist in the database
            $sql = "SELECT * FROM admin_credentials WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);

            // Check if there is a match
            if ($result && $result->num_rows > 0) {
                // Redirect to admin panel
                header("Location: admin_panel.php");
                exit(); // Ensure script stops execution after redirection
            } else {
                // Display JavaScript alert for incorrect credentials
                echo '<script>alert("Incorrect username or password");</script>';
                // Redirect to login.php
                echo '<script>window.location.href = "login.php";</script>';
                exit(); // Ensure script stops execution after redirection
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>

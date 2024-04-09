<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<style>
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

  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }
  .container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  input[type="text"],
  input[type="password"],
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="PetProduct.php">Pet Products</a></li>
            <li><a href="About_Us.php">About Us</a></li>
            <li><a href="Available_Products.php">Available Products</a></li>
            <li><a href="Contact.php">Contacts</a></li>
            
        </ul>
    </nav>

<div class="container">
  <h2>Admin Login</h2>
  <form id="loginForm">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
  
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
  
    <input type="submit" value="Login">
  </form>
</div>

<script>
document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get username and password input values
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Validate username and password
  if (username === "admin" && password === "admin123") {
    alert("Login successful!"); // Display success message
    // Redirect to admin dashboard or perform other actions
  } else {
    alert("Incorrect username or password. Please try again."); // Display error message
  }
});
</script>

</body>
</html>

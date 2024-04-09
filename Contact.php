<!DOCTYPE html>
<html>
<head>
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
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin: 50px auto;
            max-width: 1000px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
        }

        .form-container, .contact-container {
            width: 45%;
            padding: 20px;
        }

        .form-container {
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type=text], input[type=email], textarea {
            width: calc(100% - 24px);
            padding: 12px;
            margin: 6px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .contact-container {
            background-color: #f2f2f2;
            border-radius: 10px;
        }

        p {
            margin: 10px 0;
            color: #666;
        }

        .contact-info {
            font-size: 18px;
            font-weight: bold;
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
            <li><a href="Admin.php">Admin</a></li>
        </ul>
    </nav>

<div class="container">
    <div class="form-container">
        <form action="/submit_form">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email..">

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="Your phone number..">

            <label for="query">Queries</label>
            <textarea id="query" name="query" placeholder="Write something.."></textarea>

            <button type="submit">SUBMIT</button>
        </form>
    </div>

    <div class="contact-container">
        <h2>Prefer another way to find us?</h2>
        <p class="contact-info">+977 9801022637, +977 01-5970120, +977 9801000078</p>
        <p class="contact-info">info@heraldcollege.edu.np</p>
        <!-- You can embed a Google Map here -->
    </div>
</div>

</body>
</html>

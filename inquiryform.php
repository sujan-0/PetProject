<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Form</title>
    <style>
        /* Add your custom CSS styles here */
        /* This is just a basic example */
        form {
            width: 50%;
            margin: 0 auto;
        }
        input[type="text"], input[type="email"], textarea, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Adoption Form</h2>
    <form action="submit_adoption.php" method="post">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Your Phone Number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="pet">Pet you want to adopt</label>
        <select id="pet" name="pet" required>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="rabbit">Rabbit</option>
            <!-- Add more options if needed -->
        </select>

        <label for="message">Message (Optional)</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

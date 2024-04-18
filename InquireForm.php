<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            background-color: #f0f0f0;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
            border-radius: 10px;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="date"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $animalName = $_POST["animalName"];
    $adopterName = $_POST["adopterName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $agreement = $_POST["agreement"];
    $date = $_POST["date"];
    // Process the form data here
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="animalName">Name of the animal being adopted:</label><br>
    <input type="text" id="animalName" name="animalName" required><br>
    <label for="adopterName">Name of the adopter:</label><br>
    <input type="text" id="adopterName" name="adopterName" required><br>
    <label for="email">Email address:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="phone">Phone number:</label><br>
    <input type="tel" id="phone" name="phone"><br>
    <input type="checkbox" id="agreement" name="agreement" required>
    <label for="agreement">I hereby understand and agree that the current owner makes no representations or warranties, expressed or implied, about the above-mentioned animal’s temperament and is absolved from any liability for future damages or injuries caused by said animal. I also understand and agree that the current owner further gives no guarantees, expressed or implied, of the animal’s suitability to the adopter and/or his family.</label><br>
    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date" required><br>
    <br>


    <br> <input type="submit" value="SUBMIT FORM">
</form>

</body>
</html>

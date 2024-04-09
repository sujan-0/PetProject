<?php
include('database.php');

$id = $_POST['pet_id'];
$pet_name = $_POST['pet_name'];
$pet_breed = $_POST['pet_breed'];
$pet_description = $_POST['pet_description'];
$pet_price = $_POST['pet_price'];

// Update pet information in the database
$sql = "UPDATE pet_basics SET name=?, breed=?, description=?, price=? WHERE id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssssi", $pet_name, $pet_breed, $pet_description, $pet_price, $id);
if ($stmt->execute()) {
    // Set a constant
    define ("FILEREPOSITORY","profile_images/");

    // Make sure that the file was POSTed.
    if (is_uploaded_file($_FILES['pet_image']['tmp_name'])) {
        // Was the file a JPEG?
        if ($_FILES['pet_image']['type'] != "image/jpeg") {
            echo "<p>Profile image must be uploaded in JPEG format.</p>";
        } else {
            // Remove the existing profile image
            $filename = $id . ".jpg";
            unlink(FILEREPOSITORY . $filename);

            // Move the new profile image to the designated folder
            $result = move_uploaded_file($_FILES['pet_image']['tmp_name'], FILEREPOSITORY . $filename);

            if ($result == 1) {
                echo "<p>File successfully uploaded.</p>";
            } else {
                echo "<p>There was a problem uploading the file.</p>";
            }
        }
    }
    header('location:index.php');
} else {
    echo "Error: " . $mysqli->error;
}
?>

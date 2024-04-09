<?php
include('database.php');

$name = $_POST['pet_name'];
$breed = $_POST['pet_breed'];
$description = $_POST['pet_description'];
$price = $_POST['pet_price'];

$mysqli->query("INSERT INTO pet_basics (name, breed, description, price) 
                VALUES ('$name', '$breed', '$description', '$price')");
 
// Check if the insertion was successful
if ($mysqli->affected_rows > 0) {
    echo "<p>Record inserted successfully.</p>";
} else {
    echo "<p>Failed to insert record.</p>";
}


$res = $mysqli->query("select id from pet_basics order by id desc");
$row = $res->fetch_row();
$id = $row[0];
 
// Set a constant
define ("FILEREPOSITORY","profile_images/");
 
// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name']))
{
// Was the file a JPEG?
if ($_FILES['pimage']['type'] != "image/jpeg") {
echo "<p>Profile image must be uploaded in JPEG format.</p>";
} else {
 
//$name = $_FILES['classnotes']['name'];
$filename=$id.".jpg";
 
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
header('location:index.php');
?>
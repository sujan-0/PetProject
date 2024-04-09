<?php
include('database.php');
$id=$_GET['id'];
$mysqli->query("delete from pet_basics where id=$id");
unlink("profile_images/".$id.".jpg");
header('location:index.php');
?>
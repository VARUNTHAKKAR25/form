<?php
include_once("connect.php"); // Include your database connection file

// Retrieve the form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// Perform the insert query
$insert_query = "INSERT INTO user (name, mobile, email) VALUES ('$name', '$mobile', '$email')";
mysqli_query($mysqli, $insert_query);

// Redirect back to the homepage or any other desired page
header("Location: index.php");
exit();
?>

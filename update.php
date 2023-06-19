<?php
include_once("connect.php");

// Check if the form is submitted and the required fields are present
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['email'])) {
  // Retrieve the form data
  $id = $_POST['id'];
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];

  // Perform the update query
  $update_query = "UPDATE user SET name = '$name', mobile = '$mobile', email = '$email' WHERE id = $id";
  mysqli_query($mysqli, $update_query);

  // Redirect back to the homepage or any other desired page
  header("Location: Untitled-1.php");
  exit();
} else {
  echo "Invalid request.";
  exit();
}
?>
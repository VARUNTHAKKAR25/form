<?php 
include_once("connect.php");

// Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
  $id = $_GET['id'];

  // Fetch the user record based on the ID
  $query = "SELECT * FROM user WHERE id = $id";
  $result = mysqli_query($mysqli, $query);

  // Check if a user with the provided ID exists
  if(mysqli_num_rows($result) == 1) {
    $user_data = mysqli_fetch_assoc($result);
  } else {
    echo "User not found.";
    exit();
  }
} else {
  echo "Invalid request.";
  exit();
}
?>

<html>
<head>
  <title>Edit User</title>
</head>
<body>
  <a href="Untitled-1.php">Go back to Homepage</a><br/><br/>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
    <input type="text" name="name" placeholder="Name" value="<?php echo $user_data['name']; ?>" required><br>
    <input type="text" name="mobile" placeholder="Mobile" value="<?php echo $user_data['mobile']; ?>" required><br>
    <input type="email" name="email" placeholder="Email" value="<?php echo $user_data['email']; ?>" required><br>
    <input type="submit" value="Update">
  </form>
</body>
</html>
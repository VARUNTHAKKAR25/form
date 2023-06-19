<?php
include_once("connect.php");
$id =$_GET ['id'];
$result=mysqli_query($mysqli,"Delete from user where id=$id");

header("Location: index.php");
?>

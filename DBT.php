<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE User";
if (mysqli_query($conn, $sql))
{
  echo "Database created successfully";
} else
{
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

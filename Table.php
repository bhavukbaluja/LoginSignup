<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="user";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql= "CREATE TABLE Users(
First_Name VARCHAR(30) NOT NULL,
Last_Name VARCHAR(30) NOT NULL,
Phone DOUBLE(10,0) NOT NULL,
Gender VARCHAR(8) NOT NULL,
Email VARCHAR(35) PRIMARY KEY,
Password VARCHAR(30) NOT NULL,
DOB DATE NOT NULL,
Token VARCHAR(31) NOT NULL,
Status VARCHAR(15) NOT NULL)";
if($conn->query($sql)==TRUE)
{
	echo("Table Users created successfully");
}
else
{
	echo("Error Creating Table: ".$conn->error);
}
mysqli_close($conn);
?>

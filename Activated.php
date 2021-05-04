<html>
<body bgcolor= "pink">
<style>
table, th, td {
  border-collapse: collapse;
  background-color:white;
  height:400px;
  text-color:white;
  width:600px;
  opacity:1;
  border: 2px solid black;
  align:center;
  font-weight: bold;
  color: #000000;
}
</style>
<br><br><br><br><br><br>
<center>
<table>
<tr>
<td>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="user";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
  if(isset($_GET['token']))
  {
    $token=$_GET['token'];
  $sql= "UPDATE Users SET Status='active' WHERE Token='$token'";
  if(mysqli_query($conn,$sql))
  { echo "success";
}
else
{
   echo "<center>ERROR: Could not able to execute $sql ", mysqli_error($conn),"</center>";
  }
 }
  mysqli_close($conn);
 }
echo "Your Account is activated!";
$_SESSION['msg']="Your Account is activated";


?>
</td>
</tr>
</table>
</center>
</body>
</html>

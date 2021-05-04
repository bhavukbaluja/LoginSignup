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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST)
{
   $p=($_POST['password']);
   $id=trim(strtolower($_POST['id']));
   $result=null;
   $SELECT = "SELECT Password FROM Users WHERE Email = '$id' and Status='active'";
   $result = mysqli_query($conn, $SELECT);
   $r = $result->fetch_assoc();
   echo $r["Password"],"<br>";

   $verify = password_verify($p, $r["Password"]);
   echo $verify,"<br>";
   if ( mysqli_num_rows($result)>0)
	 {
     if (password_verify($p, $r["Password"]))
     {
        echo 'Password Verified!';
     }
     else
     {
        echo 'Incorrect Password!';
     }
            echo"<center><h1>Welcome!! Login Successful<br></h1></center>";
   }

	else
	{
      echo "<center><h2>Invalid username</h2>";
			echo "<a href='Signin.php'>Go Back</a><br></center>";

  }

}
?>

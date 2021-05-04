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
$dbname="user";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST)
{
  session_start();
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $no=$_POST['no'];
  $Gender=$_POST['Gender'];
  $p1=$_POST['password1'];
  $p2=$_POST['password2'];
  $id=trim(strtolower($_POST['id']));
  $DOB=$_POST['date'];
  $Token=bin2hex(random_bytes(30));
  $status="inactive";

  if($p1!=$p2)
  { echo "Password don't match!!\n";
  }
  else if($p1===$p2)
  {
   $SELECT= "SELECT Email FROM Users WHERE Email= '$id'";
   //$plaintext_password = "Password@123";
   // $pa = password_hash($p1, PASSWORD_DEFAULT);
// function cs()
// {
//   $salt= 'Hellotomyworld';
// }
//    $password_options = ['cost' => 11,$salt];
   $pa = password_hash($_POST['password1'], PASSWORD_DEFAULT);

   $INSERT ="INSERT INTO Users VALUES('$fname','$lname', '$no', '$Gender', '$id', '$pa', '$DOB','$Token','$status')";

   $result = mysqli_query($conn, $SELECT);
            if ( mysqli_num_rows($result) >0)
            {

               echo "<center><h2>Someone already register using this email. Choose any other Email !!<h2><br><br>";
			         echo "<a href='Sign UpPage.php'>Go Back</a><br></center>";

            }
			      else
		   	{
                $subject= "Account Activation Email";
                $body="Hi, ".$fname." ".$lname. "
Click here to activate your account
http://localhost/phpcodes/ATS/Activated.php?token=$Token";
                $sender_email="From: workingpurpose258@gmail.com";
                if(mail($id,$subject, $body, $sender_email))
                {
                  if(mysqli_query($conn,$INSERT))
          	            {
                  $_SESSION['msg']="Check your mail to activate your account $id";
                  header('location:Signin.php');
                }
                else
                {
                         echo "<center>ERROR: Could not able to execute $INSERT ", mysqli_error($conn),"</center>";
                        }
                }
                else {
                  echo "Email sending Failed....";
                }

                  echo "<center><h2>New record inserted sucessfully<br>";
				            echo "<a href='Signin.php'>Login</a></h2></center>";
                }

			}
	        mysqli_close($conn);
  }
// }

?>
</td>
</tr>
</table>
</center>
</body>
</html>

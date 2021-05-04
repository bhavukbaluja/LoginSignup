<html>
<body>
<html>
<head>
<title>Sign Up Form</title>

<style>
h1{font-family:Cambria; font-size:50px; color:red; }
h3{font-size:25px; }
h6{font-size:18px; color:orange;}
h7{ color:red;}
h2{ color:Black;}

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

</head>
<body bgcolor= "pink">
<center><h1><i>Sign Up</i></h1>
<form method="post" action="connection.php">
<table>
<tr>
<td>
<center><h2> Enter Your Details:</h2></center>
Fist Name:<h7>*</h7>
<input type="text"  name="fname" required><br><br>

Last Name:<h7>*</h7>
<input type="text"  name="lname" required><br><br>

Contact Number:
<input type="number" name="no" required><br><br>

Gender:
<input type="radio" name="Gender" value="Male" required>Male
<input type="radio" name="Gender" value="Female">Female
<input type="radio" name="Gender" value="Others">Others
<br><br>

Email Id:<h7>*</h7>&nbsp;
<input type="text" name="id" required><br><br>

Choose Password:<h7>*</h7> &nbsp;
<input type="password" name="password1" required><br><br>

Corfirm Password:<h7>*</h7>
<input type="password" name="password2" required><br><br>


Date of Birth:<h7>*</h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="date" required> &nbsp;&nbsp;
<br><br>





<center>
<input type = "submit" name= "Submit"><br><br>

<a href="signin.php">Already have an Account? Login</a>
</center>
</td>
</tr>
</table>
</h4>

</body>
</html>

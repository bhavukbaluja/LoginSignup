<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 17px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.container input {
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 4px;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: white;
  border-radius: 50%;
}

.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 6.5px;
	left: 6.5px;
	width: 7px;
	height: 7px;
	border-radius: 50%;
	background: white;
}
h1{font-family:Cambria; font-size:50px; color:#003399; }
h3{font-size:25px; }
h6{font-size:18px; color:orange;}
h7{ color:red;}
h2{ color:Black;}
a:link, a:visited {
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.jumbotron{
  margin-top: 2.5%;
  margin-bottom: 2.5%;
  width: 95%;
  border-radius: 4px;
  padding-top: 23px;
}
</style>

<body bgcolor= "pink">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand">ATS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contactus.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<center>
  <div class="jumbotron">
  <div class="btn-group btn-group-lg ">
  <button type="button" class="btn btn-secondary"><a href="Signuppage.php"><u>Register</u></a></button>
  <button type="button" class="btn btn-primary"><a href="signin.php">Sign in</a></button>
</div>
<h1><i><b>Register</b></i></h1>
<form method="post" action="connection.php">
<table>
<tr>
<td>
Name:<h7>*</h7>
<input type="text" class="form-control form-control" placeholder="First Name" name="fname" required>
<input type="text" class="form-control form-control" placeholder="Last Name" name="lname" required><br>

Contact Number:<h7>*</h7>&nbsp;
<input type="number" class="form-control form-control" placeholder="Contact no." name="no" required><br>

Gender:<h7>*</h7>&nbsp;<br>
<label  class="container">Male
  <input type="radio" name="Gender" value="Male" required>
  <span class="checkmark"></span>
</label>
<label class="container">Female
  <input type="radio" name="Gender" value="Female">
  <span class="checkmark"></span>
</label>
<label class="container">Others
  <input type="radio" name="Gender" value="Others">
  <span class="checkmark"></span>
</label>
<br>

Email Id:<h7>*</h7>&nbsp;
<input type="text" class="form-control form-control" placeholder="Email Address" name="id" required><br>

Choose Password:<h7>*</h7> &nbsp;
<input type="password" class="form-control form-control" placeholder="Password" name="password1" required><br>

Corfirm Password:<h7>*</h7>
<input type="password" class="form-control form-control" placeholder="Confirm Password" name="password2" required><br>

Date of Birth:<h7>*</h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="date" placeholder="DD-MM-YYYY" required> &nbsp;&nbsp;
<br><br>
</div>
<center>
<button type="submit" class="btn btn-primary" >Create Account</button><br><br>
</form>
<br>
</center>
</td>
</tr>
</table>
</h4>

</body>
</html>

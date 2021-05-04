<!DOCTYPE html>
<html>
<head>
<title>Sign In Form</title>
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
  /* #eee; */
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

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand">ATS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
  	<button type="button" class="btn btn-primary"><a href="Signuppage.php">Register</a></button>
  	<button type="button" class="btn btn-secondary"><a href="Signin.php"><u>Sign in</u></a></button>
  </div>
<h1><i><b>Sign in</b></i></h1>
<form method="post" action="Login2.php">
	<table>
	<tr>
	<td>
	Email Id:<h7>*</h7>&nbsp;
	<input type="text" class="form-control form-control-lg" placeholder="Email Address" name="id" required><br>

	Choose Password:<h7>*</h7> &nbsp;
	<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required><br>

<button type="submit" class="btn btn-primary" >Sign in</button><br><br>
</form>
<br>
</div>
</td>
</tr>
</table>

</center>
</body>
</html>

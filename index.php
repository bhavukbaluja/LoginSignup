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
h1{font-family:Cambria; font-size:50px; color:#003399; }
h3{font-size:25px; }
h6{font-size:20px;
  color:#bfbfbf;
  }
h6:hover{
  color: white;
}
h7{ color:red;}
h2{ font-family:Cambria; font-size:25px; color:#00e600; }

h8{
  color:#bfbfbf;

  font-size: 20px;
}
h8:hover{
  color: white;
}
h9{
 color: white;
 font-size: 20px;
}
</style>
<body bgcolor= "pink">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand"><h2><b>ATS</b></h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active color:blue">
        <a class="nav-link" href="index.php"><h9><b>Home<span class="sr-only">(current)</span></b></h9> </a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="#"><h8>Link</h8></a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="Contact.php"><h8>Contact Us</h8></a>
      </li>
    </ul>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Signuppage.php"><h6>Register/Signup</h6></a>
      </li>
    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<center>
<br>
</center>
</body>
</html>

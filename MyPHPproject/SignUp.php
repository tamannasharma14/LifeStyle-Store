<!DOCTYPE html>
<?php
include 'common.php';
if (isset($_SESSION['email']))
 {
  header('location: Product.php');
 }
 ?>

<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style>
  footer{
      margin-top:170px;
      padding: 10px 0;
      background-color: #101010;
      color:#9d9d9d;
      bottom: 0;
      width: 100%
  }
  body{
	  background-color: Gainsboro;
  }
  .a{
	  height:500px;
	  width:550px;
  }
  
	
</style>
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">E-Store</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
                         <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                         <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
                   <li><a href = "AboutUs.php"><span class = "glyphicon glyphicon-th-list"></span> About Us</a></li>
                   <li><a href = "ContactUs.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us</a></li>

    </ul>
            </div>
          </div>
        </div>

<br><br><br><br>
 <div class="container">
 <div class="row">
	<div class="col-xs-6 " style="float:left;">
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
	<div class="a">
      <img src="30.jpg" alt="Los Angeles"  style=" height:100%; width:100%;">
	  </div>
    </div>

    <div class="item">
	<div class="a">
      <img src="34.jpg" alt="Chicago" style=" height:100%; width:100%;">
	  </div>
    </div>

    <div class="item">
		<div class="a">
      <img src="31.jpg" alt="New York" style=" height:100%; width:100%;">
	  </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	
       
     <div class="col-xs-4 " style="float:right;border-style:outset;border-radius: 25px;">
   
      <h3>Sign Up</h3>
      <form method="POST" action="signup_script.php" >

        <div class="form-group">
          <input type="text" class="form-control" name="user" required="true" placeholder="Name">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"placeholder="Email">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" pattern=".{6,}" name="password" required = "true" placeholder="Password">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" maxlength="10" size="10" name="contact" placeholder="Contact">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="city"  placeholder="City">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="address" placeholder="Address">

        </div>
    <div><b class="red">
     </b>
	 </div>

        <button name="button" class="btn btn-primary" style="margin-bottom:100px;">Submit</button>
		
      </form>

    </div>

  </div>

</div>
<footer>
  <div class="container">
<center><p>Copyright © E-Store. All Rights Reserved | Contact Us: +91 90000 00000</p></center>
  </div>
</footer>
</body>
</html>


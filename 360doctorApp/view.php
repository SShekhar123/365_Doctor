<?php
session_start();
if(!isset($_SESSION['Doctor']))
{
		header("location:index.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Doctor App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    
	<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
	<button type="button" class="navbar-toggle"
	data-toggle="collapse"
	data-target=".navbar-collapse">
	<span class="sr-only">Toggle Navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php">360 Degree Doctor App</a>
	<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">
	<li><a href="index.php">Registration </a></li>
	<li><a href="#">About</a></li>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="#">Contact Us</a></li>
	</div>
	</div>
	</nav>
	
<?php 
   echo "welcome to the Doctors Application ".$_SESSION['Doctor'].".";
?>

	
	
	
	<br/><br/>
	<br/><br/>
	<br/><br/>
	
	
	
	<div class="navbar navbar-inverse navbar-fixed-bottom"
	 <div class="container">
	 <div class="navbar-text pull-right">360 Doctors Ltd.
	 </div>
	 </div>
	
  </body>
</html>
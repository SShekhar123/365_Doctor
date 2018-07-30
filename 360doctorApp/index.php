<!DOCTYPE html>
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
	<li class="active"><a href="index.php">Registration </a></li>
	<li><a href="#">About</a></li>
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Already a Member?<b	class="caret"></b>
	<ul class="dropdown-menu">
	<li class="dropdown-header"><h5> Login Here	</h5></li>
	<li><a href="#"> Forgot Username? </a></li>
	<li><a href="#"> Forgot Password? </a></li>
	</ul>
   	</li>
	<li><a href="#">Contact Us</a></li>
	</ul>
	</div>
	</div>
	</nav>
	
	
	
	
	<br/><br/>
	<div class="row"><div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="panel panel-primary">
	<div class="panel-heading">Please register with us for exciting discounts!</div>
	<div class="panel-body">
	
	<form action="script.php" method="post">
	<form class="form-horizontal" role="form">
	<div class="form-group">
	  <label for="name" class="control-label col-sm-2">Full Name:</label>
    <div class="col-sm-10">
	  <input type="text" class="form-controll" name="name" id="name"/>
	</div></div><br><br>
	<div class="form-group">
	<label for="email" class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
	  <input type="email" class="form-controll" name="email" id="email"/>
	</div>
	</div><br>
	<div class="form-group">
	  <label for="pwd" class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">
	  <input type="password" id="pass" class="form-controll" name="pass" id="pass"/>
	</div></div><br>
	<div class="form-group">
	<label for="securityQuestion" class="control-label col-sm-2">Question:</label>
      <div class="col-sm-5">
	    <select class="form-control" name="qno" id="qno">
        <option>Please Select the security question..</option>
        <option>Name on your pet?</option>
        <option>First school you studied?</option>
        <option>Your brothers nickname?</option>
        <option>What is your dream job?</option>
      </select>
	</div>
	</div>
	<br><br>
	<div class="form-group">
	  <label for="answer" class="control-label col-sm-2">Your Answer:</label>
    <div class="col-sm-10">
	  <input type="text" class="form-controll" name="answer" id="answer"/>
	</div></div>
	
	<div class="checkbox">
	<div class="col-sm-offset-2 col-sm-10">
	<label><input type="checkbox" class="form-controll" name="cb" id="cb"/>Get Alerts?</label>
    </div></div><br>
	<div class="col-sm-offset-2 col-sm-10">
	<button type="submit" id="post" class="btn btn-primary">Register Now!</button>
	</div></form></div></div>
	</div><div class="col-md-3"></div></div>
	<form>

	
	
	
	<div class="navbar navbar-inverse navbar-fixed-bottom"
	 <div class="container">
	 <div class="navbar-text pull-right">360 Doctors Ltd.
	 </div>
	 </div>
	
  </body>
</html>
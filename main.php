<!DOCTYPE html>
<html>
<head>
	<title>ChatBook Login and signup</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
	body {
		overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 10%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%,-50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 90%;
		left: 30%;
		transform: translate(-50%,-50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hovor{
		width: 60%;
		background-color: #fff;
		border: 2px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}

</style>
<body>
	<div class = "row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">ChatBook</h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
			<img src="images/social_network.gif" class="img-rounded" title="ChatBook" width="650px" height="565px">
			<div id="centered1" class="centered"><h3 style="color:grey;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong> Follow Your Interests.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:grey;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong> See what people are talking about.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:grey;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong> Join the conversation.</strong></h3></div>
		</div>
		<div class="col-sm-6" style="Left:8%;">
			<img src="images/chatbooklogo.jpeg" class="img-rounded" title="Chatbook" width="80px" height="80px">
			<h2><strong>See what's happening in <br> the world right now</strong></h2><br><br>
			<h4><strong>Join ChatBook Today.</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
					?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>
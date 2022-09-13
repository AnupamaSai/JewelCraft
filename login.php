<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php
	include("header.php");
	?>
	<form action="next.php" method="POST">
	<div class="container-fluid " style="width: 40%;margin-top:40px;height: 300px">
		<h1 class="text-center">Login</h1><br>
		<div class="shadow-lg p-3 mb-5 bg-body rounded input-group mb-3">
  		<span class="input-group-text">NAME</span>
  		<input type="text" class="form-control" placeholder="Username" name="name"value="<?php 
  			 //if(isset($_COOKIE['uname'])){
  			 	//echo $_COOKIE['uname'];
  			 //}
  			if(isset($_SESSION['uname'])){
  				echo $_SESSION['uname'];
  			}
  		?>">
		</div>
		<div class="shadow-lg p-3 mb-5 bg-body rounded input-group mb-3">
  		<span class="input-group-text">E-MAIL</span>
  		<input type="password" class="form-control" placeholder="something@gmail.com" name="mail" value="<?php 
  		if(isset($_SESSION['umail'])){
  				echo $_SESSION['umail'];
  			}
  		?>">
		</div>
		<div class="shadow-lg p-3 mb-5 bg-body rounded input-group mb-3">
  		<span class="input-group-text">CONTACT NUMBER</span>
  		<input type="NUMBER" class="form-control" placeholder="Phone number" name="number"value="<?php 
  			if(isset($_SESSION['unumber'])){
  				echo $_SESSION['unumber'];
  			}
  		?>">
		</div>
		<div class="shadow-lg p-3 mb-5 bg-body rounded input-group mb-3">
  		<span class="input-group-text">PASSWORD</span>
  		<input type="password" class="form-control" placeholder="password" name="password"value="<?php 
  			if(isset($_SESSION['upassword'])){
  				echo $_SESSION['upassword'];
  			}
  		?>">
		</div>
		<div>
		<input type="checkbox" class="form-check-input" name="check">
		Remember me<br><br>
		<input type="submit" class="btn btn-primary" style="margin-left: 40%" name="submit">
	</div>
	</div>
	</form>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
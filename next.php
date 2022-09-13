<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$password = $_POST['password'];
	}
	else{
		header('Location:login.php');
	}
	$c = isset($_POST['check'])?$_POST['check']:"";
	echo "<h1>LOGIN SUCCESSFULLY</h1>";

	if($c=='on'){
		// setcookie("uname",$name,time()+3600);
		// setcookie("upswd",$password,time()+3600);
		 //echo "<h3 style = 'color:red'>cookies saved</h3>";
		session_start();
		$_SESSION['uname']= $name;
		$_SESSION['upassword']=$password;
		echo "<h3 style = 'color:red'>Sessions  saved</h3>";

	}
	echo "<a href= 'logout.php' >LogOut</a>";
?>
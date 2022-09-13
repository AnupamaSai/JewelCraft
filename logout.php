<?php 
	 // if(isset($_COOKIE['uname'])){
	 	// setcookie('uname',"",time()-60);
	 	// setcookie('upswd',"",time()-60);
	 	// echo "logout success";
	// }
	session_start();
	if(isset($_SESSION['uname'])){
		session_destroy();
		echo "Sessions are cleared <a href = 'Jewel craft_project.php'>Click here</a> to go to Mian page";
	}
	else{
		echo "Sessions aren't found";
	}
?>
<?php
	session_start();
	if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name'])){
		header("location:../login.php");
	}
	else{
		$now = time();
		if($now > $_SESSION['log_timeout']){
			echo "<script>alert('Sesi anda telah habis. Silahkan masuk kembali !';window.location='login.php?log=time_out')</script>";
		}
	}
	
?>

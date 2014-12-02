<?php
include('con.php');
include('islogin.php');

if(isset($_POST['login'])){
	
	
$username 	= $_POST['username'];
$password 	= md5($_POST['password']);
$username 	= mysql_real_escape_string($username);
$password 	= mysql_real_escape_string($password);
	
	$qry = mysql_query("SELECT * FROM `user` WHERE `user_name`='$username' AND `user_password`='$password'") or die(mysql_error());
	$istrue=mysql_num_rows($qry);
	if($istrue > 0){
		$data = mysql_fetch_array($qry);
		$_SESSION['user_name'] = $data['user_name'];
		$_SESSION['user_real_name'] = $data['user_real_name'];
		$_SESSION['user_cat_id'] = $data['user_cat_id'];
		$_SESSION['login_time'] = time();
		$_SESSION['login_timeout'] = $_SESSION['login_time'] + (60*60);
		
		$now = date("Y-m-d H:i:s");
		mysql_query("UPDATE `user` SET `user_last_login`='$now' WHERE `user_name`='$username'") or die(mysql_error());
		
		//log
		mysql_query("INSERT INTO `system_log` VALUES('','".$data['user_id']."','login','<i class=\"fa fa-user\"></i><i class=\"fa fa-arrow-down\"></i>  ".$data['user_name']."','$now') ") or die(mysql_error());
		header("location:../admin14/");
	}
	else{
		header("location:../login.php?log=error");
	}
	
}


?>

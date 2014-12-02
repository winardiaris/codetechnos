<?php
include ("../inc/islogin.php");
include ("../inc/con.php");
include ("../inc/conf.php");
include ("header.php");



if(isset($_GET['p'])){
	$p = $_GET['p'];	
	switch($p){
		case "dashboard" : $view = "dashboard.php";break;
		case "user" : $view = "user.php";break;
		case "user_action" : $view = "user_action.php";break;
		case "package" : $view = "package.php";break;
		case "package_action" : $view = "package_action.php";break;
		
	} 
	include $view;
}
else{
	include ("dashboard.php");
}

include ("footer.php");

?>

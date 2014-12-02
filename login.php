<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="winardiaris">
    <title>Login | codetechnos.com </title>
    <link rel="shortcut icon" href="img/icon.ico" />
    <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
    <link href="css/custom.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"><!-- Custom Fonts -->
    <script src="js/jquery.js"></script><!-- jQuery -->
    <script src="js/bootstrap.min.js"></script><!-- Bootstrap Core JavaScript -->
</head>
<body>
	<?php
ob_start();
session_start();
include("inc/con.php");
include("inc/conf.php");
if(!empty($_GET['log'])){
	$log = $_GET['log'];
	if($log == "out"){
		
		mysql_query("INSERT INTO `system_log` VALUES('','".$_SESSION['user_id']."','login','<i class=\"fa fa-user\"></i><i class=\"fa fa-arrow-up\"></i>  ".$_SESSION['user_name']."','$now') ") or die(mysql_error());
		session_destroy();
		header("location:login.php");
	}
	elseif($log == "error"){
		echo"<script type='text/javascript'>
		$(document).ready(function(){
			alerts = \"<strong>Warning!</strong> Invalid username or password.\";
			$('#alert').html(alerts);
			$('#alert').addClass(\"alert\");
			$('#alert').addClass(\"alert-danger\");
			$('#alert').show(500);
			$(\"[name='username']\").focus();
		});
		</script>
		";
	}
	elseif($log == "time_out"){
		session_destroy();
		echo"<script type='text/javascript'>
		$(document).ready(function(){
			alerts = \"<strong>Times Out!</strong>.\";
			$('#alert').html(alerts);
			$('#alert').addClass(\"alert\");
			$('#alert').addClass(\"alert-danger\");
			$('#alert').show(500);
			$(\"[name='username']\").focus();
		});
		</script>
		";
	}
}
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#attributeForm').bootstrapValidator();
});
</script>
	
	
	
<div id="login">
<div class="col-lg-3 login">	
	<form action="inc/auth.php" method="POST" name="login" id="attributeForm" role="form" >
		<h1 class="page-header" >Login</h1> 
		<div class="form-group input-group" id="username">
			<input type="text" name="username" placeholder="username" class="form-control " required >
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
		</div>
		<div class="form-group input-group " id="password">
			<input type="password" name="password" placeholder="password" class="form-control" required>
			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
		</div>
		<input type="submit" name="login" value="Login" class="btn btn-primary " id="btn">
		
		<div id="alert"   ></div>
	</form>
</div>
</div>
</body>
</html>

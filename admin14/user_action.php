<?php
include("../inc/con.php");
include("../inc/conf.php");
if(isset($_POST['save'])){
	$user_name = $_POST['user_name'];
	$user_real_name = $_POST['user_real_name'];
	$user_password = md5($_POST['user_password']);
	$user_cat_id = $_POST['user_cat_id'];
	$user_mail = $_POST['user_mail'];
	//$user_image = $_POST['user_image'];
	$user_info = $_POST['user_info'];
	
	if(!empty($_FILES['user_image']['tmp_name'])){
		$folder="images/";
		$file_type=$_FILES['user_image']['type'];
		if($file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/gif"  || $file_type=="image/png"){
			$user_image = $folder.basename($_FILES['user_image']['name']);
				if(!move_uploaded_file($_FILES['user_image']['tmp_name'],$user_image)){
					echo "<script type='text/javascript'> alert('image failed to upload ... ');history.back();</script>";
				}
		}
		else{
			echo "<script type='text/javascript'> alert('Wrong extention !! (.jpg .gif .png) ');history.back();</script>";
		}
	}
	else{
		$user_image="images/user-default.png";
	}
	
	
	$qry = mysql_query("INSERT INTO `user` 
				VALUES('','$user_name','$user_real_name','$user_password',
				'$user_cat_id','$user_image','$user_mail','$user_info','','$now')") or die(mysql_error());
	if($qry){
		echo '<script type="text/javascript">alert("Data saved !!");window.location="user_form.php";</script>';
	}
}
elseif(isset($_POST['update'])){
	$user_id = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$user_real_name = $_POST['user_real_name'];
	$user_password = md5($_POST['user_password']);
	$user_cat_id = $_POST['user_cat_id'];
	$user_mail = $_POST['user_mail'];
	$user_image = $_POST['user_image'];
	$user_info = $_POST['user_info'];
	
	if(!empty($_FILES["user_image"]["tmp_name"])){
			$folder="images/";
			$file_type=$_FILES['user_image']['type'];
				if($file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/gif"  || $file_type=="image/png" || $file_type=="image/PNG"){
					$user_image = $folder . basename($_FILES['user_image']['name']);
						if(!move_uploaded_file($_FILES['user_image']['tmp_name'],$user_image)){
							die("image failed to upload ...");
						}
						
						//delete
						$res = mysql_query("SELECT `user_image` FROM `user` WHERE `user_id`='$user_id' LIMIT 1");
						$d=mysql_fetch_object($res);
						if($d->user_image!="images/user-default.png"){
							if (strlen($d->user_image)>3){
								if (file_exists($d->user_image)) unlink($d->user_image);
							}
						}                   
						//update user_image 
						$a = "UPDATE `user` SET `user_image`='$user_image' WHERE `user_image`='$user_image' LIMIT 1";
					
						mysql_query($b);
					}
					else{
						echo "<script type='text/javascript'> alert('Wrong extention !! (.jpg .gif .png) ');history.back();</script>";
					
					}
		}
	
	
	$qry=mysql_query("UPDATE `user` SET
					`user_name` = '$user_name',
					`user_real_name` = '$user_real_name',
					`user_password` = '$user_password',
					`user_cat_id` = '$user_cat_id',
					`user_mail` = '$user_mail',
					`user_info` = '$user_info',
					`user_last_change` = '$now'
					WHERE `user_id`='$user_id'
					
					") or die(mysql_error());
	if($qry){
		echo '<script type="text/javascript">alert("Data updated !!");window.location="user_form.php";</script>';
	}
}
elseif(isset($_POST['delete'])){
	$cnt = count($_POST['item']);
	if($cnt >0){
		for($i=0;$i<$cnt;$i++){
			$user_id = $_POST['item'][$i];
			$qry1=mysql_query("SELECT `user_image` FROM `user` WHERE `user_id`='$user_id' LIMIT 1") or die(mysql_error());
			$data1 = mysql_fetch_array($qry1);
			$user_image = $data['user_image'];
			if($user_image!="images/user-default.png"){if (strlen($user_image)>3){if (file_exists($user_image)) unlink($user_image);}}
			
			mysql_query("DELETE FROM `user` WHERE `user_id`='$user_id' ") or die(mysql_error());			
		}
		echo "<script type='text/javascript'> alert('Data has been deleted');history.back();</script>";
	}
}
?>

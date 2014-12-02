<?php 
include("../inc/con.php");
include("conf_form.php");

if(isset($_GET['a'])){
	$a = $_GET['a'];
	if($a == 'add'){
		$header = "User Add";
		$button = '<button type="submit" name="save" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>';
	}
	elseif($a == 'edit'){
		$header = "User Edit";
		$button = '<button type="submit" name="update" class="btn btn-primary"><i class="fa fa-refresh"></i> Update </button>';
		
		$user_id = $_GET['user_id'];
		$qry = mysql_query("SELECT * FROM `user` WHERE `user_id`='$user_id' LIMIT 1") or die(mysql_error());
		$data = mysql_fetch_array($qry);
		
		$user_image = '<img src="'.$data['user_image'].'" class="img-circle">';
	}
	else{
		header("location:?a=add");
	}
	
}
else{header("location:?a=add");}
echo $head;
?>
	<div class="col-lg-12">
		<h2 class="page-header"><?php echo $user_image.$header;?>  </h2> 
	</div>
	<form method="POST" action="user_action.php" name="user-add" role="form">
	<div class="col-lg-4">
		<input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>" >
		<label>Username</label><input class="form-control" name="user_name" value="<?php echo $data['user_name']; ?>" required>
		<label>User real name</label><input class="form-control" name="user_real_name" value="<?php echo $data['user_real_name']; ?>" required>
		<label>Password</label><input class="form-control" name="user_password" type="password" required>
		<label>Re-type Password</label><input class="form-control" name="user_repassword" type="password" required>
		<label>User Category</label>
			<select class="form-control " name="user_cat_id" required>
				<option value="0">- Choose One -</option >
			<?php
				$user_cat_id = $data['user_cat_id'];
			
				$qry=mysql_query("SELECT * FROM `user_category`") or die(mysql_error());
				while($data2=mysql_fetch_array($qry)){
					echo '<option value="'.$data2['user_cat_id'].'" ';
					if($user_cat_id == $data2['user_cat_id']){echo "selected";}
					echo '>'.$data2['name_user_cat'].'</option>';
				}
			?>
			</select>
		<label>E-mail</label><input class="form-control" name="user_mail" type="email" value="<?php echo $data['user_mail']; ?>" required>
	</div>
	<div class="col-lg-4">
		<label>Avatar</label><input class="form-control" name="user_image" type="file">
		<div class="form-group"><label>User Info</label><textarea class="form-control" name="user_info" rows="3"><?php echo $data['user_info'];?></textarea>
		</div>
		<div class="form-group input-group">
		<?php echo $button ?>
		</div>
	</div>
	</form>
</body>
</html>

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
    <div class="col-lg-12">
		
		<h1 class="page-header">User</h1> 
		
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i>  <a href="?p=dashboard">Dashboard</a></li>
			<li class="active"><i class="fa fa-user"></i> User</li>
		</ol>
		<form name="user" action="?p=user_action" method="POST" role="form">
		<div class="navbar">
			<div class="btn-group">
			<a href="user_form.php?a=add" target="framepopup"  onClick="setdisplay(divpopup,1)" class="btn btn-primary"><i class="fa fa-plus" ></i> Add new</a>
			<button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead><tr>
					<th width="10px">No.</th>
					<th width="10px"></th>
					<th width="10px">edit</th>
					<th>Username</th>
					<th>Real Name</th>
					<th>Category</th>
					<th>E-mail</th>
					<th>Info</th>
					<th>Last Login</th>
					<th>Last Change</th>
				</tr></thead>
				<tbody>
			<?php
			$no = 0;
			$qry = mysql_query("
						SELECT `user`.`user_id`, `user`.`user_name`, `user`.`user_real_name`, `user`.`user_cat_id`, `user`.`user_mail`,
						`user`.`user_info`, `user`.`user_last_login`, `user`.`user_last_change`, `user_category`.`name_user_cat`
						FROM `user` INNER JOIN `user_category` ON `user_category`.`user_cat_id` = `user`.`user_cat_id`
						ORDER BY `user`.`user_cat_id` ASC;
					") or die(mysql_error());
			while($data=mysql_fetch_array($qry)){
				$no++;
				echo'
				<tr>
					<td align="right">'.$no.'.</td>
					<td><input type="checkbox" name="item[]" id="item'.$no.'" value="'.$data['user_id'].'"></td>
					<td align="center"><a href="user_form.php?a=edit&user_id='.$data['user_id'].'" target="framepopup"  onClick="setdisplay(divpopup,1)" ><i class="fa fa-edit"></i></a></td>
					<td>'.$data['user_name'].'</td>
					<td>'.$data['user_real_name'].'</td>
					<td>'.$data['user_cat_id'].' | '.$data['name_user_cat'].'</td>
					<td>'.$data['user_mail'].'</td>
					<td>'.$data['user_info'].'</td>
					<td>'.$data['user_last_login'].'</td>
					<td>'.$data['user_last_change'].'</td>
				</tr>
				';
			}
			?>
				</tbody>
			</table>
		</div>
		</form>
    </div>
    </div>
    
</div>
<?php
echo $iframe;
?>

<?php
include("conf_form.php");
if(isset($_GET['a'])){
	$a = $_GET['a'];
	if($a == "add"){
		$header = "Add New Package Category";
		$button = '<button type="submit" name="save_category" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>';
	}
	elseif($a == "edit"){
		$header = "Edit Package Category";
		$button = '<button type="submit" name="update_category" class="btn btn-primary"><i class="fa fa-refresh"></i> Update </button>';
		
	}
echo $head;
?>
	
	<div class="col-lg-12">
		<h2 class="page-header"><?php echo $header;?>  </h2> 
	</div>
	<form method="POST" action="package_action.php" name="user-add" role="form">
	<div class="col-lg-4">
		<label>Category ID</label><input class="form-control" name="package_category_id" value="" required>
		<label>Category Name</label><input class="form-control" name="package_category_name" value="" required>
		<label>Category Info</label><textarea class="form-control" name="package_category_info" rows="5" required></textarea>
		<?php echo $button ?>
		
	</div>
	
	</form>
<?php
echo $foot;
}
else{
	$header = "Package Category";
	echo $head;
?>
	<div class="col-lg-12">
		<h2 class="page-header"><?php echo $header;?>  </h2> 
	</div>
	<div class="col-lg-12">
	<form name="package_category" action="package_action.php" method="POST" role="form">
		<div class="navbar">
			<div class="btn-group">
			<a href="?a=add" class="btn btn-sm btn-primary"><i class="fa fa-plus" ></i> Add new category</a>
			<button type="submit" name="delete_category" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead><tr>
					<th width="10px">No.</th>
					<th width="10px"></th>
					<th width="10px">edit</th>
					<th>Category ID</th>
					<th>Category</th>
					<th>Info</th>
					<th>Last Change</th>
				</tr></thead>
				<tbody>
					
					
				</tbody>
			</table>
		</div>
	</form>
	</div>

<?php
	echo $foot;
	
}

?>

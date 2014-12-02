<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
    <div class="col-lg-12">
		
		<h1 class="page-header">Packages</h1> 
		
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i>  <a href="?p=dashboard">Dashboard</a></li>
			<li class="active"><i class="fa fa-dropbox"></i> Packages</li>
		</ol>
		<form name="user" action="?p=package_action" method="POST" role="form">
		<div class="navbar">
			<div class="btn-group">
			<a href="package_form.php?a=add" target="framepopup"  onClick="setdisplay(divpopup,1)" class="btn btn-primary"><i class="fa fa-plus" ></i> Add new</a>
			<button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
			<!-- <a href="package_category.php" target="framepopup"  onClick="setdisplay(divpopup,1)" class="btn btn-success "><i class="fa fa-dropbox" ></i> Category</a> -->
			<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="package_category.php" target="framepopup"  onClick="setdisplay(divpopup,1)">Data</a></li>
			<li><a href="package_category.php?a=add" target="framepopup"  onClick="setdisplay(divpopup,1)">Add new Category</a></li>
			</ul>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead><tr>
					<th width="10px">No.</th>
					<th width="10px"></th>
					<th width="10px">edit</th>
					<th>Package ID</th>
					<th>Name Packages</th>
					<th>Category</th>
					<th>Price</th>
					<th>Info</th>
					<th>Last Change</th>
				</tr></thead>
				<tbody>
			
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

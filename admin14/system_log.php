<?php
	include("../inc/con.php");
	$header = "System Log";
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $header;?></title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
    
    
</head>

<body>
	<div class="col-lg-10">
		<h2 class="page-header"><i class="fa fa-clock-o fa-fw"></i><?php echo $header;?> </h2> 
	</div>
	<div class="col-lg-6">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
			<thead><tr>
				<th style="width:10px;">No.</th>
				<th>Locations</th>
				<th>Value</th>
				<th>Time</th>
				
			</tr></thead>
			<tbody>
				<?php 
				$no = 0;
				$qry = mysql_query("SELECT * FROM `system_log` ORDER BY `log_time` DESC ") or die(mysql_error());
				while($data = mysql_fetch_array($qry)){
					$no ++;
					echo '
					<tr>
					<td class="text-right">'.$no.'</td>
					<td>'.$data['log_location'].'</td>
					<td>'.$data['log_value'].'</td>
					<td><span class="badge">'.$data['log_time'].'</span></td>
					</tr>';
				}
				
				?>
			</tbody>
			</table>
		</div>
	</div>
	
	
</body>
</html>

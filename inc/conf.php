<?php
$now = date("Y-m-d H:i:s");
$iframe = '	<div id="divpopup" name="divpopup" class="dpop" style="display:none">
				<iframe id="framepopup" name="framepopup" class="fpop" src="loading.html"></iframe><br/>
				<a href=# onClick="window.framepopup.location=\'loading.html\';setdisplay(divpopup,0); return false"><button type="button" class="btn btn-danger"><i class="fa fa-power-off"></i> Close</button></a>
			</div>';
?>

<?php
ob_start();
$dbserver="localhost";
$dbusername="simabes";
$dbpassword="simabes";
$dbname="codetechnos";
mysql_connect($dbserver,$dbusername,$dbpassword)  or die(mysql_error());
mysql_select_db($dbname) or die  (mysql_error());
date_default_timezone_set("Asia/Jakarta");
?>

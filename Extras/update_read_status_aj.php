
<?php
include_once('db.php');
$result6= mysql_query("UPDATE replies SET read_status='1' WHERE read_status='0'", $connection) or die(mysql_error());
		  
?>
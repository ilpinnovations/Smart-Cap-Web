<?php
include_once('db.php'); 
$sql = "SELECT * FROM instructions WHERE id='1' AND read_status='0'";
$result = mysql_query($sql,$connection) or die("Error in Selecting " . mysql_error($connection));
$row = mysql_fetch_assoc($result);
$data=$row['instruct'];
$string = str_replace(' ', '', $data);
$result6= mysql_query("UPDATE instructions SET read_status='1' WHERE id='1'", $connection) or die(mysql_error());
echo $string;
?>
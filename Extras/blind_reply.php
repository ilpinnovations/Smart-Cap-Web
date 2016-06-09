<?php 
include_once('db.php'); 
$reply = "Should i take a right and left?";//$_GET['reply'];

if(isset($reply))
{
$sql2="INSERT INTO replies(reply) VALUES('$reply')";
$result2 = mysql_query($sql2,$connection) or die("Error in Selecting " . mysql_error($connection));
if($result2)
{
echo "Insert Successfull";
}
else
{
echo "Error in inserting data";	
}

}
 mysql_close($connection);
?>
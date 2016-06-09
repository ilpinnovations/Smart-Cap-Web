
<?php
include_once('db.php');
$result5 = mysql_query("SELECT * FROM replies WHERE read_status='0' ORDER BY date DESC" , $connection)  or die(mysql_error());
echo "<div id='main'>";
while($row5 = mysql_fetch_array($result5))
{
		$reply= $row5['reply'];
	$timeStamp= $row5['date'];
$timeStamp = date( "D,jMY", strtotime($timeStamp));
echo "<div class='alert alert-success'><b>".$reply."</b> ".$timeStamp."</div>
	</div>";

}
echo "</div>";									  
?>
 <?php
 include_once('db.php'); 
 $data= $_REQUEST['data'];
if(isset($data))
{
$sql2="UPDATE instructions SET instruct='$data', read_status='0' WHERE id='1'";
$result2 = mysql_query($sql2,$connection) or die("Error in Selecting " . mysql_error($connection));
if($result2)
{
echo "
<div id='message'>
      <form role='form' method='POST'>
      <h3>Instruct the blind</h3>
      <hr>
      <div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Instruction sent successfully.
</div>
      <p>&nbsp;</p>
  <div class='form-group'>
   
   <textarea rows='3' cols='40' id='instruct' placeholder='Type here...'></textarea>
  </div>
  
 <button type='button' onClick='hello()' class='btn btn-primary'>Submit</button>
</form>
</div>";

}
else
{
echo "<div id='message'>
      <form role='form' method='POST'>
      <h3>Instruct the blind</h3>
      <hr>
      <div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Failed!</strong> to send instruction.
</div>
      <p>&nbsp;</p>
  <div class='form-group'>
   
  <textarea rows='3' cols='40' id='instruct' placeholder='Type here...'></textarea>
  </div>
  
 <button type='button' onClick='hello()' class='btn btn-primary'>Submit</button>
</form>
</div>";
}
}
?>
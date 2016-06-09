<?php
 require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Cap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="pace.js"></script>
 <link href="pace.css" rel="stylesheet" />
  <script>
  function hello()
  {	
  var data = document.getElementById("instruct").value;  
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
  document.getElementById("message").innerHTML = xmlhttp.responseText;
	}
  }
xmlhttp.open("GET","insert.php?data="+data,true);
xmlhttp.send();

	  }
	   </script>
        <script>
function update_status()
{
if (window.XMLHttpRequest)
{// co'1de for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		
   document.getElementById("mains").innerHTML = xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","update_read_status_aj.php",true);
xmlhttp.send();
}
  </script>
  <script>
var auto_refresh = setInterval(
function()
{
 $.ajaxSetup({ cache: false });
$('#main').load("get_message_aj.php");
}, 3000);			
</script>
<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
	color:black;
} 
</style>
</head>
<body background="images/background.png">

<div class="container">
  <div class="jumbotron">
    <h2>Smart Cap for the Blind</h2>
  </div>
  <div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-6">
  <iframe width="380" height="380" frameborder="0"
src="http://192.168.140.132:8081/">
</iframe>
  </div>
    
    <div class="col-sm-4" style="background-color: #EEEEEE;" align="center">
    <div id="message">
      <form role="form" method="POST">
      <h3>Instruct the blind</h3>
      <hr>
      
      <p>&nbsp;</p>
  <div class="form-group">
  <textarea rows="3" cols="40" id="instruct" onClick="update_status()" placeholder="Type here..."></textarea>
  </div>
  
 <button type="button" onClick="hello()" class="btn btn-primary">Submit</button>
</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

    </div>
    <!---<div class="col-sm-4" style="width: 380px;
                height: 380px;
                background-color:white;
                overflow-y: auto;
                max-width:380px;
                max-height:380px;" align="center">
    <h3>Replies form the Blind</h3>
      <hr>
<div id="main">
          <?php
//$result5 = mysql_query("SELECT * FROM replies WHERE read_status='0' ORDER BY date DESC" , $connection)  or die(mysql_error());

//while($row5 = mysql_fetch_array($result5))
//{
	//	$reply= $row5['reply'];
	//$timeStamp= $row5['date'];
//$timeStamp = date( "D,jMY", strtotime($timeStamp));
//echo "<div class='alert alert-success'><b>".$reply."</b> ".$timeStamp."</div>";
  
//}							  
?> 
         </div>
    </div>--->
  </div>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
</div>

</body>
</html>

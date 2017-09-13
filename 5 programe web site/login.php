<center>
<head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>ลงชื่อเข้าใช้</title>
 </head>
<br>ลงชื่อเข้าใช้</br>
<?php
session_start();
 if(isset($_SESSION["right"]))
$_SESSION["right"]="";
?>
<form action=maindata.php method=get>
<input name=usr ><br/>
<input name=pass ><br/>
<input type=submit>
</form>
<a href = "main.htm"> Home</a>
</center>
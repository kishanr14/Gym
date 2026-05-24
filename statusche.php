<html>
<head>
</head>
<body>
<?php
	
	$b=$_POST['oname'];
	$c=$_POST['buid'];

	



	echo"<br><p>Owner Name=<span>$b</span></p>";
	echo"<br><p>Business Id=<span>$c</span></p>";
?>
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from gymown where ownname='$b' and bussid='$c'"; 
$record=mysql_query($sql);

if($row=mysql_fetch_array($record))

{
	echo"Vaild user";
	 header('location:ownreg.php');
}
else
{
	echo"Invalid";
}
?>

</body>

</html>

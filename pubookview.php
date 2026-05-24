<html>
<head>
</head>
<body>


  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from booking";
$rs=mysql_query($sql);
?>

<table>

<tr>
<td>BOOKING ID</td>
<td>GYM NAME</td>
<td>GYM TYPE</td>
<td>PACKAGE</td>
<td>AGE LIMIT</td>
<td>CUSTOMER NAME</td>
<td>DATE Of BIRTH</td>
<td>PHONE NUMBER</td>
<td>STATUS</td>
</tr>



<?php
while($record=mysql_fetch_array($rs))
{
echo"<tr>";
echo"<td>".$record[0]."</td>";
echo"<td>".$record[2]."</td>";
echo"<td>".$record[3]."</td>";
echo"<td>".$record[4]."</td>";
echo"<td>".$record[5]."</td>";
echo"<td>".$record[6]."</td>";
echo"<td>".$record[7]."</td>";
echo"<td>".$record[8]."</td>";
echo"<td>".$record[9]."</td>";
echo"</tr>";
}

?>
</body>
</html>
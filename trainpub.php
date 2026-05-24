<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("gym",$conn);
error_reporting(0);
?>

<html>
<body>
<form method="POST">
<?php

$name=$_POST['gname'];
if($name!= "")
{
$query="select * from items where gname='$name'";
$result=mysql_query($conn,$query);

if(mysql_num_rows($result)>0)
{


echo"<h3>Equipments of $name</h3>";
echo" <table border=2>
<tr>
<td>Gym Name</td>
<td>Equipment Name</td>
<td>Category</td>
<td>Image</td>
<td>Weights</td>
<td>Description</td>
</tr>";
?>

<?php

while($row=mysql_fetch_assoc($result))
{

echo"<tr>";
echo"<td>".$row['gname']."</td>";
echo"<td>".$row['items']."</td>";
echo"<td>".$row['category']."</td>";
echo"<td>".$row['photo']."</td>";
echo"<td>".$row['weights']."</td>";
echo"<td>".$row['descrip']."</td>";
echo"</tr>";
}

echo"</table>";
}

else
{
echo"<p>No data found</p>";
}
}
?>
</form>
</body>
</html>
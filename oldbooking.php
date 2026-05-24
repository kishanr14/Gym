<html>
<head>

<style>



.buttons a{
text-decoration:none;
background:white;
color:black;
padding:10px 20px;
border-radius:25px;
margin-left:10px;
font-weight:bold;
transition:0.3s;
position:absolute;
top:20px;
left:1200px;
}

.buttons a:hover{
background:black;
color:white;
}


</style>
</head>


<body background="gym4.png">
<h1><center>All Old Booking Details</h1>

<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
	$a=$_POST['cno'];
  
 $sql="select * from booking where pho='$a'";
$rs=mysql_query($sql);
?>
<br><br><br>
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
<style>
tr,td
{
background-color:#d3d3d3;
text-align:center;
padding:10px;
padding-left:60px;
padding-right:60px;
}

td:hover
{
background-color:grey;
}

table tr:first-child
{
background-color:yellow;
color:green;
}




</style>


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
<style>
table{
width:90%;
margin:120px auto;
border-collapse:collapse;
background-color:rgba(225,225,225,0.9);
}
tr,td
{
border:1px solid black;
text-align:center;
padding:15px;
}

td:hover
{
background-color:grey;
}

table tr:first-child
{
background-color:black;
color:white;
font-weight:bold
}




</style>


<div class="buttons">
<a href="viewpublic.php">BACK</a>
</div>
</body>
</html>
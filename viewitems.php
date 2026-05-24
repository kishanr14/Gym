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

header
{
	background-color:black;
	text-align:center;
	color:white;
	padding:15px;
	padding-top:10px;
	position:fixed;
	top:0;
	width:100%;
}
footer
{ 
   background-color:black;
   color:white;
   text-align:center;
   position:fixed;
   bottom:0px;
   width:100%;
   left:0;
   font-size:20px;
}
</style>
</head>

<body background="gym4.png">
<header>
<p>GYM MANAGEMENT SYSTEM</p>
</header>
<h2 color="white"><center>All Equipment Details</h2>
<br>
<?php
	session_start();
	$ss=$_SESSION["busineid"];

  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from items where buid='$ss'";
$rs=mysql_query($sql);
?>

<table>

<tr>
<td>BUSINESS ID</td>
<td>GYM NAME</td>
<td>EQUIPMENT NAME</td>
<td>CATEGORY</td>
<td>NUMBER OF ITEMS</td>
<td>WEIGHTS</td>
<td>PHOTO</td>
<td>DESCRIPTION</td>
</tr>
<style>
table{
width:90%;
margin:20px auto;
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


<?php
while($record=mysql_fetch_array($rs))
{
echo"<tr>";
echo"<td>".$record[0]."</td>";
echo"<td>".$record[1]."</td>";
echo"<td>".$record[2]."</td>";
echo"<td>".$record[3]."</td>";
echo"<td>".$record[4]."</td>";
echo"<td>".$record[5]."</td>";
echo"<td><img src='".$record[6]."' width='80'></td>";
echo"<td>".$record[7]."</td>";
echo"</tr>";
}

?>

</table>
<div class="buttons">
<a href="sermain.html">BACK</a>
</div>
<footer>
<p>Contact:gymfinder@gmail.com 2026 Gym Finder</p>
</footer>

</body>
</html>

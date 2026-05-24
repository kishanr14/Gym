<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("gym",$conn);
error_reporting(0);
?>

<html>
<head>
<style>
header
{
   background-color:black;
   color:white;
   text-align:center;
   right:0px;
   position:fixed;
   width:100%;
   top:0px;
   
}

header h1{
margin:0;
}

h3{
color:white;
}

p{
color:white;
}
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
		top:30px;
		left:1150px;
	       }

	.buttons a:hover{
		background:black;
		color:white;
		}
select
{
	width:30%;
	padding:12px;
	font-size:16px;
	border:2px solid #cfd8dc;
	border-radius:10px;
	background-color:#f5f9fb;
	color:#333;
	outline:none;
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
<h1>GYM MANAGEMENT SYSTEM</h1>
</header>
<br><br><br>
<form method="POST">
<center><select name="gname">
<option value="">Select Gym</option>
<option value="silver gym">Silver Gym</option>

<option value="fit zone">Fit Zone</option>
<option value="power gym">Power Gym</option>
</select>
<br><Br>
<button type="submit">Search</button>
<br><br><center>
<?php

$name=$_POST['gname'];
if($name!= "")
{
$query="select * from service where gname='$name'";
$result=mysql_query($query);

if(mysql_num_rows($result)>0)
{
echo"<h3>Gyms $name</h3>";

echo" <table border=2>
<tr>
<td>Gym Name</td>
<td>Gym Type</td>
<td>Package</td>
<td>Age Limit</td>
<td>Description</td>
<td>Photo</td>
<td>Opening Time</td>
<td>Closing Time</td>
</tr>";
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
<?php

while($row=mysql_fetch_assoc($result))
{

echo"<tr>";
echo"<td>".$row[gname]."</td>";
echo"<td>".$row[gymtype]."</td>";
echo"<td>".$row[package]."</td>";
echo"<td>".$row[agelim]."</td>";
echo"<td>".$row[descrip]."</td>";
echo"<td><img src='".$row[photo]."' width='80'></td>";
echo"<td>".$row[otime]."</td>";
echo"<td>".$row[ctime]."</td>";
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
<div class="buttons">
<a href="viewpublic.php">BACK</a>
</div>
<footer>
Contact:gymfinder@gmail.com
2026 Gym Finder
</footer>
</form>
</body>
</html>


                                                                                                                                                                                                                          
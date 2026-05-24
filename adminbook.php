<html>
<head>
<style>

.buttons a{
text-decoration:none;
background:#d3d3d3;
color:black;
padding:10px 20px;
border-radius:25px;
margin-left:10px;
font-weight:bold;
transition:0.3s;
position:relative;
top:20px;
left:100px;
position:fixed;
top:50px;
left:1030px;

}

.buttons a:hover{
background:black;
color:white;
}


.button1 a{
text-decoration:none;
background:#d3d3d3;
color:black;
padding:10px 20px;
border-radius:25px;
margin-left:10px;
font-weight:bold;
transition:0.3s;
position:relative;
top:-80px;
left:100px;
position:relative;
top:-630px;
left:590px;

}

.button1 a:hover{
background:black;
color:white;
}

.button a{
text-decoration:none;
background:#d3d3d3;
color:black;
padding:10px 20px;
border-radius:25px;
margin-left:10px;
font-weight:bold;
transition:0.3s;
position:relative;
top:20px;
left:100px;
position:relative;
top:-650px;
left:590px;

}

.button a:hover{
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
<center><br><br><br><br><h2><font color=white>
All Gym Details
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from booking";
$rs=mysql_query($sql);
?>
<br><br>
<table border=2>
<tr>
<td>Booking Id</td>
<td>Gym Id</td>
<td>Gym Name</td>
<td>Gym Type</td>
<td>Package</td>
<td>Age Limit</td>
<td>Customer Name</td>
<td>Date of Birth</td>
<td>Phone Number</td>
<td>Status</td>

</tr>

<style>
table{
width:90%;
margin:-20px auto;
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
echo"<td>".$record[6]."</td>";
echo"<td>".$record[7]."</td>";
echo"<td>".$record[8]."</td>";
echo"<td>".$record[9]."</td>";
echo"</tr>";
}

?>

</table>
<div class="buttons">
<a href="admin2.html">Back<br></a>
</div>
<br>
</div>

<br>
<footer>
<p>Contact:gymfinder@gmail.com 2026 Gym Finder</p>
</footer>

</body>
</html>
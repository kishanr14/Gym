<html>
<head>
<style>
.header{
width:100%;
background:black;
color:white;
padding:15px;
text-align:center;
font-size:22px;
font-weight:bold;
margin-top:-20px;
position:fixed;
margin-left:-20px;
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
.footer{
background:black;
color:white;
text-align:center;
padding:12px;
position:fixed;
bottom:0;
width:110%;
font-size:14px;
margin-left:-150px;
}
</style>
</head>
<body background="gym4.png">

<div class="header">
GYM MANAGEMENT SYSTEM
</div>

<h2><center>GYM TRAINER DETAILS</h2>
<br><br><br>
<?php

 

  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);

  		
  $gymid=$_GET['buid']; 
  
 $sql="select * from trainers where buid='$gymid'";
 $rs=mysql_query($sql);
?>

<table>

<tr>
<td>TRAINER NAME</td>
<td>GYM NAME</td>
<td>GENDER</td>
<td>PHONE NUMBER</td>
<td>EMAIL ID</td>
<td>EXPERTISE</td>
<td>WORKING DAYS</td>
<td>WORKING TIME</td>
<td>PERSONAL TRAINING FEE</td>
<td>MONTHLY GYM TRAINING FEE</td>
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

echo"<td>".$record[1]."</td>";
echo"<td>".$record[2]."</td>";
echo"<td>".$record[4]."</td>";
echo"<td>".$record[6]."</td>";
echo"<td>".$record[7]."</td>";
echo"<td>".$record[8]."</td>";
echo"<td>".$record[11]."</td>";
echo"<td>".$record[12]."</td>";
echo"<td>".$record[13]."</td>";
echo"<td>".$record[14]."</td>";

echo"</tr>";
}

?>

</table>
<div class="buttons">
<a href="gymview.php">BACK</a>
</div>
<div class="footer">

Contact:gymfinder@gmail.com
2026 Gym Finder

</div>
</body>
</html>



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
		top:20px;
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
<body background="gym3.png">

<div class="header">
GYM MANAGEMENT SYSTEM
</div>

<form method="post">
<center><h2><font color=red>
Gyms 
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from gymown where status='Active' ";
$rs=mysql_query($sql);
?>
<br><br>
<table border=2>
<tr>
<td>Gym Name</td>
<td>Location</td>
<td>Owner Name</td>
<td>Contact</td>
<td>View Equipment</td>
<td>Trainers</td>


</tr>

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
while($record=mysql_fetch_array($rs))
{
echo"<tr>";
echo"<td>".$record['gname']."</td>";
echo"<td>".$record['location']."</td>";
echo"<td>".$record['ownname']."</td>";
echo"<td>".$record['cno']."</td>";
echo"<td><a href='equpub.php?buid=".$record['bussid']."'>View Equipments</a></td>";
echo"<td><a href='pubtraivi.php?buid=".$record['bussid']."'>View Trainers</a></td>";


echo"</tr>";
}

?>



</table>
<div class="buttons">
<a href="viewpublic.php">Back<br></a>
</div>
<br>
</div>

<br>
</form>
<div class="footer">

Contact:gymfinder@gmail.com
2026 Gym Finder

</div>
</body>
</html>

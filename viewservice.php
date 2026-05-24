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
left:1050px;

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
<center><h2><font color=red>
<div class="header">
GYM MANAGEMENT SYSTEM
</div>

<br>
<?php
	session_start();
	$ss=$_SESSION["busineid"];

  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from service where buid='$ss'";
$rs=mysql_query($sql);
?>
<br><br>
<table border=2>
<tr>
<td>Business Id</td>
<td>GYM NAME</td>
<td>Gym Type</td>
<td>Package</td>
<td>Age Limit</td>
<td>Description</td>
<td>Photo</td>
<td>Opening Time</td>
<td>Closing Time</td>

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
echo"<td>".$record[0]."</td>";
echo"<td>".$record[1]."</td>";
echo"<td>".$record[2]."</td>";
echo"<td>".$record[3]."</td>";
echo"<td>".$record[4]."</td>";
echo"<td>".$record[5]."</td>";
echo"<td><img src='".$record[6]."' width='80'></td>";
echo"<td>".$record[7]."</td>";
echo"<td>".$record[8]."</td>";
echo"</tr>";
}

?>

</table>
<div class="buttons">
<a href="sermain.html">BACK</a>
</div>

<div class="footer">

Contact:gymfinder@gmail.com
2026 Gym Finder

</div>

</body>
</html>


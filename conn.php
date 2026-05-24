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
position:absolute;
top:10px;
left:900px;

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
top:20px;
left:100px;
position:relative;
top:-700px;
left:450px;

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
top:-735px;
left:400px;

}

.button a:hover{
background:black;
color:white;
}
</style>
</head>





<body>
<center><h2><font color=red>
All User Details<hr color=blue>
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from user";
$rs=mysql_query($sql);
?>

<table border=2>
<tr>
<td>UNAME</td>
<td>PASSWORD</td>
<td>D.O.B</td>
<td>PH.NO</td>
<td>ACTION</td>
<td>ACTION</td>
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
echo"<td>".$record[1]."</td>";
echo"<td>".$record[2]."</td>";
echo"<td>".$record[3]."</td>";
echo"<td><a href=updatesearch.php?passw=$record[1]><img src=up1.png height=50 width=50></a></td>";
echo"<td><a href=deletesearch.php?passw=$record[1]><img src=dl.jfif height=50 width=50></a></td>";

echo"</tr>";
}

?>

</table>
<div class="buttons">
<a href="userlog.html">Back<br></a>
</div>
<br>
</div>

<br>

<div class="button">
<a href="gymregister.php">GymOwner</a>
</div>
</body>
</html>
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
top:20px;
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
<center><br><br><br><br><h2><font color=white>
All New Gym Details
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from gymown where status='New' ";
$rs=mysql_query($sql);
?>
<br><br>
<table border=2>
<tr>
<td>Gym Name</td>
<td>Owner Name</td>
<td>Location</td>
<td>Phone Number</td>
<td>Emailid</td>
<td>Business ID</td>
<td>Id Proof</td>
<td>Status</td>
<td>Action</td>
<td>Action</td>

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
echo"<td><img src='".$record[6]."' width='80'></td>";
echo"<td>".$record[7]."</td>";
echo"<td><a href=ownsearch.php?buid=$record[5]><img src=up1.jpeg height=50 width=50></a></td>";
echo"<td><a href=gymsearch.php?buid=$record[5]><img src=delete.jpeg height=50 width=50></a></td>";
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
<div class="footer">

Contact:gymfinder@gmail.com
2026 Gym Finder

</div>
</body>
</html>
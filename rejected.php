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
</style>
</head>





<body background="gym4.png">
<center><h2><font color=red>
All Rejected Customer Details
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from booking where status='rejected' ";
$rs=mysql_query($sql);
?>
<br><br>
<table border=2>
<tr>
<tr>
<th>Booking ID</th>
<th>Gym Id</th>
<th>Gym Name</th>
<th>Gym Type</th>
<th>Package</th>
<th>Age Limit</th>
<th>Customer Name</th>
<th>Date of Birth</th>
<th>Phone Number</th>
<th>Status</th>

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
echo "<td>".$record[0]."</td>";
echo "<td>".$record[1]."</td>";
echo "<td>".$record[2]."</td>";
echo "<td>".$record[3]."</td>";
echo "<td>".$record[4]."</td>";
echo "<td>".$record[5]."</td>";
echo "<td>".$record[6]."</td>";
echo "<td>".$record[7]."</td>";
echo "<td>".$record[8]."</td>";
echo "<td>".$record[9]."</td>"; 

echo"</tr>";
}

?>

</table>
<div class="buttons">
<a href="sermain.html">Back<br></a>
</div>
<br>
</div>

<br>

</body>
</html>
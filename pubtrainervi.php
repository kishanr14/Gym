<html>
<head>
<style>

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background:gym4.png;
    margin: 0;
    padding: 0;
}
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
/* Header */
h2 {
    text-align: center;
    color: #fff;
    margin-top: 20px;
    letter-spacing: 1px;
}

/* Back Button */
.buttons a {
    text-decoration: none;
    background: #fff;
    color: #333;
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: bold;
    position: fixed;
    top: 20px;
    left: 20px;
    transition: 0.3s;
}

.buttons a:hover {
    background: #333;
    color: #fff;
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
<center><h2><font color=white>

<br>
<?php	



	
	
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from trainers";
$rs=mysql_query($sql);
?>
<br><br>

<table border=2>
<tr>
<td>Trainer Name</td>
<td>Gym Name</td>
<td>Age</td>
<td>Gender</td>
<td>Phone Number</td>
<td>Working Days</td>
<td>Work Timings</td>
<td>Personal Training Fee</td>
<td>Monthly Package</td>
</tr>

<style>
table{
width:90%;
margin:50px auto;
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
echo"<td>".$record[1]."</td>";
echo"<td>".$record[2]."</td>";
echo"<td>".$record[3]."</td>";
echo"<td>".$record[4]."</td>";
echo"<td>".$record[6]."</td>";
echo"<td>".$record[11]."</td>";
echo"<td>".$record[12]."</td>";
echo"<td>".$record[13]."</td>";
echo"<td>".$record[14]."</td>";

echo"</tr>";
}

?>

</table></div>
<div class="buttons">
<a href="viewpublic.php">BACK</a>
</div>
<div class="footer">

Contact:gymfinder@gmail.com
2026 Gym Finder

</div>

</body>
</html>
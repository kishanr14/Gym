<?php

session_start();
mysql_connect("localhost","root","");
mysql_select_db("gym");

/* Get business id */

	$ss=$_SESSION["busineid"];


/* Fetch bookings */
$sql = "select * from booking where gym_id='$ss'";
$rs = mysql_query($sql);

?>

<html>

<head>
<meta charset="UTF-8">

<title>View Bookings</title>

<style>

body{
font-family:Arial;
background:gym4.png;
margin:0;
}

/* Header */
.header{
background:black;
color:white;
padding:15px;
text-align:center;
font-size:22px;
position:fixed;
width:100%
}

/* Back Button */
.back{
position:absolute;
left:15px;
top:15px;
color:white;
text-decoration:none;
font-size:16px;
}

/* Status Buttons */
.status-bar{
text-align:center;
background:white;
padding:15px;
box-shadow:0 2px 5px gray;
}

.status-bar a{
text-decoration:none;
}

.status-btn{
background:#black;
color:black;
border:none;
padding:10px 18px;
margin:5px;
border-radius:5px;
cursor:pointer;
}

.status-btn:hover{
background:white;
}


/* Footer */
.footer{
background:black;
color:white;
text-align:center;
padding:10px;
position:fixed;
bottom:0;
width:100%;
}

</style>

</head>

<body background="gym4.png">

<div class="header">
<a href="sermain.html" class="back">⬅️ Back</a>
View Bookings
</div>

<!-- Status Buttons -->
<div class="status-bar">
<br><br><br><br>
<a href="pending.php">
<button class="status-btn">Pending</button>
</a>

<a href="approved.php">
<button class="status-btn">Approved</button>
</a>

<a href="rejected.php">
<button class="status-btn">Rejected</button>
</a>





</div>

<table>

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
<th>Action</th>
</tr>

<?php

$count = 0;

while($row = mysql_fetch_array($rs))
{
$count++;

echo "<tr>";

echo "<td>".$row['booking_id']."</td>";
echo "<td>".$row['gym_id']."</td>";
echo "<td>".$row['gym_name']."</td>";
echo "<td>".$row['gym_type']."</td>";
echo "<td>".$row['package']."</td>";
echo "<td>".$row['agelim']."</td>";
echo "<td>".$row['custname']."</td>";
echo "<td>".$row['dob']."</td>";
echo "<td>".$row['pho']."</td>";
echo "<td>".$row['status']."</td>"; 
echo"<td><a href='updatecust.php?buid=".$row['booking_id']."'>
<button style=\"background:#2a5298;color:white;border:none;padding:6px 12px;border-radius:5px;cursor:pointer;\">Update</button></a></td>"; 

echo "</tr>";
}

/* No bookings case */
if($count==0)
{
echo "<tr><td colspan='10' style='color:red;'>No Bookings Found</td></tr>";
}

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



</table>

<div class="footer">
Contact:gymfinder@gmail.com
2026 Gym Finder
</div>

</body>

</html
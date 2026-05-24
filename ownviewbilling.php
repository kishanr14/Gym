<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$con = mysql_connect("localhost","root","");
mysql_select_db("gym",$con);

session_start();
$ss=$_SESSION["busineid"];



/* GET BILL DETAILS */
$sql = "select b.booking_id,b.gym_name,b.gym_type,b.package,bill.total,bill.bill_date from billing bill,booking b where b.booking_id=bill.booking_id and b.gym_id='$ss'";

if(isset($_GET['view'])&&$_GET['view']=="date")
{
if(isset($_GET['bill_date']))
{
$d=$_GET['bill_date'];
$sql.="AND bill.bill_date='$d'";
}
}

$rs = mysql_query($sql) or die(mysql_error());

?>

<html>
<head>
<title>View Billing</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#eef5ff;
}

/* HEADER */
.header{
    background:black;
    color:white;
    padding:15px;
    text-align:center;
    font-size:22px;
    position:fixed;
    top:0;
    width:100%;
}

/* BACK BUTTON */
.back{
    position:absolute;
    left:15px;
    top:15px;
    color:white;
    text-decoration:none;
}

/* CONTAINER */
.container{
    width:95%;
    margin:100px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
    position:relative;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#1e3c72;
    color:white;
    padding:12px;
}

table td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #ccc;
}

tr:hover{
    background:#f2f2f2;
}

/* FOOTER */
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

<body>

<div class="header">
<a href="sermain.html" class="back"> Back</a>
View Billing
</div>

<div class="container">

<h2>Billing Details</h2>
<form method="GET" style="display:inline;">
<button type="submit" name="view" value="all" class"btn">
View All
</button>
</form>

<form method="GET" style="display:inline;">
<input type="date" name="bill_date" required>
<button type="submit" name="view" value="date" class="btn viewdate">
View By Date
</button>
</form>



</div>

<table border="1">

<tr>
<th>Booking ID</th>

<th>Gym Name</th>
<th>Gym Type</th>
<th>Package</th>
<th>Total Amount</th>
<th>Bill Date</th>
</tr>

<?php

$count=0;
$total_amount=0;
while($row = mysql_fetch_array($rs))
{
$count++;
$total_amount+=$row['total'];
?>

<tr>


<td><?php echo $row['booking_id']; ?></td>


<td><?php echo $row['gym_name']; ?></td>

<td><?php echo $row['gym_type']; ?></td>

<td><?php echo $row['package']; ?></td>

<td>Rs <?php echo $row['total']; ?></td>

<td><?php echo $row['bill_date']; ?></td>

</tr>
<?php
}

if(mysql_num_rows($rs)==0)
{
?>

<?php
if($count==0)
{
?>
<tr><td colspan='9' style='color:red;'>No Billing Records Found</td></tr>
No Billing Records found
<?php
}
}
?>


</table>

</div>

<div class="footer">
 Gym Management System
</div>

</body>
</html>
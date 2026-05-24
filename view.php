<?php
mysql_connect("localhost","root","");
mysql_select_db("gym");

$phone = "";

/* SEARCH */
if($_POST)
{
    $phone = $_POST['phone'];

    $sql = "SELECT b.booking_id, b.gym_name, b.gym_type, 
    b.package, b.pho,
   bill.total, bill.bill_date
    FROM booking b, billing bill
    WHERE b.booking_id = bill.booking_id
    AND b.pho = '$phone'";

    $rs = mysql_query($sql);
}
?>

<html>
<head>
<meta charset="UTF-8">
<title>Customer Billing</title>

<style>

/* BODY */
body{
    font-family:Arial;
    background:#eef5ff;
    margin:0;
}

/* HEADER */
.header{
    background:black;
    color:white;
    padding:15px;
    text-align:center;
    font-size:22px;
    position:relative;
}

/* BACK BUTTON */
.back-btn{
    position:absolute;
    top:15px;
    left:15px;
    background:#ff4d4d;
    color:white;
    padding:8px 15px;
    border-radius:5px;
    text-decoration:none;
    font-size:14px;
}

.back-btn:hover{
    background:#cc0000;
}

/* SEARCH BOX */
.search-box{
    width:100%;
    text-align:center;
    margin-top:40px;
}

/* INPUT */
.search-box input{
    padding:12px;
    width:250px;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:14px;
}

/* BUTTON */
.search-box button{
    padding:12px 18px;
    margin-left:10px;
    background:black;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.search-box button:hover{
    background:#1e3c72;
}

/* TABLE */
table{
    margin:auto;
    margin-top:30px;
    border-collapse:collapse;
    width:95%;
    background:white;
    box-shadow:0 0 10px gray;
}

th,td{
    padding:10px;
    border:1px solid #ccc;
    text-align:center;
}

th{
    background:#2a5298;
    color:white;
}

/* TOTAL */
.total{
    width:95%;
    margin:auto;
    margin-top:10px;
    text-align:right;
    font-size:18px;
    font-weight:bold;
}

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
<a href="viewpublic.php" class="back-btn">⬅️ Back</a>
Customer Billing Details
</div>

<!-- SEARCH BOX -->
<div class="search-box">
<form method="POST">
<input type="text" name="phone" placeholder="Enter Phone Number" required>
<button type="submit">View Bill</button>
</form>
</div>

<?php

if($_POST)
{

echo "<table>";

echo "<tr>
<th>Booking ID</th>
<th>Gym name</th>
<th>Gym Type</th>
<th>Package</th>
<th>Phone</th>
<th>Total</th>
<th>Bill Date</th>
</tr>";

$count = 0;
$total_amount = 0;

while($row = mysql_fetch_array($rs))
{
$count++;
$total_amount += $row['total'];

echo "<tr>";
echo "<td>".$row['booking_id']."</td>";
echo "<td>".$row['gym_name']."</td>";
echo "<td>".$row['gym_type']."</td>";
echo "<td>".$row['package']."</td>";
echo "<td>".$row['pho']."</td>";
echo "<td>".$row['total']."</td>";
echo "<td>".$row['bill_date']."</td>";
echo "</tr>";
}

if($count==0)
{
echo "<tr><td colspan='9' style='color:red;'>No Billing Records Found</td></tr>";
}

echo "</table>";

echo "<div class='total'>Total Amount: Rs".$total_amount."</div>";

}
?>

<div class="footer">
Contact:gymfinder@gmail.com
2026 Gym Finder

</div>
</body>
</html
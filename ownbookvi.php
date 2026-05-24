<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("gym",$con);


/* GET GYM ID (OWNER GYM) */


$buid = @$_GET['buid']; // gym/service id
if($buid=='')
{
	die("Gym Id Missing");
}



/* UPDATE STATUS */
if(isset($_POST['update']))
{
    $bookid = $_POST['bookid'];
    $status = $_POST['status'];

    $update = "UPDATE public SET status='$status' WHERE bookid='$bookid'";
    mysql_query($update);
}

/* FETCH ALL BOOKINGS FOR THIS GYM */
$sql = "SELECT b.bookid, b.uname, b.dob, b.cno, b.status,
               s.gname, s.gymtype, s.package, s.agelim,
               s.descrip, s.otime, s.ctime
        FROM public b, service s
        WHERE b.bookid = s.buid AND s.buid='$buid'";

$rs = mysql_query($sql);
?>

<html>
<head>
<style>
body {
    font-family: Arial;
}

.container {
    width: 90%;
    margin: auto;
}

.card {
    background: #f5f5f5;
    padding: 15px;
    margin: 15px 0;
    border-radius: 10px;
}

input[readonly] {
    background-color: #ddd;
}

button {
    padding: 8px;
    background: green;
    color: white;
    border: none;
}
</style>
</head>

<body>

<div class="container">
<h2>All Customer Bookings</h2>

<?php while($row = mysql_fetch_array($rs))?>

<div class="card">


<!-- SERVICE DETAILS -->
<h3>Service Details</h3>
<b>Gym Name:</b> <?php echo $row['gname']; ?><br>
<b>Gym Type:</b> <?php echo $row['gymtype']; ?><br>
<b>Package:</b> <?php echo $row['package']; ?><br>
<b>Age Limit:</b> <?php echo $row['agelim']; ?><br>
<b>Description:</b> <?php echo $row['descrip']; ?><br>
<b>Opening Time:</b> <?php echo $row['otime']; ?><br>
<b>Closing Time:</b> <?php echo $row['ctime']; ?><br>

<!-- CUSTOMER DETAILS -->
<h3>Customer Details</h3>

<form method="post">

<label>Booking ID</label><br>
<input type="text" name="bookid" readonly value="<?php echo $row['bookid']; ?>"><br><br>

<label>Customer Name</label><br>
<input type="text" readonly value="<?php echo $row['uname']; ?>"><br><br>

<label>Date of Birth</label><br>
<input type="text" readonly value="<?php echo $row['dob']; ?>"><br><br>

<label>Phone Number</label><br>
<input type="text" readonly value="<?php echo $row['cno']; ?>"><br><br>

<!-- STATUS -->
<label>Status</label><br>
<select name="status">
    <option value="Pending" <?php if($row['status']=="Pending") echo "selected"; ?>>Pending</option>
    <option value="Approved" <?php if($row['status']=="Approved") echo "selected"; ?>>Approved</option>
    <option value="Rejected" <?php if($row['status']=="Rejected") echo "selected"; ?>>Rejected</option>
</select>

<br><br>
<button type="submit" name="update">Update Status</button>

</form>

</div>

<?php  ?>

</div>
</body>
</html>

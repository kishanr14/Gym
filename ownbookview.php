<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("gym",$con);
 
	
	

$booking_id=$_POST['bookid'];
$gym_id=$_POST['busid'];
$gym_name=$_POST['gname'];
$gym_type=$_POST['gymtype'];
$package=$_POST['package'];
$agelim=$_POST['agelim'];


$custname = $_POST['uname'];
$dob = $_POST['dob'];
$pho = $_POST['cno'];

mysql_query("insert into booking values('$booking_id', '$gym_id', '$gym_name' ,'$gym_type', '$package', '$agelim', '$custname', '$dob', '$pho','Pending')");

?>
<html>
<head>
<style>


.login
{
    width:400px;
    height:500px;
    background:white;
    border-radius:15px;
    padding:25px;
    position:fixed;
    right:580px;
    top:90px;
    max-height:600px;
    overflow-y:auto;
	
    
}
</style>
</head>
<div class="login">
<body background="gym6.png"><center>
<h1>Booking Details</h1>
<b>Booking Id:</b><?php echo $booking_id;?><br><br>
<b>Gym Id:</b><?php echo $gym_id;?><br><br>
<b>Gym Name:</b><?php echo $gym_name;?><br><br>
<b>Gym Type:</b><?php echo $gym_type;?><br><br>
<b>Package:<b><?php echo $package;?><br><Br>
<b>Age Limit:<b><?php echo $agelim;?><br><br>
<b>Customer Name:<b><?php echo $custname;?><br><br>
<b>Date of Birth:<b><?php echo $dob;?><br><br>
<b>Phone Number:<b><?php echo $pho;?><br><br>
<b>Status:</b>Pending
<?php

	$sql="select * from custid";
	$rs=mysql_query($sql);
	$record=mysql_fetch_array($rs);
	
	$b=$record[0];
	$bookid=$b+2;
	$sql="update custid SET bookid='$bookid'";
	mysql_query($sql);
?>
</div>
<div class="button">
<a href="publiclog.php">BACK</a>
</div>
</body>
</html>


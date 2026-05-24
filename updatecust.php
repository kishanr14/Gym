<?php

mysql_connect("localhost","root","");
mysql_select_db("gym");

$bid = $_GET['buid'];

?>

<html>
<head>
<meta charset="UTF-8">
<title>Update Status</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
}

/* HEADER */
.header{
    background:#2a5298;
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




.box{
width:350px;
margin:auto;
margin-top:80px;
background:white;
padding:20px;
box-shadow:0 0 10px gray;
text-align:center;
position:relative;
}

select,button{
padding:10px;
width:100%;
margin-top:10px;
}

button{
background:#2a5298;
color:white;
border:none;
cursor:pointer;
}

</style>

</head>

<body>


<div class="header">
<a href="ownpubview.php" class="back">⬅️ Back</a>
UPDATE BOOKED DETAILS
</div>


<div class="box">
<br><br><br>
<h3><center>Update Booking Status</h3>

<form method="post">

<input type="hidden" name="bookid" value="<?php echo $bid; ?>">

<select name="status">

<option>Pending</option>
<option>Approved</option>
<option>Completed</option>
<option>Rejected</option>
<option>Billed</option>

</select>

<button type="submit">Update</button>

</form>

</div>

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{

$status = $_POST['status'];
$bid = $_POST['bookid'];

mysql_query("update booking set status='$status' where booking_id='$bid'");

echo"<h3 style='color:green;text-align:center;'>Status Updated  Successfully..</h3>";
}

?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysql_connect("localhost","root","");
mysql_select_db("gym",$conn);

session_start();
	$ss=$_SESSION["busineid"];

/* LOAD BOOKINGS */
$bookings = mysql_query("SELECT booking_id FROM booking 
WHERE LOWER(status)='approved' 
AND gym_id='$ss'");

/* DEFAULT VALUES */
$booking_id = "";
$gymname = "";
$gymtype = "";
$package = "";
$total = "";
$action = "";

/* HANDLE POST */
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(array_key_exists('booking_id', $_POST))
        $booking_id = $_POST['booking_id'];

    if(array_key_exists('total', $_POST))
        $total = $_POST['total'];

    if(array_key_exists('action', $_POST))
        $action = $_POST['action'];

    /* GET BOOKING DETAILS */
    if($booking_id != "")
    {
        $res1 = mysql_query("SELECT gym_id FROM booking 
        WHERE booking_id='$booking_id'");

        $row1 = mysql_fetch_array($res1);

        $gym_id = $row1['gym_id'];

        /* GET GYM DETAILS */
        $res2 = mysql_query("SELECT gname,gymtype,package 
        FROM service 
        WHERE buid='$gym_id'");

        $row2 = mysql_fetch_array($res2);
	
        $gymname = $row2['gname'];
        $gymtype = $row2['gymtype'];
        $package = $row2['package'];
    }

    /* SAVE BILL */
    if($action == "save")
    {
        mysql_query("INSERT INTO billing
        (booking_id,gymname,gymtype,package,total,bill_date)
        
        VALUES
        ('$booking_id','$gymname','$gymtype','$package','$total',curdate())");

        echo "<script>alert('Bill Generated Successfully');</script>";
    }
}
?>

<html>
<head>
<title>Gym Billing Page</title>

<style>

/* BODY */
body{
    margin:0;
    font-family:Arial;
    background:gym3.png;
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
    width:520px;
    margin:120px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
    position:fixed;
    left:500px;
}

/* INPUTS */
input, select{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

/* BUTTON */
button{
    width:100%;
    padding:10px;
    background:green;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:darkgreen;
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

<body background="gym4.png">

<div class="header">
<a href="sermain.html" class="back"> Back</a>
Gym Billing Page
</div>

<div class="container">

<h2>Billing Page</h2>

<form method="POST">

<!-- BOOKING ID -->
<label>Booking ID</label>

<select name="booking_id" onchange="this.form.submit()">

<option value="">Select Booking</option>

<?php while($b = mysql_fetch_array($bookings)) { ?>

<option value="<?php echo $b['booking_id']; ?>"
<?php if($booking_id == $b['booking_id']) echo "selected"; ?>>

<?php echo $b['booking_id']; ?>

</option>

<?php } ?>

</select>




<!-- GYM NAME -->
<label>Gym Name</label>
<input type="text" value="<?php echo $gymname; ?>" readonly>

<!-- GYM TYPE -->
<label>Gym Type</label>
<input type="text" value="<?php echo $gymtype; ?>" readonly>

<!-- PACKAGE -->
<label>Package</label>
<input type="text" value="<?php echo $package; ?>" readonly>

<!-- TOTAL -->
<label>Total Amount</label>
<input type="text" name="total" 
placeholder="Enter total amount"
value="<?php echo $total; ?>">

<!-- BUTTON -->
<button type="submit" name="action" value="save">
Generate Bill
</button>

</form>

</div>

<div class="footer">
Contact:gymfinder@gmail.com
2026 Gym Finder

</div>

</body>
</html>
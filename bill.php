<?php
mysql_connect("localhost","root","");
mysql_select_db("gym");

/* GET BOOKING ID */
$booking_id = $_GET['bookid'];

/* FETCH DATA */
$query = "SELECT * FROM billing WHERE booking_id='$booking_id'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
if(!$row){
    echo "<h2 style='text-align:center; margin-top:50px;'>No Bill Found</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym Bill</title>

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
left:1050px;

}

.buttons a:hover{
background:black;
color:white;
}



        body {
            font-family: Arial;
           
        }

        .bill-box {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #000;
            background: #fff;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        td {
            padding: 8px;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body background="gym4.png">

<div class="bill-box">

    <h2>GYM BILL</h2>
    <hr>

    <table>
        <tr>
            <td><b>Booking ID:</b></td>
            <td><?php echo $row['booking_id']; ?></td>
        </tr>

        <tr>
            <td><b>Gym Name:</b></td>
            <td><?php echo $row['gymname']; ?></td>
        </tr>

        <tr>
            <td><b>Gym Type:</b></td>
            <td><?php echo $row['gymtype']; ?></td>
        </tr>

        <tr>
            <td><b>Package:</b></td>
            <td><?php echo $row['package']; ?></td>
        </tr>

        <tr>
            <td><b>Total Bill:</b></td>
            <td><?php echo $row['total']; ?></td>
        </tr>

        <tr>
            <td><b>Bill Date:</b></td>
            <td><?php echo $row['bill_date']; ?></td>
        </tr>
    </table>

    <hr>

   

    <div class="footer">
        Thank you for choosing our gym 
    </div>

</div>
<div class="buttons">
<a href="viewpublic.php">Back<br></a>
</div>

</body>
</html>
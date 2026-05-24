<!DOCTYPE html>
<html>
<head>
<title>View Booking</title>
<meta charset="UTF-8">

<style>
body{margin:0;font-family:Arial;background:#f0f8ff;}

.header{
background:#003366;color:white;padding:15px;
font-size:20px;position:relative;text-align:center;
}

.back{
position:absolute;left:10px;top:12px;
color:white;text-decoration:none;
}

.container{
width:350px;margin:auto;margin-top:80px;
background:white;padding:25px;border-radius:10px;
box-shadow:0 0 10px gray;text-align:center;
}

input{
width:90%;padding:10px;margin:10px 0;
border:1px solid #ccc;border-radius:5px;
}

button{
width:95%;padding:10px;background:#003366;
color:white;border:none;border-radius:5px;
cursor:pointer;
}

.footer{
background:#003366;color:white;text-align:center;
padding:10px;position:fixed;bottom:0;width:100%;
}
</style>
</head>

<body>

<div class="header">
<a href="#" class="back">⬅️ Back</a>
View Booking
</div>

<div class="container">
<h3>Search by Booking ID</h3>

<form action="check_booking.php" method="POST">
<input type="text" name="bookid" placeholder="Enter Booking ID" required>
<button type="submit">Search</button>
</form>
</div>

<div class="footer">© Vehicle Service System</div>

</body>
</html>
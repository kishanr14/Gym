<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Service Mainpage</title>

<style>

body{
background:url("gym6.png");
position:fixed;
}

/* Top Header */
.header{
width:100%;
background:black;
color:white;
padding:15px;
text-align:center;
font-size:22px;
font-weight:bold;
margin-top:-10px;
position:fixed;
margin-left:-20px;
}

/* Navigation Bar */
.navbar{
width:1540px;
margin:auto;
background:#333;
overflow:hidden;
margin-top:40px;
margin-left:-10px;
}

/* Buttons */
.navbar a{
float:left;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;
font-size:16px;
}

/* Hover */
.navbar a:hover{
background:#575757;
}

/* Dropdown */
.dropdown{
float:left;
overflow:hidden;
}

.dropdown .dropbtn{
font-size:16px;
border:none;
outline:none;
color:white;
padding:14px 16px;
background:#333;
cursor:pointer;
}

/* Dropdown Content */
.dropdown-content{
display:none;
position:absolute;
background:#f9f9f9;
min-width:160px;
box-shadow:0 8px 16px rgba(0,0,0,0.2);
}

.dropdown-content a{
float:none;
color:black;
padding:12px 16px;
text-decoration:none;
display:block;
text-align:left;
}

.dropdown-content a:hover{
background:#ddd;
}

/* Show dropdown */
.dropdown:hover .dropdown-content{
display:block;
}

/* Footer */
.footer{
background:black;
color:white;
text-align:center;
padding:12px;
position:fixed;
bottom:0;
width:110%;
font-size:14px;
margin-left:-30px;
}

</style>

</head>

<body>

<!-- Main Header -->
<div class="header">
GYM MANAGEMENT SYSTEM
</div>

<!-- Navigation Bar -->
<div class="navbar">

<a href="mainpage1.html">
Home
</a>

<a href="ownlogin.html">Back</a>

<!-- SERVICES DROPDOWN -->
<div class="dropdown">
<button class="dropbtn">
Services ▼
</button>

<div class="dropdown-content">

<a href="addservice.html">
Add Service
</a>

<a href="viewservice.php">
View Service
</a>

<a href="serupdate.html">
Update Service
</a>

<a href="servicedel.html">
Delete Service
</a>

</div>
</div>

<!-- ITEMS DROPDOWN -->
<div class="dropdown">
<button class="dropbtn">
Items ▼
</button>

<div class="dropdown-content">

<a href="additems.html">
Add Item
</a>

<a href="viewitems.php">
View Item
</a>

<a href="itemupdate.html">
Update Item
</a>

<a href="itemdek.html">
Delete Item
</a>

</div>
</div>

<!-- TRAINERS DROPDOWN -->
<div class="dropdown">
<button class="dropbtn">
Trainers ▼
</button>

<div class="dropdown-content">

<a href="addtrainers.html">
Add Trainer
</a>

<a href="viewtrainers.php">
View Trainer
</a>

<a href="trainerupdate.html">
Update Trainer
</a>

<a href="trainerdel.html">
Delete Trainer
</a>

</div>
</div>


<!-- BOOKING DROPDOWN -->
<div class="dropdown">
<button class="dropbtn">
View Bookings ▼
</button>

<div class="dropdown-content">

<a href="ownpubview.php">
View Bookings ▼
</a>

</div>
</div>

<!-- BOOKING DROPDOWN -->
<div class="dropdown">
<button class="dropbtn">
Billing ▼
</button>

<div class="dropdown-content">

<a href="#">
View Bookings
</a>

</div>
</div>



</div>

<!-- Footer -->
<div class="footer">

Contact:gymfinder@gmail.com
2026 Gym Finder
</div>

</body>
</html>
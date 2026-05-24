<html>
<head>
<style>
.header{
    background:black;
    color:white;
    padding:15px;
    text-align:center;
    font-size:22px;
    position:relative;
}



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
<a href="viewpublic.php" class="back-btn"> Back</a>
Customer Billing Details
</div>
<form method="Get" action="bill.php">
<div class="search-box">
Enter Booking Id:
<input type="text" name="bookid" placeholder="Enter Booking Id"><br><br>
<input type="submit" value="View Bill">
</div>
</form>


<div class="footer">
Contact:gymfinder@gmail.com
2026 Gym Finder

</div>
</body>
</html>

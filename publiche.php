<html>


<head>
    <title>Server Page</title>

    <style>
.buttons a{
text-decoration:none;
background:white;
color:black;
padding:10px 20px;
border-radius:25px;
margin-left:10px;
font-weight:bold;
transition:0.3s;
position:absolute;
top:20px;
left:1200px;
}

.buttons a:hover{
background:black;
color:white;
}


        body {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            margin-top: 100px;
        }

        .container {
            background-color: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            margin: auto;
            box-shadow: 0 0 15px black;
        }

        h2 {
            margin-bottom: 20px;
            color: #ffd700;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        span {
            font-weight: bold;
            color: #00ffcc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>This is Server Page</h2>

    <?php

	 $con=mysql_connect("localhost","root","");
         mysql_select_db("gym",$con);

	 $sql="SELECT bookid FROM custid";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_array($rs);
	 $bookid=$row['bookid'];
	
	$bookid="CUS".$bookid;



	$b = $_POST['bookid'];
        $a = $_POST['uname'];
        $c = $_POST['dob'];
        $d = $_POST['cno'];
	
       
	echo "<p>Booking Id:<span>$b</span></p>";
        echo "<p>Name: <span>$a</span></p>";
        echo "<p>Date of Birth: <span>$c</span></p>";
        echo "<p>Phone Number: <span>$d</span></p>";
	
       
	


	$sql="insert into public(bookid,uname,dob,cno,status)values('$b','$a','$c','$d','Pending')";

	if(mysql_query($sql))
	{

	echo"Data Inserted Successfully";
	}
	else
	{
	echo"Error";
	}



	$sql="select * from custid";
	$rs=mysql_query($sql);
	$record=mysql_fetch_array($rs);
	
	$b=$record[0];
	$bookid=$b+2;
	$sql="update custid SET bookid='$bookid'";
	mysql_query($sql);

	mysql_close($con);

    ?>
</div>
<div class="buttons">
<a href="booking.php">Back</a>
</div>





</body>
</html>

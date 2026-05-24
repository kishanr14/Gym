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



   .button a{
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
left:1300px;
}

.button a:hover{
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



        $a = $_POST['uname'];
        $b = $_POST['passw'];
        $c = $_POST['dob'];
        $d = $_POST['cno'];
       

        echo "<p>Name: <span>$a</span></p>";
        echo "<p>Password: <span>$b</span></p>";
        echo "<p>Date of Birth: <span>$c</span></p>";
        echo "<p>Phone Number: <span>$d</span></p>";
       
	


	$sql="insert into user(uname,pass,dob,pno,otp)values('$a','$b','$c','$d')";

	if(mysql_query($sql))
	{

	echo"Data Inserted Successfully";
	}
	else
	{
	echo"Error";
	}

	mysql_close($con);

    ?>
</div>
<div class="buttons">
<a href="userlog.html">Back</a>
</div>





</body>
</html>

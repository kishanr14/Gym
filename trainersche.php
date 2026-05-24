<html>
<head>
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



        $a = $_POST['tname'];
	$n = $_POST['gname'];
        $b = $_POST['age'];
        $c = $_POST['gender'];
        $d = $_POST['profi'];
	$e = $_POST['phno'];
	$f = $_POST['eid'];
	$g = $_POST['expert'];
	$h = $_POST['experi'];
	$i = $_POST['certif'];
	$j = $_POST['workday'];
	$k = $_POST['worktime'];
	$l = $_POST['personal'];
	$m = $_POST['monthfee'];
  
       	session_start();
	$sesst=$_SESSION["busineid"];
	
       

        echo "<p>Business Id: <span>$sesst</span></p>";
        echo "<p>Trainer Name: <span>$a</span></p>";
	echo "<p>Gym Name: <span>$n</span></p>";
        echo "<p>Trainer Age: <span>$b</span></p>";
        echo "<p>Gender: <span>$c</span></p>";
        echo "<p>Profile Photo: <span>$d</span></p>";
	echo "<p>Phone Number: <span>$e</span></p>";
	echo "<p>Email Id: <span>$f</span></p>";
	echo "<p>Specialization: <span>$g</span></p>";
	echo "<p>Experience: <span>$h</span></p>";
	echo "<p>Certification: <span>$i</span></p>";
	echo "<p>Working Days: <span>$j</span></p>";
	echo "<p>Working Timings: <span>$k</span></p>";
	echo "<p>Personal Training Fee: <span>$l</span></p>";
	echo "<p>Monthly Package: <span>$m</span></p>";


	$sql="insert into trainers(buid,tname,gname,age,gender,profi,phno,eid,expert,experi,certif,workday,worktime,personal,monthfee)values('$sesst','$a','$n','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
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
<a href="addtrainers.html">BACK</a>
</div>
</body>
</html>
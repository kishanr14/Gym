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
<div class=container>
<center> <h2>This is Server Page</h2>
<?php

	 $con=mysql_connect("localhost","root","");
         mysql_select_db("gym",$con);

	 $sql="SELECT id FROM idcount";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_array($rs);
	 $id=$row['id'];
	
	$cnt="GMS".$id;


	$n=$_POST['uname'];
	$o=$_POST['oname'];
	$l=$_POST['address'];
	$c=$_POST['cno'];
	$e=$_POST['emailid'];
	$b=$_POST['buid'];
	$p=$_POST['photo'];
	

	echo"<br><p>Name=<span>$n</span></p>";
	echo"<br><p>Owner Name=<span>$o</span></p>";
	echo"<br><p>Address=<span>$l</span></p>";
	echo"<br><p>Phone Number=<span>$c</span></p>";
	echo"<br><p>Email Id=<span>$e</span></p>";
	echo"<br><p>Business Id=<span>$b</span></p>";
	echo"<br><p>Photo=<span>$p </span> </p>";
	
	





	$sql="insert into gymown(gname,ownname,location,cno,eid,bussid,idprof,status)values('$n','$o','$l','$c','$e','$b','$p','New')";

	if(mysql_query($sql))
	{

	echo"Data Inserted Successfully";
	}
	else
	{
	echo"Error";
	}

	$sql="select * from idcount";
	$rs=mysql_query($sql);
	$record=mysql_fetch_array($rs);
	
	$new_cnt=$record[0];
	$id=$id+2;
	$sql="update idcount SET id='$id'";
	mysql_query($sql);

	mysql_close($con);
?>
</div>
<div class="buttons">
<a href="gymregister.php">Back</a>
</div>

<div class="button">
<a href="mainpage1.html">Homepage</a>
</div>
</div>
</body>
</html>


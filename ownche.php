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
	
	$b=$_POST['oname'];
	$c=$_POST['buid'];

	



	echo"<br><p>Owner Name=<span>$b</span></p>";
	echo"<br><p>Business Id=<span>$c</span></p>";
?>
<br>
<?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("gym",$con);
  
 $sql="select * from gymown where ownname='$b' and bussid='$c'"; 
$record=mysql_query($sql);

if($row=mysql_fetch_array($record))

{
	
	echo"Vaild user<br><br>";
	
	$st=$row[9];
	echo"status=$st <br><br>";

	if($st=="New")
		{
			echo" Wait for Admin Approval";
		}

	else if($st=="Rejected")
		{
		echo"Your Request is Rejected";
		}

	else
		{	
		session_start();
		$_SESSION["busineid"]=$c;
	 header('location:sermain.html');
		}

	
}
else
{
	echo"Invalid";
}
?>
</div>

<div class="buttons">
<a href="ownlogin.html">BACK</a>
</div>

</body>

</html>

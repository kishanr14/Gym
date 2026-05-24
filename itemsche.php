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

 	$a = $_POST['gname'];
        $b = $_POST['items'];
        $c = $_POST['category'];
        $d = $_POST['num'];
	$e = $_POST['weights'];
	$f = $_POST['photo'];
	$g = $_POST['descrip'];
	

		session_start();
	$sesst=$_SESSION["busineid"];
	
       

        echo "<p>Business Id: <span>$sesst</span></p>";
	echo"<p>Gym Name:<span>$a</span></p>";
        echo "<p>Equipment Name: <span>$b</span></p>";
        echo "<p>Category: <span>$c</span></p>";
        echo "<p>Number of Items: <span>$d</span></p>";
	echo "<p>Weights Of Equipments: <span>$e</span></p>";
	echo "<p>Photo: <span>$f</span></p>";
	echo "<p>Description: <span>$g</span></p>";
	


	$sql="insert into items(buid,gname,items,category,num,weights,photo,descrip)values('$sesst','$a','$b','$c','$d','$e','$f','$g')";
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
<a href="additems.html">BACK</a>
</div>




</body>
</html>
<html>
<head>
<title>User Delete</title>

    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            margin-top: 100px;
            box-shadow: 0px 0px 10px gray;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: darkred;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            margin-right: 10px;
            text-decoration: none;
            color: white;
            background-color: #333;
            padding: 8px 15px;
            border-radius: 5px;
        }

        a:hover {
            background-color: black;
        }

        .center-box {
            text-align: center;
        }
    </style>
</head>


<body>
<center><h2>User Details Updation Saving Form</h2>
<form>
<div class="center-box">
<?php
	$a = $_POST['buid'];
	$h = $_POST['gname'];
        $b = $_POST['items'];
        $c = $_POST['category'];
        $d = $_POST['num'];
	$e = $_POST['weights'];
	$f = $_POST['photo'];
	$g = $_POST['descrip'];
	
	

        echo "<p>Business Id: <span>$a</span></p>";
	echo "<p>Gym Name:<span>$h</span></p>";
        echo "<p>Items is: <span>$b</span></p>";
        echo "<p>Category: <span>$c</span></p>";
        echo "<p>Number of equipment: <span>$d</span></p>";
	echo "<p>Weights: <span>$e</span></p>";
	echo "<p>Photo: <span>$f</span></p>";
	echo "<p>Description: <span>$g</span></p>";
       


	$con=mysql_connect("localhost","root","");
	mysql_select_db("gym",$con);
        $sql="delete from items where buid=$a";
	mysql_query($sql);

	echo"<br>User Data Deleted Successfully...";
?>

<br>
</body>
</html>

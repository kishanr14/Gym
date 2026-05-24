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
<center><h2>Trainers Details Updation Saving Form</h2>
<form>
<div class="center-box">
<?php
	$a = $_POST['buid'];
        $b = $_POST['tname'];
	$o = $_POST['gname'];
        $c = $_POST['age'];
        $d = $_POST['gender'];
	$e = $_POST['profi'];
	$f = $_POST['phno'];
	$g = $_POST['eid'];
	$h = $_POST['expert'];
       	$i = $_POST['experi'];
       	$j = $_POST['certif'];
       	$k = $_POST['workday'];
       	$l = $_POST['worktime'];
        $m = $_POST['personal'];	
	$n = $_POST['monthfee'];

        echo "<p>Business Id: <span>$a</span></p>";
        echo "<p>Trainer Name: <span>$b</span></p>";
	echo "<p>Gym Name: <span>$o</span></p>";
        echo "<p>Age: <span>$c</span></p>";
        echo "<p>Gender: <span>$d</span></p>";
	echo "<p>Profile: <span>$e</span></p>";
	echo "<p>Phone Number: <span>$f</span></p>";
	echo "<p>E mail id: <span>$g</span></p>";
	echo "<p>Speacilsation: <span>$h</span></p>";
        echo "<p>Experience: <span>$c</span></p>";
        echo "<p>Certification: <span>$d</span></p>";
	echo "<p>Working Days: <span>$e</span></p>";
	echo "<p>Working time: <span>$f</span></p>";
	echo "<p>Persoanl training fee: <span>$g</span></p>";
	echo "<p>Monthly fee: <span>$h</span></p>";
       


	$con=mysql_connect("localhost","root","");
	mysql_select_db("gym",$con);
	$sql="update trainers set tname='$b', gname='$o',age='$c', gender='$d',profi='$e', phno='$f',eid='$g',  expert='$h', experi='$i', certif='$j', workday='$k', worktime='$l', personal='$m', monthfee='$n'where buid='$a'";
	mysql_query($sql);

	echo"<br>User Data Updated Successfully...";
?>

<br>
</body>
</html>

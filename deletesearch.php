<html>
<head>
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

input[type="text"],
input[type="date"],
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

input[type="reset"] {
    background-color: gray;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    width: 100%;
    cursor: pointer;
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
<center><h2>Searched User Data For Deletion</h2>
<?php

	$r=$_GET['passw'];

	$con=mysql_connect("localhost","root","");
	mysql_select_db("gym",$con);

	$sql="select * from user where pass='$r'";
	$rs=mysql_query($sql);

	if($record=mysql_fetch_array($rs))
	{
?>
User Data Deletion Form<hr=Brown>

<form method="post" action="deletesave.php">

Name is:  <input type="text" name="uname" value="<?php echo $record[0];?>"><br>
Passward is:  <input type="password" name="passw" readonly value="<?php echo $record[1];?>"><br>
Date of Birth is:  <input type="date" name="dob" value="<?php echo $record[2];?>"><br>>
Phone Number is:  <input type="text" name="cno" value="<?php echo $record[3];?>"><br>

<input type="submit" value="Delete">
<input type="reset" value="Clear">
</form>

<?php
	}
	else
	{
	echo"<br><br>Invalid Passward, Record Unavailable";
	}
?>
<div class="center-box">
<a href="conn.php">Back</a>
<a href="mainpage1.html">HomePage</a>
</div>
</body>
</html>


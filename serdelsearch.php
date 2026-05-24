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
     
        session_start();
	$sesst=$_SESSION["busineid"];


	$con=mysql_connect("localhost","root","");
	mysql_select_db("gym",$con);

	$sql="select * from service where buid='$sesst'";
	$rs=mysql_query($sql);

	if($record=mysql_fetch_array($rs))
	{
?>
servicdatadeletion

<form method="post" action="serdelsave.php">
Business Id is:  <input type="text" name="buid" readonly value="<?php echo $record[0];?>"><br>
Gym Name is:<input type="text" name="gname" value="<?php echo $record[1];?>"><br>
Fitness Facility Type is:  <input type="text" name="gymtype" value="<?php echo $record[2];?>"><br>
Package is:  <input type="text" name="package" value="<?php echo $record[3];?>"><br>
Age Limit is:  <input type="text" name="agelim" value="<?php echo $record[4];?>"><br>
Description is:  <input type="text" name="descrip" value="<?php echo $record[5];?>"><br>
Image is:  <input type="file" name="photo" value="<?php echo $record[6];?>"><br>
Opening Time is:  <input type="text" name="otime" value="<?php echo $record[7];?>"><br>
Closing Time is:  <input type="text" name="ctime" value="<?php echo $record[8];?>"><br>

<input type="submit" value="Delete">
<input type="reset" value="Clear">
</form>

<?php
	}
	else
	{
	echo"<br><br>Invalid, Record Unavailable";
	}
?>
</body>
</html>


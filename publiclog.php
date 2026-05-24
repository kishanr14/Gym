<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("gym",$con);

$busid=$_GET['buss_id'];


$sql="select gname,gymtype,package,agelim,descrip,otime,ctime from service where buid='$busid'";

$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);

$gname=$row['gname'];
$gymtype=$row['gymtype'];
$package=$row['package'];
$agelim=$row['agelim'];
$descrip=$row['descrip'];
$otime=$row['otime'];
$ctime=$row['ctime'];

?>


<html>
<head>
<script>
function publiclog()
{
	a=document.public.uname.value
	b=document.public.dob.value
	c=document.public.cno.value
	
	if(a=="")
	{
		alert("Enter Name");
		document.public.uname.focus();
		return false;
	}
	else{
		var exp=/^[a-zA-Z]+$/;
		if(!a.match(exp))
		{
			alert("Name Should be alphabet only");
			document.public.uname.focus();
			return false;
		}
	}

	if(b="")
	{	
		alert("Enter Date Of Birth");
		document.public.dob.focus();
		return false;
	}

	if(c="")
	{
		alert("Enter Contact Number");
		document.public.cno.focus();
		return false;
	}

	else
	{
		var exp=/^[0-9]+$/;
		if(!d.match(exp))
		{
			alert("Contact Number Should be Digits");
			document.public.cno.focus();
			return false;
		}
	        else{

		if(c.length!=10)
		{
			alert("Number should contain 10 digits");
			document.public.cno.focus();
			return false;
		}
}
	}
	return true
}
</script>
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
		position:fixed;
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
		left:1200px;
	       }

	.button a:hover{
		background:black;
		color:white;
		}

.button1 a{
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
		left:1280px;
	       }

	.button1 a:hover{
		background:black;
		color:white;
		}
.button2 a{
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
		left:1400px;
	       }

	.button2 a:hover{
		background:black;
		color:white;
		}









header
{
   background-color:black;
   color:white;
   text-align:center;
   right:0px;
   position:fixed;
   width:100%;
   top:0px;
   
   
   
}



body
{
    font-family: Arial;
    background-image:url("gym6.png");
    background-size:cover;
}

.title
{
    position:absolute;
    left:390px;
    top:10px;
    color:white;
}

.title h1
{
    font-size:50px;
}

.loginbox
{
    width:400px;
    height:500px;
    background:white;
    border-radius:15px;
    padding:25px;
    position:fixed;
    right:580px;
    top:90px;
    max-height:600px;
    overflow-y:auto;
	
    
}

.loginbox h1
{

}

input[type=text], input[type=password],input[type=date]
{
    width:250px;
    height:25px;
    border-radius:2px;
    border:1px solid gray;
    margin-top:8px;
    border-radius:10px;
    background:#D3D3D3;
}



button
{
    width:100%;
    height:40px;
    background:#1e6bd6;
    border:none;
    color:white;
    font-size:16px;
    border-radius:5px;
    margin-top:15px;
}

a
{
    text-decoration:none;
    font-size:13px;
}

footer
{ 
   background-color:black;
   color:white;
   text-align:center;
   position:fixed;
   bottom:0px;
   width:100%;
   left:0;
   font-size:20px;
}


</style>
</head>
<body>
<form method="post" action="ownbookview.php" name="public">
<header>

<h1>GYM    MANAGEMENT    SYSTEM</h1>
</header>




<input type="hidden" name="busid" value="<?php echo $busid;?>">
<input type="hidden" name="gname" value="<?php echo $gname;?>">
<input type="hidden" name="gymtype" value="<?php echo $gymtype;?>">
<input type="hidden" name="package" value="<?php echo $package;?>">
<input type="hidden" name="agelim" value="<?php echo $agelim;?>">



<div class="loginbox">
<h3>Service Details</h3>
<b>Gym Name:</b><?php echo $gname;?><br>
<b>Gym Type:</b><?php echo $gymtype;?><br>
<b>Package:</b><?php echo $package;?><br>
<b>Age Limit:</b><?php echo $agelim;?><br>
<b>Description:</b><?php echo $descrip;?><br>
<b>Opening Time:</b><?php echo $otime;?><br>
<b>Closing Time:</b><?php echo $ctime;?><br>
<label><center><h3>ENTER DETAILS </h3></center></label>


<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("gym",$con);

$sql="select * from custid";
$rs=mysql_query($sql);
$record=mysql_fetch_array($rs);
$bookid=$record[0];
$new_id="CUS".$bookid;
?>

<label>Booking Id</label><br>
<input type="text" name="bookid" readonly  value="<?php echo $record[0];?>">
<br>
 

<label> Customer name</label><br>
<input type="text" name="uname" placeholder="Enter your Username">
<br>


<label>Date Of Birth</label><br>
<input type="date" name="dob">
<br>

<label>Phone Number</label><br>
<input type="text" name="cno" placeholder="Enter Phone Number">


<button onclick="return publiclog();">Submit</button>
</div>
<div class="buttons">
<a href="booking.php">Back<br></a>
</div>

<footer>
<p>Contact:gymfinder@gmail.com 2026 Gym Finder</p>
</footer>
</form>
</body>
</html>

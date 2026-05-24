<html>
<head>
<script>
function regcheck()
{
	a=document.reg.uname.value
	b=document.reg.oname.value
	c=document.reg.address.value
	d=document.reg.cno.value
	e=document.reg.emailid.value	
	f=document.reg.photo.value

	if(a=="")
	{	
		alert("Please Enter Gym Name");
		document.reg.uname.focus();
		return false;
	}
	
	if(b=="")
	{
		alert("please Enter Owner Name");
		document.reg.oname.focus();
		return false;
	}
	else{
		var exp=/^[a-zA-Z]+$/;
		if(!b.match(exp))
		{
			alert("Name should be alphabet only");
			document.reg.oname.focus();
			return false;	
		}
	}
	
	if(c=="")
	{	
		alert("Please Enter Gym Address");
		document.reg.address.focus();
		return false;
	}
	

	if(d=="")
	{	
		alert("Please Enter Contact Number");
		document.reg.cno.focus();
		return false;
	}
	else
	{
		var exp=/^[0-9]+$/;
		if(!d.match(exp))
		{
			alert("Contact Number Should be Digits");
			document.reg.cno.focus();
			return false;
		}
		else
		{
			if(d.length!=10)
			{
				alert("Number should be minimum 10 digits");
				document.reg.cno.focus();
				return false;
			}
		}
	}


	if(e=="")
	{	
		alert("Please Enter Email Id");
		document.reg.emailid.focus();
		return false;
	}

	if(f=="")
	{	
		alert("Please Upload Photo");
		document.reg.photo.focus();
		return false;
	}		
	return true;
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
		top:50px;
		left:1050px;
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
		position:fixed;
		top:50px;
		left:1150px;
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
		left:1250px;
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
		left:1350px;
	       }

	.button2 a:hover{
		background:black;
		color:white;
		}

header
{
	background-color:black;
	text-align:center;
	color:white;
	padding:15px;
	padding-top:10px;
	position:fixed;
	top:0;
	width:100%;
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


.name
{
	position:fixed;
	left:520px;
	top:30px;
	color:white;
}
.name h1
{
	font-size:35px
}
h2
{
	border:none;
        border-radius:4px;
        width:300px;
        height:40px;
        text-align:center;
        position:fixed;
        left:-10px;
        top:-20px;
        font-family:times new roman;
        font-size:15px;
        color:black;
	font-weight:bold;
}

.login 
{
	border:none;
  	border-radius:10px;
  	width:460px;
  	height:490px;
  	text-align:left;
  	background:rgba(0,0,0,0.75);   /* Added dark transparent shade */
  	backdrop-filter:blur(6px);     /* Glass effect */
  	box-shadow:0 0 20px rgba(255,215,0,0.4); /* Golden glow */
  	color:white;
  	position:fixed;
  	left:510px;
  	top:0px;
	font-weight:bold;
	font-family:bell mt;
	padding:30px;
	font-size:16px;
	margin-top:60px;
        margin-bottom:120px;
}



input[type=text]
{
	border:2px solid grey;
	color:white
	font-family:bell mt;
	height:25px;
	width:350px;
	text-align:center;
	border-radius:10px;
	background:white;
}


textarea
{
	border:2px solid grey;
	color:white
	font-family:bell mt;
	height:80px;
	text-align:center;
	border-radius:10px;
	width:350px;
	background:white;
	 
	
}

input[type=file]
{
	border:2px solid grey;
	font-family:bell mt;
	height:25px;
	text-align:center;
	border-radius:10px;
	width:300px;
	background:white;
}

input[type=time]
{
	border:2px solid grey;
	font-family:bell mt;
	height:25px;
	text-align:center;
	border-radius:10px;
	width:30px;
	

}
	border:3px solid grey;
	font-family:times new roman;
	height:30px;
	text-align:center;
	width:150px;
	height:25px;
	color:black;
	background:white;
	position:relative;
	left:-10px;
	font-weight:bold;
}

input[type=submit]
{

input[type=reset]
{
	border:3px solid grey;
	font-family:times new roman;
	height:25px;
	text-align:center;
	width:150px;
	height:20px;
	color:black;
	background:white;
	position:relative;
	left:20px;
	font-weight:bold;
}

input[type=submit]:hover
{
	background-color:white;
}

input[type=reset]:hover
{
	background-color:white;
}





.login h1
{
	font-size:18px;
}

input::placeholder
{
	color:black;
}






</style>
</head>
<body background="gym4.png">
<header>
GYM MANAGEMENT SYSTEM
</header>
<form method="post" action="regche.php" name="reg">
<div class="login">
<center><h1><font>REGISTRATION FORM</h1>



<input type="text" name="uname" placeholder="Enter Gym Name"><br><br>

<input type="text" name="oname" placeholder="Enter Owner Name"><br><br>

Enter Location:<br>
<textarea rows=6 cols=22 name="address" placeholder="Enter Location"></textarea><br><br>

<input type="text"  name="cno" placeholder="Enter contact no"><br><br>

<input type="text" name="emailid" placeholder="Enter email id"><br><br><br>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("gym",$con);

$sql="select * from idcount";
$rs=mysql_query($sql);
$record=mysql_fetch_array($rs);
$cnt=$record[0];
$new_id=$cnt;
?>
 
Business Id:
<input type="text" name="buid" readonly value="<?php echo $record[0];?>"><br><br><br>

Upload Id Proof:
<input type="file" name="photo"><br><br>


<input type="submit" value="REGIESTER"  onclick="return regcheck();">
<input type="reset" value="CLEAR">


</div>



</form>
<div class="buttons">
<a href="ownlogin.html">BACK</a>
</div>

<div class="button">
<a href="mainpage1.html">HOME</a>
</div>


<footer>
<p>Contact:gymfinder@gmail.com 2026 Gym Finder</p>
</footer>


</body>
</html>






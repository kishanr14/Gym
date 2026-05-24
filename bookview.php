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
		position:relative;
		top:25px;
		left:1220px;
	       }

	.buttons a:hover{
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
		position:fixed;
		top:70px;
		left:1120px;
	       }

	.button1 a:hover{
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

header h1{
margin:0;
}

body
{
    font-family: Arial;
    background-image:url("gym6.png");
    background-size:cover;
    width:100
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
    width:350px;
    height:340px;
    background:rgb(255,255,255);
    border-radius:15px;
    padding:50px;
    position:absolute;
    right:560px;
    top:150px;
}

input[type=text], input[type=password]
{
    width:100%;
    height:35px;
    border-radius:5px;
    border:1px solid gray;
    margin-top:8px;
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

img
{
   border=none;
   border-radius:300px;
   height=60px;
   width=60px;
   position:absolute;
   left:300px;
   top:40px;
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
<img src=gym6.jpeg height=60 width=60>

<div class="title">

<header>
<h1>GYM    MANAGEMENT    SYSTEM</h1>
</header>

</div>


<div class="loginbox">



<label><center><h2>PUBLIC BOOKING VIEW</label></h2></center><br>
<form method="post" action="bookche.php">


<label>CUSTOMER Name</label><br>
<input type="text"  name="uname" placeholder="Enter your Customer Name">

<br><br>

<label>Booking Id</label><br>
<input type="text"  name="bookid" placeholder="Enter Booking Id">

<br><br>

<input type="checkbox"> Remember Me
&nbsp;&nbsp;&nbsp;&nbsp;


<br><br>

<button>Login</button>

<br><br>



</form>
</div>

<div class="button1">
<a href="#">BACK </a>
</div>




<footer>
<p>Contact:gymfinder@gmail.com 2026 Gym Finder</p>
</footer>

</body>
</html>
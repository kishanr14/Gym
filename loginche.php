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
<center> <h2> This is Server Page</h2>
<?php
	$a=$_POST['uname'];
	$b=$_POST['passw'];


	echo"<br><p>Name=<span>$a</span></p>";
	echo"<br><p>Password=<span>$b</span></p>";

        if($a=="gymname" && $b=="abcd1234")
        {
          echo"<br><br> Valid User Account";

          header('location:admin2.html');
        }
         else
        { 
           echo"<br><br> Invalid User Account";
         }

?>
</div>
<div class="buttons">
<a href="ownerlogin.html">Back</a>
</div>
</body>
</html>
	

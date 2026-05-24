<html>
<body>
<?php
$sub1 = 80;
$sub2 = 75;
$sub3 = 65;
$sub4 = 70;
$sub5 = 85;

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percentage = $total / 5;

echo "Total Marks =" .$total . "<br>";
echo "percentage =" .$percentage . "<br>";

if($percentage >= 35)
{
   echo "Result = Pass";
}
else
{
   echo "Result = Fail";
}
?>
</body>
</html>
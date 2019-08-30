<?php
function add($num1,$num2)
{
return($num1+$num2);
}
function sub($num1,$num2)
{
return($num1-$num2);
}
function mult($f,$g)
{
return($f*$g);
}
function div($num1,$num2)
{
return($num1/$num2);
}
?>
<DOCTYPE html>
<html>
<head>
<body>
<?php
echo"Calculator program in php"."<br>";
$a=add(3,5);
$b=sub(9,4);
$c=mult(4,5);
$d=div(4,2);
echo"Addition is".$a."<br>";
echo"Subraction is".$b."<br>";
echo"Multiplication is".$c."<br>";
echo"Division is".$d."<br>";
?>
</body>
</head>
<html>
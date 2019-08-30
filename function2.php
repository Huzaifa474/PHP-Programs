<?php
//functionswith bmultiple argument
function contstr($str1,$str2)
{
echo $str1." ".$str2;
}
function add($num1,$num2)
{
	return($num1+$num2);
}

?>
<DOCTYPE html>
<html>
<head>
<body>
<?php
contstr("Hello","Programmers");
$a='Hello';
$b='world';
echo"<br>";
contstr($a,$b);
$ans=add(3,5);
echo"<br>";
echo"Answer is"." ".$ans;
echo "<br>";
echo  "Answer is".add(22,5);
?>
</body>
</head>
</html>
<DOCTYPE html>
<html>
<head>
<body>
<h1><b>OPERATOR IN PHP</b></h1>
<?php
/*Concatination operator (.)
Arithmetic operator(+,-,*,/)
Assignment operator(=)
Increment/Decrement operator(++,--)
Comparision operaror(==,===,<,>,<=,>=)*/
echo"<h4>OPERATOR IN PHP</h4>";
// Concatination Operator
$str1="Hello";
$str2="Welcome to Programming";
echo "$str1. .$str2<br>";
//Arithmetic Operator
$x=5;
$y="5";
$a=$x+$y;
$b=$x-$y;
$c=$x*$y;
$d=$x/$y;
echo"Addition is $a<br>";
echo"Subraction is $b<br>";
echo"Multiplication is $c<br>";
echo"Division is $d<br>";
//Increment/Decrement OPERATORS
echo" $a<br>";
$a++;
echo" $a<br>";
echo"BEFORE Decrement$c<br>";
$c--;
echo"After Decrement$c<br>";
//Comparision OPERATOR
if($x==$y)
{
	echo"EQUAL<br>";
}
else
	echo"NOTEQUAL<br>";
//"==" checks only value not data type if want ot compare data types as well we will use "==="
if($x===$y)
	echo"EQUAL<br>";
else
	echo"NOT EQUAL<br>";
?>
</body>
</head>
</html>
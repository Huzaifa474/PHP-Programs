<DOCTYPE html>
<html>
<head>
<body>
<h1>LOOPS IN PHP</h1>
<?php
/*basic loops are for,while,do-while
php along with these loops has one more loop called as for-each loop*/
//syntax of for loop
/*
for($i=0 ; $i<10 ; $i++)
{
statement
}
*/
for($i=1;$i<=10;$i++)
{
echo"SQUARE OF ".$i."is".($i*$i)."<br>";
}
echo"<br>";
$b=array(1,2,3,4,5,6,7,8,9,10);
for($c=0;$c<10;$c++)
{
	echo $b[$c]."<br>";
}
//while loop
$d=0;
echo"while loop<br>";
while($d<=10)
{
	echo $d."<br>";
	$d++;
}
echo"do-whie";
$g=0;
do
{
	echo $b[$g]."<br>";
	$e++;
}
while($e<=10);
//For-each loop
//Syntax of for-each loop foreach($varibale as $v)
/*{
	statement
} */
$arex=array();
$arex['num1']=2;
$arex['num2']=3;
$arex[0]=5;
$arex[1]=7;
$arex[]=0;
foreach($arex as $key=>$v)
{
	echo $key."=>".$v."<br>";
}
echo "<br>";
$week=array("MON","TUE","WED","THU","FRI","SAT");
foreach($week as $h)
{
	echo $h."<br>";
}
?>
</body>
</head>
<html>
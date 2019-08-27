<DOCTYPE html>
<html>
<head>
<body>
<h1>ARRAYS IN PHP</h1>
<?php
/* to declear array in php
$variablename=array();
*in php there are only dynamic array
*/
$a=array();
//There are two ways of assigning a value in php
//first method
$a[0]=2;
echo $a[0]."<br>";
// in php array can be start from any index number
// In php index no can be string also
$a[3]=10;
$a['abc']="Pakistan";
echo $a[3]."<br>";
echo $a['abc']."<br>";
//second method 
//declear another array
$b=array('python','php',10);
// now assceesing values
echo"<h3>ARRAY 2</h3><br>";
echo $b[0]."<br>";
echo $b[1]."<br>";
//another method
$c=array(10=>2,'abc'=>'Hello');//key="=>"
echo"<h3>3RD ARRAY</h3><br>";
echo $c[10]."<br>";
echo $c['abc']."<br>";
//another example
// in php you shuld define atleast 2 key number/index no while assigning a the value after that php will assign next key number automatically assown in example below
$d=array();
$d['a']=10;
$d[]='World';
$d[]=1.5;
$d[]='python';
echo"<h3>ARRAY 4</h3>";
echo"<pre>";
print_r($d);
echo"</pre>";
//to see the index number we will use function "print_r"
echo"<pre>";
print_r($d);
echo"</pre>";
//2-D ARRAY
$e=array();
$e[0][0]=12;
$e[0][]=10;
echo"<pre>";
print_r($e);
echo"</pre>";
//subarray
$f=array();
$f[0]=array(10,12);
echo"<pre>";
print_r($f);
echo"</pre>";


?>
</body>
</head>
</html>
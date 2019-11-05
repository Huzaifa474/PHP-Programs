<?
$con=mysqli_connect('localhost','root','','insertdb');
function showdata()
{
	global $con;
	$query="SELECT * FROM `userdata` WHERE 1";
	$run=mysqli_query($con,$query);
	if($run==true)
	{
		$data=mysqli_fetch_assoc($run);
		print_r($data);
	}
	else
		echo"ERROR";
}
?>
<html>
<head>
<body>
<?php
showdata();
?>
</body>
</head>
</html>
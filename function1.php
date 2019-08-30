<?php
function sayhello($user)
{
echo "Hello" .$user;
}
?>
<DOCTYPE html>
<html>
<head>
<body>
<?php
sayhello('HUZAIFA');
$name='Pakistan';
echo"<br>";
sayhello($name);
?>
</body>
</head>
</html>

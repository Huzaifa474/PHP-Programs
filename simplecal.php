<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Simple Claculator</title>
</head>
<body>
  <form>
    <input type="text" name="num1" paceholder="number1">
    <input type="text" name="num2" paceholder="number2">
    <select name="Operation">
      <option>NONE</option>
      <option>Add</option>
      <option>Subract</option>
      <option>Multiply</option>
      <option>Divide</option>
    </select>
    <br>
    <button  type ="submit" name="submit" value="submit">Calculate</button>
  </form>
</body>
</html>
  <?php
  if(isset($_GET['submit']))
  {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $Operator = $_GET['Operation'];
  }
if($Operator=='NONE')
{
  echo "YPU NEED TO SELECT ANY OPERATOR";
}
elseif ($Operator=='Add') {
  $a=$result1+$result2;
  echo "additition is: $a";
}
elseif ($Operator=='Subract') {
  $a=$result1-$result2;
  echo "additition is: $a";
}
elseif ($Operator=='Multiply') {
  $a=$result1*$result2;
  echo "additition is: $a";
}
elseif ($Operator=='Divide') {
  $a=$result1/$result2;
  echo "additition is: $a";
}
   ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Marksheet</title>
<style>
body
{
  background-color: blue;
}

.hei
{
  width:300px;
  height:50px;
  opacity: 0.5;
filter: alpha(opacity=50);
}
.bit:hover
{
  color:white;
}
.bit
{
  width:300px;
  height:50px;
  background-color:red;
  cursor: pointer;
}

</style>
<body>
<form action="generate.php" method="post" class="hei" align="center">
  <h1><b>Marksheet input<b></h1>
  <input type="text" name="name" placeholder="fullname"class="hei">
  <input type="text" name="fname" placeholder="Fathername"class="hei">
  <input type="text" name="Rollno" placeholder="Roll Number"class="hei">
  <input type="text" name="sub1" placeholder="chem"class="hei">
  <input type="text" name="chempr" placeholder="ChemistryPractical"class="hei">
  <input type="text" name="comppr" placeholder="ComputerPractical"class="hei">
  <input type="text" name="sub2" placeholder="Comp/Bio"class="hei">
  <input type="text" name="sub3" placeholder="English" class="hei">
  <input type="text" name="sub4" placeholder="P.st" class="hei">
  <input type="text" name="sub5" placeholder="Sindhi" class="hei">
    <button type="submit" name="submit" height="100px" width="100px" class="bit">Generate</button>
  </form>
</body>

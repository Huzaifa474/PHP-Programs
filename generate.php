<!DOCTYPE html>
<html>
<head>
  <style>
.logo
{
  align:center;
  margin-left: 500px;
}
button
{
  align:center;
  height:50px;
  margin-left: 500px;
  margim-top:500px;
}
  </style>
<script>
function myFunction() {
  window.print();
}
</script>
</head>
<body>
<h1 align="center">Board Of Secondary Education,Karachi</h1>
<div class="logo"><img src="logo.png" value="logo"></div>
<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $fname=$_POST['fname'];
  $Rollno=$_POST['Rollno'];
  $chem=$_POST['sub1'];
  $chempr=$_POST['chempr'];
  $comppr=$_POST['comppr'];
   $comp=$_POST['sub2'];
    $Eng=$_POST['sub3'];
    $pst=$_POST['sub4'];
   $sindhi=$_POST['sub5'];
  $result=$chem+$comp+$Eng+$pst+$sindhi+$chempr+$comppr;
  $per=$result*100;
  $final=$per/425;
}
 ?>
 <table border="1" align="center">
   <tr>
     <td>Student name</td>
     <td><?php echo $name; ?>
   </tr>
   <tr>
     <td>Father name</td>
     <td><?php echo $fname; ?>
   </tr>
   <tr>
     <td>Rollno</td>
     <td><?php echo $Rollno; ?>
   </tr>
 </table>
 <h3 align="center">Statement of Marks</h3>
   <table border="1" align="center">
   <tr>
     <td>Subjeect</td>
     <td>Total Marks</td>
     <td>Marks Obtained</td>
     <td>Status</td>
   </tr>
   <tr>
     <td>Chemistry</td>
     <td>85</td>
     <td><?php echo $comp; ?>
       <td><?php if($chem>=33)
       {
         echo "PASS";
       }
       else {
         echo "FAIL";
       }
       ?></td>
   </tr>
   <tr>
   <td>Chemistry Pr</td>
   <td>15</td>
   <td><?php echo $chempr; ?>
     <td><?php if($chempr>=6)
     {
       echo "PASS";
     }
     else {
       echo "FAIL";
     }
     ?></td>
 </tr>
   <tr>
     <td>Computer</td>
     <td>75</td>
     <td><?php echo $comp; ?>
       <td><?php if($comp>=33)
       {
         echo "PASS";
       }
       else {
         echo "FAIL";
       }
       ?></td>
   </tr>
   <tr>
   <td>Computer Pr</td>
   <td>25</td>
   <td><?php echo $comppr; ?>
     <td><?php if($comppr>=12)
     {
       echo "PASS";
     }
     else {
       echo "FAIL";
     }
     ?></td>
  </tr>
   <tr>
     <td>English</td>
     <td>75</td>
     <td><?php echo $Eng; ?>
       <td><?php if($Eng>=28)
       {
         echo "PASS";
       }
       else {
         echo "FAIL";
       }
       ?></td>
   </tr>
   <tr>
     <td>Pakistan Studies</td>
     <td>75</td>
     <td><?php echo $pst; ?>
       <td><?php if($pst>=33)
       {
         echo "PASS";
       }
       else {
         echo "FAIL";
       }
       ?></td>
   </tr>
   <tr>
     <td>Sindhi</td>
     <td>75</td>
     <td><?php echo $sindhi; ?>
       <td><?php if($sindhi>=33)
       {
         echo "PASS";
       }
       else {
         echo "FAIL";
       }
       ?></td>
   </tr>
 </table>
 <table border="1" align="center">
   <tr>
     <td>Grand Total</td>
     <td>425</td>
   </tr>
   <tr>
     <td>Marks Obtained</td>
     <td><?php echo $result; ?></td>
   </tr>
 </table>
 <table border="1"align="center">
   <tr>
     <td>Persontage</td>
     <td><?php echo $final;?>
   </tr>
<tr>
  <td>Grade</td>
  <td><?php if($final>=90)
  {
  echo "A+";
}
  elseif ($final>=80 && $final<90){
    echo "A1";
  }
  elseif ($final>=70 && $final<80 && $final<90) {
    echo "A";
  }
  elseif ($final>=60 && $final<70 && $final<80 && $final<90) {
    echo "B";
  }
  elseif ($final>=50 && $final<60 && $final<70 && $final<80 && $final<90 ) {
    echo"C";
  }
  elseif ($final>=40 && $final<50 && $final<60 && $final<70 && $final<80 && $final<90) {
    echo"D";
  }
  else {
    echo "FAIL";
  }
  ?></td></tr>
</table>
<br>
<br>
  <button onclick="myFunction()">Print this page</button>
<?php  mysqli_connect('localhost','root','','studentsmarks');
$con=mysqli_connect('localhost','root','','studentsmarks');
$query="INSERT INTO `studentmarks`(`Name`, `fname`, `Rollno`, `persontage`) VALUES ('$name','$fname','$Rollno',' $final')";
$data=mysqli_query($con,$query);
?>
</body>
</html>

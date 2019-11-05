<!DOCTYPE html>
<html>
<head>
<style>
body
{
  background-color: black;
}
table
{
  background-color: white;
  color:black;
  align-content: center;
}
form
{
  margin-left: 500px;
  margin-top: 100px;
  border:solid;
  background-color: red;
  height:400px;
  width:300px;
}
.anim
{
  position: absolute;
  margin-top:140px;
  height:30px;
  width:200px;
  margin-left: 40px;
  opacity: 0.7;
}
.anim:hover
{
  background-color: grey;
}
.anima
{
  position: absolute;
  margin-top:190px;
  height:30px;
  width:200px;
  margin-left: 40px;
  opacity: 0.7;
}
.anima:hover
{
  background-color: grey;
}
p
{
  position: absolute;
  margin-top:110px;
  height:30px;
  width:200px;
  margin-left: 40px;
  align-content: center;
  font-size: 20px;
  animation: ani;
}
.daco
{
  position: absolute;
  margin-top:170px;
  height:30px;
  width:200px;
  margin-left: 40px;
  align-content: center;
  font-size: 20px;
}
.sub
{
  position: absolute;
  margin-top:250px;
  height:30px;
  width:80px;
  margin-left: 5px;
  align-content: center;
  font-size: 20px;
  cursor: pointer;
}
.img
{
  margin-left: 600px;
  margin-top: -30px;
  position: absolute;
  height:70px;
  width:100px;
  cursor: pointer;
}
</style>
<body>
  <img src="login.jpg" class="img">

<form action="" method="post">

<p>Email</p><input type="email" name="mail"  class="anim"required="required"><br>
<p class="daco">Password</p>  <input type="password" name="password" class="anima" required="required"><br>
<center><input type="submit"  class="sub" name="submit" value="submit"></center><br>
</form>
  <?php
  if(isset($_POST['submit']))
  {
  $mail=$_POST['mail'];
   $pass=$_POST['password'];
  mysqli_connect('localhost','root','','studentsmarks');
  $con=mysqli_connect('localhost','root','','studentsmarks');
  $query = "SELECT `email`, `password` FROM `admin` WHERE  email='$mail' OR 	password='$pass'";
 $data= mysqli_query($con,$query);
 if (mysqli_num_rows($data) > 0)
 {
    $query1="SELECT * FROM `studentmarks`";
    $data1=mysqli_query($con,$query1);
    $run=mysqli_fetch_array($data1);
    while($run)
    {
     ?>
     <table border='1'>
       <tr>
         <td>Name</td>
         <td>Father name</td>
         <td>Roll Number</td>
         <td>Persontage</td>
       </tr>
     <tr>
       <td><?php echo $run['Name'];?></td>
       <td><?php echo $run['fname'];?></td>
       <td><?php echo $run['Rollno'];?></td>
       <td><?php echo $run['persontage'];?></td>
       <?php break;
       $fp = fopen('file.csv', 'w');

       foreach ($run as $fields) {
           fputcsv($fp, $fields);
       }

       fclose($fp);
     }
     }
     else {
       ?><tr><td><?php echo"ONLY ADMIN CAN ACCESS THIS ACCCOUNT";?></td></tr><?php
     }
   }
     else {
       echo"ONLY ADMIN CAN ACESS THIS ACCOUNT";
     }

       ?>
     </tr>
     </table>

</body>
</html>

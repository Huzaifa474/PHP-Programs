<!Doctype html>
<html>
<head>
  <style>
  body
  {
    background-color: black;
  }
  form
  {

      margin-left: 500px;
      margin-top: 100px;
      border:solid;
      background-color: red;
      height:200px;
      width:300px;

  }
  .anima
  {
    position: absolute;
    margin-top:70px;
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
    margin-top:50px;
    height:30px;
    width:200px;
    margin-left: 40px;
    align-content: center;
    font-size: 20px;
    animation: ani;
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
  .sub
  {
    position: absolute;
    margin-top:120px;
    height:50px;
    width:80px;
    margin-left: 100px;
    align-content: center;
    font-size: 20px;
    cursor: pointer;
  }
  table
  {
    background-color: white;
    color:black;
    align-content: center;
  }
  </style>
  <body>
    <img src='search.jpg'class="img">
    <form action="" method='POST'>
    <p>Search</p> <input type="Text" name="search" class="anima">
      <input type="submit" name='submit' value='submit' class="sub">
    </form>

</body>
<table border='1'>
  <tr>
    <td>Name</td>
    <td>Father name</td>
    <td>Rollno</td>
    <td>Persontage</td>
<?php
if(isset($_POST['submit']))
{
  echo $search=$_POST['search'];
  mysqli_connect('localhost','root','','studentsmarks');
  $con=  mysqli_connect('localhost','root','','studentsmarks');
  $query="SELECT *  FROM `studentmarks` WHERE Rollno='$search'";
  $run=mysqli_query($con,$query);
  $result=mysqli_fetch_array($run);
  while($result)
  {
    ?>
    <tr>
      <td><?php echo $result['Name'];?></td>
      <td><?php echo $result['fname'];?></td>
      <td><?php echo $result['Rollno'];?></td>
      <td><?php echo $result['persontage']; break;?></td>
    <?php
  }
}
 ?>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            

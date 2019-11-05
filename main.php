<!DOCTYPE html>
<html>
<head>
  <style>
  body
  {
    background-color: black;
  }
  h1
  {
    background-color: blue;
    align:center;
    height:200px;
    font-size:50px;
  }

  .bit
  {
    width:300px;
    height:100px;
    background-color:red;
    cursor: pointer;
    font-size: 50px;
    margin-left: 400px;
    margin-top: 50px;
  }
  .bit:hover
  {
    background-color: blue;
  }

  </style>
  <body>
    <h1>WELCOME</h1>
    <form method="post">
      <input type="submit" class="bit" name="add" value="Add data" height="400px">
      <input type="submit" class="bit" name="search" value="search data">
        <input type="submit" class="bit" name="admin" value="veiw data">
    </form>
    <?php  if(isset($_POST['add']))
    {
      header("location:marksheet.php");
    }
    if(isset($_POST['search']))
    {
      header("location:search.php");
    }
    if(isset($_POST['admin']))
    {
      header("location:admin.php");
    }
    ?>
  </body>
  </html>

<?php
include('Dbcon.php');
if(isset($_POST['btn_submit']))
{
    $name=$_POST['std_name'];
    $email= $_POST['std_Email'];
    $age=$_POST['std_age'];
    $address=$_POST['std_address'];




    $sql = "INSERT INTO student(std_name,std_Email,std_age,std_address)
    value('$name','$email','$age','$address')";
$res = mysqli_query($con,$sql);
if($res)
{
    echo"Data inserted";
    header("Location:read.php");
}else{
    echo"Data Not inserted";
}
}







?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  <h1 class="text-center">Student Form</h1>
  <div class="container">
  <form action="" method="POST">
  <div class="form-group">
    <label for="">Name:</label>
      <input type="text"  class="form-control" name="std_name"  placeholder="Enter Your Name">
    </div>

    <div class="form-group">
    <label for="">Email:</label>
      <input type="email"  class="form-control" name="std_Email"  placeholder="Enter Your Email">
    </div>

    <div class="form-group">
    <label for="">Age:</label>
      <input type="text"  class="form-control" name="std_age"  placeholder="Enter Your Age">
    </div>



    <div class="form-group">
    <label for="">Address:</label>
      <input type="text"  class="form-control" name="std_address"  placeholder="Enter Your Address">
    </div>

    <input type="submit" name="btn_submit" class="btn btn-info">



  </form>
  </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
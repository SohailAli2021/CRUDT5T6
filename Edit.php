<?php
include('Dbcon.php');
$id = $_GET['id'];
$sql_up = "SELECT * FROM student Where std_id = $id";
$result_upd = mysqli_query($con,$sql_up);
if(mysqli_num_rows($result_upd)>0){

    while($rows = mysqli_fetch_array($result_upd))
    {
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
  <h1 class="text-center">Edited Student Form</h1>
  <div class="container">
  <form action="" method="POST">

  <div class="form-group">
      <input type="hidden"  class="form-control" name="edit_id" value="<?php echo $rows[0]?>" >
    </div>


  <div class="form-group">
    <label for="">Name:</label>
      <input type="text"  class="form-control" name="std_name" value="<?php echo $rows[1]?>">
    </div>

    <div class="form-group">
    <label for="">Email:</label>
      <input type="email"  class="form-control" name="std_Email"  value="<?php echo $rows[2]?>">
    </div>

    <div class="form-group">
    <label for="">Age:</label>
      <input type="text"  class="form-control" name="std_age"  value="<?php echo $rows[3]?>">
    </div>



    <div class="form-group">
    <label for="">Address:</label>
      <input type="text"  class="form-control" name="std_address"  value="<?php echo $rows[4]?>">
    </div>

    <input type="submit" name="btn_update" class="btn btn-info">



  </form>

  </div> 
  <?php
   }
}
?>
  
  <?php
  if(isset($_POST['btn_update']))
  {
    $edit_id=$_POST['edit_id'];
    $name = $_POST['std_name'];
    $email = $_POST['std_Email'];
    $age = $_POST['std_age'];
    $address = $_POST['std_address'];

    $sql_query_up = "UPDATE  student SET  std_name ='$name', std_Email = '$email',std_age ='$age', std_address = '$address' WHERE std_id = '$edit_id' ";

    $sql_ress = mysqli_query($con,$sql_query_up);
    if($sql_ress){
        echo "Data Updated";
        header("Location:read.php");
    }
    else{
        echo "Data not  Updated";
        header("Location:read.php");
    }

  }



  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
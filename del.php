<?php
include('Dbcon.php');
$id = $_GET['id'];
$sql_del = "DELETE From student WHERE std_id = $id";

$ress_del = mysqli_query($con,$sql_del);
if($ress_del)
{
    echo "Data is deleted";
    header("Location:read.php");
}else{
    echo "Data is not  deleted";
    header("Location:read.php");
}
?>
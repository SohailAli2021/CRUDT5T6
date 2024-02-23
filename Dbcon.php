<?php
$con = new mysqli('localhost','root','','mwfcrud');
if($con){
    echo "Connection is Sucessfull!";
}
else{
    echo "Connection is not Sucessfull!";
}
?>
<?php
$conn = new mysqli('localhost','root','','user_management');

if(!$conn){
    die(mysqli_error($con));
    echo "Connection Successfull";
}
?>
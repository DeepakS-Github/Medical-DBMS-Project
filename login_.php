<?php
include "connection.php";
global username;
global password;

if(isset($_POST['user'])){
    $username = $_POST['user'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
$sql="select * from medical.pharmacist where ID=$username and Password=$password";
$result= mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0)
{
    echo"No Login Credential";
}

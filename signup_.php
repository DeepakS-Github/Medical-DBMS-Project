<?php
include "connection.php";

if(isset($_POST['ID'])){
    $Id =$_POST['ID']; 
}
if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
}
if(isset($_POST['Sex'])){
    $Sex = $_POST['Sex'];
}
if(isset($_POST['Address'])){
    $Address = $_POST['Address'];
}
if(isset($_POST['Salary'])){
    $Salary = $_POST['Salary'];
}
if(isset($_POST['password'])){
    $Password = $_POST['password'];
}

$sql="INSERT INTO medical.pharmacist VALUES ('$Name' ,$Id, '$Sex', '$Address' ,$Salary, $Password)";
if($con->query($sql)==true)
{
    echo"sucessfully executed";
}
else{
    echo"error$sql <br> $con->error";
}
// $sql1="Delete from medical.pharmacist where ID=$ID";
$con->close();
?>
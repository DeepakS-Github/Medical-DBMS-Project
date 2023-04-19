<?php

include "connection.php";
global $rollno;
global $Name;
global $Phone;
global $email;
global $Password;

if(isset($_POST['Medid'])){
    $Medid =$_POST['Medid']; 
}
if(isset($_POST['Quantity'])){
    $Quantity = $_POST['Quantity'];
}
if(isset($_POST['Expdate'])){
    $Expdate = $_POST['Expdate'];
}
if(isset($_POST['Buydate'])){
    $Buydate = $_POST['Buydate'];
}
if(isset($_POST['Price'])){
    $Price = $_POST['Price'];
}
if(isset($_POST['Medname'])){
    $Medname = $_POST['Medname'];
}
if(isset($_POST['Sid'])){
    $Sid = $_POST['Sid'];
}
$sql="INSERT INTO medical.medicine VALUES ($Medid ,  $Quantity , '$Expdate', '$Buydate' , $Price,'$Medname',$Sid)";
if($con->query($sql)==true)
{
    echo"sucessfully executed";
    header('location:showmedicine.html');
}
else{
    echo"error$sql <br> $con->error";
}

// $sql1="Delete from medical.medicine where Medid=$medid";

$con->close();
?>
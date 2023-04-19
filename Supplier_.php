<?php
include "connection.php";
global $rollno;
global $Name;
global $Phone;
global $email;
global $Password;

if(isset($_POST['Sname'])){
    $Sname =$_POST['Sname']; 
}
if(isset($_POST['Sid'])){
    $Sid = $_POST['Sid'];
}
if(isset($_POST['Location'])){
    $Location = $_POST['Location'];
}
if(isset($_POST['Phone'])){
    $Phone = $_POST['Phone'];
}
if(isset($_POST['Email'])){
    $Email = $_POST['Email'];
}

$sql="INSERT INTO medical.supplier VALUES ('$Sname' ,  $Sid , '$Location', $Phone , '$Email')";
if($con->query($sql)==true)
{
    echo"sucessfully executed";
    header('location:showsupplier.html')  
}
else{
    echo"error$sql <br> $con->error";
}
// $sql1="Delete from medical.supplier where Sid=$Sid";

$con->close();
?>
<?php

include "connection.php";


if(isset($_POST['Billid'])){
    $Billid =$_POST['Billid']; 
}
if(isset($_POST['Cno'])){ 
    $Cno = $_POST['Cno'];
} 
if(isset($_POST['ID'])){
    $ID = $_POST['ID'];
}
if(isset($_POST['Amount'])){
    $Amount = $_POST['Amount'];
}

$sql="INSERT INTO medical.bill VALUES ($Billid ,  $Cno , $ID,$Amount)";
if($con->query($sql)==true)
{
    echo"sucessfully executed";
}
else{
    echo"error$sql <br> $con->error";
}
$sql1="Delete from medical.bill where Billid=$Billid";//use javascript in it

$con->close();
?>
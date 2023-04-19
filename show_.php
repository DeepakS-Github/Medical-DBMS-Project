<?php
global $j;
global $k;
require "connection.php";
$sql="select * from medical.medicine";
$result= mysqli_query($con,$sql);
$arr=[];
$i=0;
while($row=mysqli_fetch_assoc($result))
{
    $arr[$i]=array($row["Medid"],$row["Quantity"],$row["Expdate"],$row["Buydate"],$row["Price"],$row["Medname"],$row["Sid"]);
    $i+=1;
}
for($j=0;$j<count($arr);$j++)
{
    
        echo $arr[$j][0]."<br>";
    
}
if($con->query($sql)==true)
{
    echo"sucessfully executed";
}
else{
    echo"error$sql <br> $con->error";
}
?>
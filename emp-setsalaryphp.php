<?php
    include('config.php');
   

$salary=$_POST["salary"];
$jobtitle=$_POST["jobtitle"];
$sql="UPDATE `employee` SET `salary` = '$salary' WHERE `jobtitle` ='$jobtitle';";
    $test=mysqli_query($con,$sql);
if($test)
{
    header('Location:employee.php');
    
}
else{
    echo'Failed to update salary update';
}





?>
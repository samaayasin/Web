<?php
$db=new mysqli('localhost' ,'root' ,'','courses');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$Name = $_POST['e_name'];
$Salary = $_POST['Sal'];
$Rating = $_POST['R'];
$JobType = $_POST['job'];
$Email = $_POST['E'];
$Password = $_POST['pass'];
$id='';
mysqli_query($db,"insert into `employees` (EmployeeID,Name,Salary,Rating,JobType,Email,Password) values ('$id','$Name','$Salary','$Rating','$JobType','$Email','$Password')");
header('location:../adminpage.php');

?>

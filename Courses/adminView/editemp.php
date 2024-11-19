<?php
session_start();
$db=new mysqli('localhost' ,'root' ,'','courses');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = mysqli_query($db, "select * from `employees`");
$row = mysqli_fetch_array($query);
$Name = $_POST['e_name'];
$Salary = $_POST['Sal'];
$Rating = $_POST['R'];
$id=$_SESSION['idd'];
//$id=$_GET['id'];
$JobType = $_POST['job'];
$Email = $_POST['E'];
$Password = $_POST['pass'];
mysqli_query($db,"update `employees` set Name='$Name', Salary='$Salary',Rating='$Rating',JobType='$JobType',Email='$Email',Password='$Password' WHERE EmployeeID='$id'");
header('Location:../adminpage.php');
?>


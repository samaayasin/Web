<?php
session_start();
$db=new mysqli('localhost' ,'root' ,'','courses');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$Name = $_POST['u_name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$phone = $_POST['Phone'];
$DOB = $_POST['DateOfBirth'];
$UserName = $_POST['UserName'];
$id =$_SESSION['idd'];

mysqli_query($db,"update `users` set Name='$Name', Email='$Email',Password='$Password',PhoneNumber='$phone',DateOfBirth='$DOB',UserName='$UserName' WHERE UserID='$id'");
header('Location:../adminpage.php');
?>

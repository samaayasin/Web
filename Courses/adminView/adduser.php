<?php
$db=new mysqli('localhost' ,'root' ,'','courses');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$Name = $_POST['u_name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Phonenumber = $_POST['Phone'];
$phone = $_POST['Phone'];
$DOB = $_POST['DateOfBirth'];
$UserName = $_POST['UserName'];
$id='';
mysqli_query($db,"insert into `users` (UserID,Name,Email,Password,Phonenumber,DateOfBirth,UserName) values ('$id','$Name','$Email','$Password','$Phonenumber','$DOB','$UserName')");
header('location:../adminpage.php');

?>


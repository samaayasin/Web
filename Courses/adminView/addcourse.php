<?php
$db=new mysqli('localhost' ,'root' ,'','courses');

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$CourseName=$_POST['c_name'];
$InstructorSSN=$_POST['ssn'];
$NumberOfRegistered=$_POST['num'];
$Rating=$_POST['Rating'];
mysqli_query($db,"insert into `courses` (CourseName,InstructorSSN,NumberOfRegistered,Rating) values ('$CourseName','$InstructorSSN','$NumberOfRegistered','$Rating')");
header('location:../adminpage.php');

?>



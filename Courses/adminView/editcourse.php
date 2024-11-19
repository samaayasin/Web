<script>
    alert("hhg");
</script>
<?php
session_start();
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
$id=$_SESSION['idd'];

mysqli_query($db,"update `courses` set  CourseName='$CourseName',InstructorSSN='$InstructorSSN',NumberOfRegistered='$NumberOfRegistered',Rating='$Rating' WHERE InstructorSSN='$id'");
header('Location:../adminpage.php');
?>

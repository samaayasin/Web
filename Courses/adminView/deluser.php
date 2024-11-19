<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'courses');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id =$_SESSION['idd'];
mysqli_query($db,"delete from `users` where UserID='$id'");
header("location:../adminpage.php");
?>

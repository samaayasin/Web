<?php
$db=new mysqli('localhost' ,'root' ,'','courses');
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['upload']))
    {
       
        $size = $_POST['size'];
       
         $insert = mysqli_query($db,"INSERT INTO sizes
         (size_name)   VALUES ('$size')");
 
         if(!$insert)
         {
             echo mysqli_error($db);
             header("Location: ../adminpage.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../adminpage.php?size=success");
         }
     
    }
        
?>
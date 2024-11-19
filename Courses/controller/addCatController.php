<?php
$db=new mysqli('localhost' ,'root' ,'','courses');
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($db,"INSERT INTO category
         (category_name) 
         VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($db);
             header("Location: ../dashboard.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?category=success");
         }
     
    }
        
?>
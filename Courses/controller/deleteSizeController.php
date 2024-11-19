<?php

$db=new mysqli('localhost' ,'root' ,'','courses');
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $id=$_POST['record'];
    $query="DELETE FROM sizes where size_id='$id'";

    $data=mysqli_query($db,$query);

    if($data){
        echo"Size Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
<?php

$db=new mysqli('localhost' ,'root' ,'','courses');
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $p_id=$_POST['record'];
    $query="DELETE FROM product where product_id='$p_id'";

    $data=mysqli_query($db,$query);

    if($data){
        echo"Product Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
<?php
$db=new mysqli('localhost' ,'root' ,'','courses');
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$v_id=$_POST['v_id'];
    $product= $_POST['product'];
    $size= $_POST['size'];
    $qty= $_POST['qty'];
   
    $updateItem = mysqli_query($db,"UPDATE product_size_variation SET 
        product_id=$product, 
        size_id=$size,
        quantity_in_stock=$qty 
        WHERE variation_id=$v_id");


    if($updateItem)
    {
        echo "true";
    }
?>
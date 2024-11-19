<?php
$db=new mysqli('localhost' ,'root' ,'','courses');
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        $price = $_POST['p_price'];
        $category = $_POST['category'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($db,"INSERT INTO product
         (product_name,product_image,price,product_desc,category_id) 
         VALUES ('$ProductName','$image',$price,'$desc','$category')");
 
         if(!$insert)
         {
             echo mysqli_error($db);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>
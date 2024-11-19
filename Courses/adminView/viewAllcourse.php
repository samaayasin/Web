<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="stylenew.css">
    </head>
    <script>

    </script>
</head>
<body >
<div id="ordersBtn" >
  <h2>Course Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Instructor SSN</th>
        <th>Number Of Registered</th>
        <th>Rating</th>
     </tr>
    </thead>
     <?php
     $db=new mysqli('localhost' ,'root' ,'','courses');
     // Check connection
     if (mysqli_connect_errno())
     {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
      $sql="SELECT * from courses";
      $result=$db-> query($sql);

      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["CourseName"]?></td>
          <td><?=$row["InstructorSSN"]?></td>
          <td><?=$row["NumberOfRegistered"]?></td>
          <td><?=$row["Rating"]?></td>
           <td>
            <!--   <a href="#myModal" onclick=" <?php //$id=$row["InstructorSSN"];?> " role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>-->
               <a href="./adminView/m.php?id=<?php echo $row['InstructorSSN']; ?>">.</a>
               <?php
               if(isset($_SESSION['idd'])) {
                   $id =$_SESSION['idd'];
               }
               ?>
               <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>

           </td>
           <td>
               <a href="./adminView/deletecourse.php" role="button" ><i class="fa fa-trash"></i></a>
           </td>
        </tr>
    <?php

        }
      }
    ?>
      <td> <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal2" >
              Add </button></td>

      <td>
  </table>

</div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <?php
            if(isset($id)) {
            $query2=mysqli_query($db,"select * from `courses` where  InstructorSSN ='$id'");
            $row1=mysqli_fetch_array($query2);
            ?>
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Course</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  enctype='multipart/form-data' action="./adminView/editcourse.php" method="POST">
                        <div class="form-group">
                            <label >Course Name:</label>
                            <input type="text" class="form-control" name="c_name"  value="<?php echo $row1['CourseName']; ?>">
                        </div>
                        <div class="form-group">
                            <label>instructor SSN:</label>
                            <input type="text" class="form-control" name="ssn" value="<?php echo $row1['InstructorSSN']; ?>">
                        </div>
                        <div class="form-group">
                            <label>NumberOgRegistered:</label>
                            <input type="text" class="form-control" name="num" value="<?php echo $row1['NumberOfRegistered']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Rating:</label>
                            <input type="text" class="form-control" name="Rating" value="<?php echo $row1['Rating']; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" style="height:40px" class="btn btn-success" >Update</button>
                        </div>

                    </form>
                </div>
                <?php  } ?>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Course</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  enctype='multipart/form-data' action="./adminView/addcourse.php" method="POST">
                        <div class="form-group">
                            <label >Course Name:</label>
                            <input type="text" class="form-control" name="c_name">
                        </div>
                        <div class="form-group">
                            <label>instructor SSN:</label>
                            <input type="text" class="form-control" id="instructorSSN" name="ssn" >
                        </div>
                        <div class="form-group">
                            <label>NumberOgRegistered:</label>
                            <input type="text" class="form-control" id="NumberOgRegistered" name="num" >
                        </div>
                        <div class="form-group">
                            <label>Rating:</label>
                            <input type="text" class="form-control" id="Rating" name="Rating">
                        </div>
                        <div class="form-group">
                            <button type="submit" style="height:40px" class="btn btn-success" >ADD</button>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                </div>
            </div>

        </div>
    </div>



</body >
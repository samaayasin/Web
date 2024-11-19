<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>User</title>
<head>
    <?php
    $db=new mysqli('localhost' ,'root' ,'','courses');
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    ?>

</head>
<body>
<div>
  <h2>All Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">User ID</th>
          <th class="text-center">Name</th>
          <th class="text-center">Email</th>
          <th class="text-center">Password</th>
          <th class="text-center">Phone Number</th>
          <th class="text-center">D.O.B</th>
          <th class="text-center">User Name </th>
      </tr>
    </thead>
      <?php
      $c=0;
      $sql="SELECT * from users";
      $result=$db-> query($sql);
      if ($result-> num_rows > 0){
          while ($row=mysqli_fetch_array($result)) {
              $c = $c + 1 ;
              ?>
    <tr>
      <td><?=$row["UserID"]?></td>
      <td><?=$row["Name"]?></td>
        <td><?=$row["Email"]?></td>
        <td><?=$row["Password"]?></td>
        <td><?=$row["PhoneNumber"]?></td>
        <td><?=$row["DateOfBirth"]?></td>
        <td><?=$row["UserName"]?></td>
        <td>
            <a href="./adminView/m.php?id=<?php echo $row['UserID']; ?>">.</a>
            <?php
            if(isset($_SESSION['idd'])) {
                $id =$_SESSION['idd'];
            }
            ?>
            <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>

        </td>
        <td>
            <a href="./adminView/deluser.php" role="button" ><i class="fa fa-trash"></i></a>
        </td>
    </tr>

    <?php

        }
    }
    ?>
      <td> <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal22" >
              Add </button></td>

      </td>
  </table>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <?php
        if(isset($id)) {
        $_SESSION['id']=$id;
        $query2 = mysqli_query($db, "select * from `users` where UserID='$id'");
        $row1 = mysqli_fetch_array($query2);
        ?>
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  enctype='multipart/form-data'  method="post" action="./adminView/editusers.php">

                        <div class="form-group">
                            <label for="e_name">Name:</label>
                            <input type="text" class="form-control" name="u_name" value="<?php echo $row1['Name']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="Sal">Email:</label>
                            <input type="text" class="form-control" name="Email" value="<?php echo $row1['Email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="R">Password:</label>
                            <input type="text" class="form-control" name="Password" value="<?php echo $row1['Password']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="job">Phone Number:</label>
                            <input type="text" class="form-control" name="Phone" value="<?php echo $row1['PhoneNumber']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="E">Date Of Birth:</label>
                            <input type="text" class="form-control" name="DateOfBirth" value="<?php echo $row1['DateOfBirth']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pass">User Name:</label>
                            <input type="text" class="form-control" name="UserName" value="<?php echo $row1['UserName']; ?>">
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

    <div class="modal fade" id="myModal22" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  enctype='multipart/form-data' action="./adminView/adduser.php" method="POST">
                        <div class="form-group">
                            <label for="e_name">Name:</label>
                            <input type="text" class="form-control" name="u_name" required>
                        </div>
                        <div class="form-group">
                            <label for="Sal">Email:</label>
                            <input type="text" class="form-control" name="Email" required>
                        </div>
                        <div class="form-group">

                            <label for="R">Password:</label>
                            <input type="text" class="form-control" name="Password" required>
                        </div>
                        <div class="form-group">

                            <label for="job">Phone Number:</label>
                            <input type="text" class="form-control" name="Phone" required>
                        </div>
                        <div class="form-group">

                            <label for="E">Date Of Birth:</label>
                            <input type="text" class="form-control" name="DateOfBirth" required>
                        </div>
                        <div class="form-group">

                            <label for="pass">UserName:</label>
                            <input type="text" class="form-control" name="UserName" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" style="height:40px" class="btn btn-success" >Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                </div>
            </div>

        </div>
    </div>


</div>

</body>

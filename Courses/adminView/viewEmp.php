<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <title>Employee</title>
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
  <h3>Employee Details</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Employee ID</th>
        <th class="text-center">Employee Name</th>
          <th class="text-center">Salary</th>
          <th class="text-center">Rating</th>
          <th class="text-center">Job Type</th>
          <th class="text-center">Email</th>
          <th class="text-center">Password</th>
      </tr>
    </thead>
    <?php
    $c=0;
    $sql="SELECT * from employees";
      $result=$db-> query($sql);
    if ($result-> num_rows > 0){
        while ($row=mysqli_fetch_array($result)) {
            $c = $c + 1 ;
            ?>

    <tr>
        <td><?=$row["EmployeeID"];?></td>
        <td><?=$row["Name"]?></td>
        <td><?=$row["Salary"]?></td>
        <td><?=$row["Rating"]?></td>
        <td><?=$row["JobType"]?></td>
        <td><?=$row["Email"]?></td>
        <td><?=$row["Password"]?></td>

        <td>
            <a href="./adminView/m.php?id=<?php echo $row['EmployeeID']; ?>">.</a>
            <?php
            if(isset($_SESSION['idd'])) {
                $id =$_SESSION['idd'];
            }
            ?>
            <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>

        </td>
        <td>
            <a href="./adminView/delemp.php" role="button" ><i class="fa fa-trash"></i></a>
        </td>
    </tr>

      <?php
          }
        }
      ?>
      <td> <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal2" >
              Add </button></td>
  </table>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
      <?php
      if(isset($id)) {
      $query2 = mysqli_query($db, "select * from `employees` where EmployeeID='$id'");
      $row1 = mysqli_fetch_array($query2);
      ?>
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Employee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data'  method="post" action="./adminView/editemp.php">

            <div class="form-group">
              <label for="e_name">Name:</label>
              <input type="text" class="form-control" name="e_name" value="<?php echo $row1['Name']; ?>">

            </div>
              <div class="form-group">
              <label for="Sal">Salary:</label>
              <input type="text" class="form-control" name="Sal" value="<?php echo $row1['Salary']; ?>">
        </div>
              <div class="form-group">
              <label for="R">Rating:</label>
          <input type="text" class="form-control" name="R" value="<?php echo $row1['Rating']; ?>">
      </div>
              <div class="form-group">
              <label for="job">Job Type:</label>
        <input type="text" class="form-control" name="job" value="<?php echo $row1['JobType']; ?>">
    </div>
              <div class="form-group">
              <label for="E">Email:</label>
      <input type="text" class="form-control" name="E" value="<?php echo $row1['Email']; ?>">
  </div>
              <div class="form-group">
              <label for="pass">Password:</label>
    <input type="text" class="form-control" name="pass" value="<?php echo $row1['Password']; ?>">
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
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  enctype='multipart/form-data' action="./adminView/addemp.php" method="POST">
                        <div class="form-group">
                            <label for="e_name">Name:</label>
                            <input type="text" class="form-control" name="e_name" required>
                        </div>
                        <div class="form-group">
                        <label for="Sal">Salary:</label>
                        <input type="text" class="form-control" name="Sal" required>
                </div>
                        <div class="form-group">

                        <label for="R">Rating:</label>
                <input type="text" class="form-control" name="R" required>
            </div>
                        <div class="form-group">

                        <label for="job">Job Type:</label>
            <input type="text" class="form-control" name="job" required>
        </div>
                        <div class="form-group">

                        <label for="E">Email:</label>
        <input type="text" class="form-control" name="E" required>
    </div>
                        <div class="form-group">

                        <label for="pass">Password:</label>
<input type="text" class="form-control" name="pass" required>
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

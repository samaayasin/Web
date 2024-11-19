<?php
if(isset($_POST['username']) && isset($_POST['position']) &&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['dob'])&&isset($_POST['password'])&&isset($_POST['confirmPassword'])){
    $uname=$_POST['username'];
    $upass=$_POST['password'];
    $name=$_POST['position'];
    $cpass=$_POST['confirmPassword'];
    $udate=$_POST['dob'];
    $uemail=$_POST['email'];
    $uphone=$_POST['phone'];

    try {
        $db = new mysqli('localhost', 'root', '', 'courses');
        if ($upass == $cpass) {
            $qryStr = "INSERT INTO `users` (`UserID`, `Name`, `Email`, `Password`, `Phone number`, `DateOfBirth`, `UserName`) VALUES ('', '" . $name . "', '" . $uemail . "', '" . $upass . "', '" . $uphone . "', '" . $udate . "', '" . $uname . "');";

            $rs = $db->query($qryStr);
            $db->commit();
            $db->close();
            if ($rs == 1) {
                header('Location:login.php');

            } else {
                echo "User name is used choose another";
            }

}
        else{
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1 style="text-align: center;color: red;font-family: 'Sans Serif Collection'">The password you entered does not match</h1>
</body>
<?php

        }
    }
    catch (Exception $e){
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <script src="script.js" defer></script>
    <title>Registraion Form</title>
</head>
<body>
<form action="signup.php" method="post" class="form">
    <h1 class="text-center">Registration Form</h1>
    <!-- Progress bar -->
    <div class="progressbar">
        <div class="progress" id="progress"></div>

        <div
            class="progress-step progress-step-active"
            data-title="Intro"
        ></div>
        <div class="progress-step" data-title="Contact"></div>
        <div class="progress-step" data-title="info"></div>
        <div class="progress-step" data-title="Password"></div>
    </div>

    <!-- Steps -->
    <div class="form-step form-step-active">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" />
        </div>
        <div class="input-group">
            <label for="position">Name</label>
            <input type="text" name="position" id="position" />
        </div>
        <div class="">
            <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
    </div>
    <div class="form-step">
        <div class="input-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" />
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
        </div>
        <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
        </div>
    </div>
    <div class="form-step">
        <div class="input-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" />
        </div>

        <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
        </div>
    </div>
    <div class="form-step">
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <div class="input-group">
            <label for="confirmPassword">Confirm Password</label>
            <input
                type="password"
                name="confirmPassword"
                id="confirmPassword"
            />
        </div>
        <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <input type="submit" value="Submit" class="btn" />
        </div>
    </div>
</form>
</body>
</html>

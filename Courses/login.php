<?php
session_start();
if(isset($_POST['textUser']) && isset($_POST['pass'])){
    $uname=$_POST['textUser'];
    $uPass=$_POST['pass'];
    try{
        $db=new mysqli('localhost' ,'root' ,'','courses');
        $qryStr="select * from users";
       $res= $db->query($qryStr);
       for($i=0;$i<$res->num_rows;$i++){
           $row=$res->fetch_object();
           if(($row->UserName == $uname) && ($row->Password == $uPass)){
               $_SESSION['IsMember']=1;
               $_SESSION['UserName']=$uname;
               $_SESSION['UserID']=$row->UserID;
               $_SESSION['Name']=$row->Name;
               $_SESSION['email']=$row->Email;
               $_SESSION['PhoneNumber']=$row->PhoneNumber;

$db->close();
               header('Location:Homepage.php');

               ?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <script>
          history.go(-4);
    </script>
</head>
<body>
</body>-->

<?php
           }
       }
        echo "<h3>Username or/and password are not correct</h3>";

    }catch (Exception $e){
    }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="center">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="txt_field">
            <input type="text" name="textUser" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password" name="pass" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
            Not a member? <a href="signup.php">Signup</a>
        </div>
    </form>
</div>

</body>
</html>

<?php
?>
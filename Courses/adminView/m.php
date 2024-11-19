    <?php
    session_start();
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['idd'] = $id;
        header('location:../adminpage.php');
       }
    ?>
    <!--<!DOCTYPE html>
    <html>
    <head>
        <title>Admin</title>
        <head>

        </head>
    </head>
    <body >
    <script>
        history.go(-1);
    </script>
    </body >-->

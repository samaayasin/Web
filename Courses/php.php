<?php
session_start();
if ((isset($_SESSION['IsMember']) && isset($_SESSION['UserName']))) {
    $userID = $_SESSION['UserID']; // Retrieve the value from the session variable

    $conn = new mysqli('localhost', 'root', '', 'courses');

// Check the connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

// Retrieve the level from the database
// Assuming you have a user ID stored in a variable called $userID
    $sql = "SELECT * FROM courses_users";
    $result = $conn->query($sql);

    $f = 0;
    for ($i = 0; $i < $result->num_rows; $i++) {
        $row = $result->fetch_object();
        if (($row->UserID == $userID) && ($row->CourseName == 'PHP')) {
            $level = $row->Level;
            $f = 1;
        }

    }
    if ($f == 0) {
        $c = 'PHP';
        $l = -1;
        $stmt = $conn->prepare("INSERT INTO courses_users (UserID, CourseName,Level) VALUES (?, ?,?)");
        $stmt->bind_param("isi", $userID, $c, $l);
        $level = -1;

// Execute the statement
        $stmt->execute();
        $stmt->close();

    }

    $conn->close();
// Close the database connection
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated level value from the AJAX request
    $updatedLevel = $_POST['level'];

    // Update the corresponding database record
    $conn = new mysqli('localhost', 'root', '', 'courses');

    // Check the connection

    $Query = "UPDATE courses_users SET Level = '$updatedLevel' WHERE UserID = $userID AND CourseName = 'PHP'";
    mysqli_query($conn, $Query);
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
    <script src="https://www.youtube.com/iframe_api"></script>
    <meta name= "viewport" content="width-device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel= "stylesheet" href="langstyle.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script defer src="phpvideos.js"></script>
    <link rel= "stylesheet" href="Footer.css">
    <script defer src="courses.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.e" >
    <link rel="stylesheet" href="main.css" >
    <title>PHP</title>
<script>
    function fp() {
        <?php if (!(isset($_SESSION['IsMember']) && isset($_SESSION['UserName']))){
        ?>
        window.location.href = "login.php";
        <?php }
        ?>

    }
</script>

</head>

<body onload="setV1()" onclick="fp()">

<header>

    <div class="container hidden" id="container2">
        <div class="image-containerL">
            <img id="prevImage" src="left.png" alt="Example Image">
        </div>
        <div class="image-containerR">
            <img id="nextImage" src="right.png" alt="Example Image">
        </div>
        <div class="progress-circular">
            <span class="value hidden" span id="container2Span" >%5</span>
        </div>
        <div class="text"> Enrolled Date: 17-5-2023 <br> Duration: 4 hours <br> You are Greet</div>

        <canvas class ="hidden" id="certificateCanvas" width="800" height="600"></canvas>
        <div class="btn">

            <button onclick="generateCertificate('PHP')" class="certificateBtn hidden">Certificate</button>
        </div>

    </div>

    <div class="container" id="container1">
        <div class="btn" id="hideBtn">
            <button>Enroll now!</button>

        </div>

        <div class="text">
            Learn the fundamentals of PHP, one of the most popular languages of modern web development. </div>
    </div>

    <script>
        let progressCircular = document.querySelector(".progress-circular");
        var Name='<?php echo $_SESSION['Name']; ?>';
        const containerSpan = document.getElementById('container2Span');
        var level = '<?php echo $level; ?>'; // Retrieve the level value from PHP
        var certificateBtn = document.querySelector('.certificateBtn');
        if (level >= 14) {
            // Show the certificate button
            certificateBtn.classList.remove('hidden');
        }
        containerSpan.textContent = parseInt((level*100)/13)+"%";

        progressCircular.style.background =`conic-gradient(#cd5de1 ${(360*level )/13}deg, #ededed 0deg)`;
        console.log(level);
        function incrementCount() {


            var cLevel =level;
            // Perform the necessary operations to update the level
            if (currentSlide - cLevel + 1 === 1) {
                cLevel++;
            }
            level = cLevel;
            console.log("Updated level:", level);
            // Do something with the updated level value
            containerSpan.textContent = parseInt((level*100)/13)+"%";

            progressCircular.style.background =`conic-gradient(#cd5de1 ${(360*level )/13}deg, #ededed 0deg)`;
            if (level >= 13) {
                // Show the certificate button
                certificateBtn.classList.remove('hidden');
            }
            // Send the updated level value to the PHP file using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', window.location.href);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('Level updated successfully.');
                } else {
                    console.log('Error updating level.');
                }
            };
            xhr.send('level=' + level);
        }


        function logout(){
            <?php
            // session_destroy();
            ?>
        }
    </script>
    <script src="pro.js"></script>
    <input type="checkbox" name="" id="togg">
    <label for="togg" class="fas fa-bars"></label>
    <a href="#" class= "logo" >Learn with us<span>.</span></a>
    <nav class= "navbar">
        <a href= "Homepage.php">home</a>
        <a href="#footer">about</a>
        <a href= "Homepage.php" >courses</a>
        <a href="Homepage.php" >review</a>
        <a href= "#footer">contact</a>
        <?php if(!(isset($_SESSION['IsMember']) && isset($_SESSION['UserName']))){ ?>
            <a href= "login.php">sign in</a>
            <?php
        }?>
        <?php if((isset($_SESSION['IsMember']) && isset($_SESSION['UserName']))){ ?>
            <img src="44.png" class="user" onclick="togglemenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="44.png">
                        <h2>Samaa Yasin</h2>
                    </div>
                    <hr>
                    <a href="editprofile.php" class="sub-menu-link">
                        <img src="user.png">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="settings.png">
                        <p>Setting & Privacy</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="customer-service.png">
                        <p>Help & Support</p>
                        <span>></span>
                    </a>
                    <a href="Homepage.php" class="sub-menu-link" onclick="logout()">
                        <img src="logout.png">
                        <p>Logout</p>
                        <span>></span>
                    </a>

                </div>

            </div>
            <?php
        }?>

        <div class="Videos" id="videosp">
            <div><h2> </h2>
                <p id="vp">  </p>
            </div>
            <div id="player"> </div>
        </div>


        <nav class="sidebar">
            <div class="text">
                PHP Tutorial
            </div>
            <ul>
                <li ><a onclick="setV1()" href="#" >PHP Introduction</a></li>
                <li><a href="#" onclick="setV2()"> Basic Syntax</a></li>
                <li> <a href="#"  onclick="setV3()">Scalar Data Type </a></li>
                <li><a href="#" onclick="setV4()">Variables</a></li>
                <li><a href="#" onclick="setV5()">Expressions</a></li>
                <li><a href="#" onclick="setV6()">Operators</a></li>
                <li><a href="#" onclick="setV7()">Control Structures</a></li>
                <li><a href="#" onclick="setV8()">Conditional Statements</a></li>
                <li><a href="#" onclick="setV9()">Loops</a></li>
                <li><a href="#" onclick="setV10()">Break and Continue</a></li>
                <li><a href="#" onclick="setV11()">Include and Require</a></li>
                <li><a href="#" onclick="setV12()">Functions </a></li>
                <li><a href="#" onclick="setV13()">Project</a></li>


            </ul>
        </nav>
    </nav>
    <script>
        $('.btn').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        $('.feat-btn').click(function(){
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
</header>
<div class="Videos" id="videosp">
    <div><h2> </h2>
        <p id="vp">  </p>
    </div>
    <iframe width="710" height="380" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="foo">

<footer id="footer">
    <div class="footer-content">
        <h3>Learn With Us</h3>
        <p>our site for teaching the basics of programming languages</p>
        <ul class="socials">
            <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
            <li><a href="#"> <i class="fa fa-google"></i></a></li>
            <li><a href="#"> <i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 Learnwithus designed by <span>Samaatala</span></p>

    </div>
</footer>
</div>

</body>
</html>
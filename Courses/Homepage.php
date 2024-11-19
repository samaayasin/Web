<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
    <meta name= "viewport" content="width-device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="style.css">
    <title>Learn With US</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/fdaff26522.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>

        function f(){
            document.getElementById('C').innerText=document.getElementById('T').value;
            const textarea = document.getElementById('T');
            textarea.value = '';
        }
        function f1() {
            const textarea = document.getElementById('T');
            textarea.value = '';
        }
        function f2() {
            document.getElementById('L').style.color='blue';
            document.getElementById('L2').style.color='blue';
        }
        function f3() {
            document.getElementById('L').style.color='black';
            document.getElementById('L2').style.color='black';
        }

        function fc(){
                window.location.href = "C++.php";
        }
        function fjs(){
            window.location.href = "JS.php";

        }
        function fcss(){
            window.location.href = "CSS.php";

        }
        function fj(){
            window.location.href = "java.php";

        }
        function fph(){
            window.location.href = "php.php";

        }
        function fpy(){
            window.location.href = "Python.php";

        }
        function fht(){
            window.location.href = "Html.php";

        }
        function fsql(){
            window.location.href = "SQL.php";
        }
        function logout(){
            <?php
           // session_destroy();
            ?>
        }
    </script>
</head>
<body>
<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="#" class= "logo" >Learn with us<span>.</span></a>
    <nav class= "navbar">
        <a href= "#b">home</a>
        <a href="#footer">about</a>
        <a href= "#title" >courses</a>
        <a href="#comment" >review</a>
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
                <a href="editprofile.html" class="sub-menu-link">
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
                <?php
                if(strcmp ($_SESSION['UserName'],"Samaa")==0){
                ?>
                <a href="adminpage.php" class="sub-menu-link">
                    <img src="businessman.png">
                    <p>Admin Page</p>
                    <span>></span>
                </a>
                <?php
                }
                ?>
                <a href="#" class="sub-menu-link" onclick="logout()">
                    <img src="logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>

        </div>
            <?php
        }?>
    </nav>

</header>
<div class="Bigdiv">
    <h1 class="title" id="title">Learn With Us</h1>
    <span class="b" id="b"><img src="b.png" ></span>
    <div class="sp">
        <span class="s1"><img src="1.png" class="object" data_value="10" alt=""> </span>
        <span class="s2">  <img src="2.png" class="object" data_value="10" alt=""> </span>
        <span class="s3"><img src="3.png" class="object" data_value="10" alt=""> </span>
        <span class="s4"> <img src="4.png" class="object" data_value="10" alt=""> </span>
        <span class="s5"><img src="5.png" class="object" data_value="10" alt="">  </span>
        <span class="s6"> <img src="6.png" class="object" data_value="10" alt=""></span>
        <span class="s7"> <img src="7.png" class="object" data_value="10" alt=""></span>
        <span class="s8">  <img src="8.png" class="object" data_value="10" alt="">  </span>
        <span class="s9"> <img src="9.png" class="object" data_value="10" alt="">  </span>
        <span class="s10"> <img src="10.png" class="object" data_value="10" alt="">  </span>
        <span class="s11"><img src="11.png" class="object" data_value="10" alt="">  </span>
        <span class="s12"> <img src="12.png" class="object" data_value="10" alt="">  </span>
        <span class="s13"> <img src="14.png" class="object" data_value="10" alt="">  </span>
        <span class="s14"> <img src="13.png" class="object" data_value="10" alt="">  </span>
    </div>
    <div class="slider" id="slider">
        <div class="slide_track">
            <div class="slide">
                <img src="C1.PNG" alt=""  onclick="fc()">
            </div>
            <div class="slide">
                <img src="java-script.png" alt="" onclick="fjs()">
            </div>
            <div class="slide">
                <img src="css.png" alt=""onclick="fcss()" >
            </div>
            <div class="slide">
                <img src="javaa.PNG" alt="" onclick="fj()">
            </div>
            <div class="slide">
                <img src="phpp.PNG" alt="" onclick="fph()">
            </div>
            <div class="slide">
                <img src="python%20(1).png" alt="" onclick="fpy()" >
            </div>
            <div class="slide">
                <img src="htmll.PNG" alt="" onclick="fht()">
            </div>
            <div class="slide">
                <img src="SQL1.PNG" alt="" onclick="fsql()">
            </div>


            <div class="slide">
                <img src="C1.PNG" alt="" onclick="fc()">
            </div>
            <div class="slide">
                <img src="java-script.png" alt="" onclick="fjs()">
            </div>
            <div class="slide">
                <img src="css.png" alt="" onclick="fcss()">
            </div>
            <div class="slide">
                <img src="javaa.PNG" alt="" onclick="fj()">
            </div>
            <div class="slide">
                <img src="phpp.PNG" alt="" onclick="fph()">
            </div>
            <div class="slide">
                <img src="python%20(1).png" alt="" onclick="fpy()">
            </div>
            <div class="slide">
                <img src="htmll.PNG" alt="" onclick="fht()">
            </div>
            <div class="slide">
                <img src="SQL1.PNG" alt="" onclick="fsql()">
            </div>

        </div>
    </div>

    <div class="staffdiv">
        <h1 class="staff">Our staff</h1>
        <section class="se">
            <div class="swiper mySwiper container ">
                <div class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="java2.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Caleb Curry</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">Java instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="phpt.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Dani Krossing</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">PHP instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="sqlins.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Teddy Smith</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">SQL instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="htmlin.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Hani jad</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">html instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="sqlin.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Tim</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">Python instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="c++in.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Trevor Payne</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">C++ instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="cssin.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Faisal Zamir</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">CSS instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="jsin.png" alt="">
                            </div>
                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name" style="font-family:'Sans Serif Collection'">Dary</span>
                                <span class="profession" style="font-family:'Sans Serif Collection'">Javascript instructor</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="button">
                                <button class="aboutMe">about me</button>
                                <button class="hireMe">hire me</button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination" style="left: 260px"></div>
        </section>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <div class="wrapper">
            <h1 class="best">The Top 3 Courses</h1>
            <div class="co">
                <div class="box">
                    <img src="4.png">
                    <h3>Html</h3>
                    <p>HTML stands for HyperText Markup Language. It is a standard markup language for web page creation</p>
                    <a href="https://www.hostinger.com/tutorials/what-is-html" class="bt"> Read more</a>

                </div>
                <div class="box">
                    <img src="8.png" alt="">
                    <h3>java</h3>
                    <p>Java is a popular programming language, created in 1995. It is owned by Oracle, and more than 3 billion devices run Java
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Java_(programming_language)" class="bt"> Read more</a>

                </div>
                <div class="box">
                    <img src="1.png" alt="">
                    <h3>python</h3>
                    <p>Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.

                    </p>
                    <a href="https://en.wikipedia.org/wiki/Python_(programming_language)" class="bt"> Read more</a>

                </div>

            </div>

        </div>
        <div class="container mt-5" id="comment">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info">
                            <img src="44.png" alt="" width="40" class="rounded-circle">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name"><?php if(!isset($_SESSION['UserName'])) echo ""; else echo $_SESSION['UserName']; ?></span>



                                <span class="date text-black-50">shared publicly-<?php echo date('d-m-Y'); ?></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="comment-text" id="C"></span>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="d-flex flex-row fs-12">
                            <div class="like p-2 cursor" id="L2" onclick="f2()"ondblclick="f3()" >
                                <i class="fa fa-thumbs-o-up"> </i>
                                <span class="ml-1" id="L" onclick="f2()" ondblclick="f3()">Like</span>
                            </div>
                            <div class="like p-2 cursor">
                                <i class="fa fa-commenting-o"> </i>
                                <span class="ml-1">Comment</span>
                            </div>
                            <div class="like p-2 cursor">
                                <i class="fa fa-share"> </i>
                                <span class="ml-1">Share</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light p-2">
                        <div class="d-flex flex-row align-items-start" >
                            <img src="44.png" alt="" class="rounded-circle" width="40">
                            <textarea class="from-control ml-1" shadow-none textarea name="" id="T" cols="90" rows="3" style=" font-family: 'Segoe Fluent Icons' "></textarea>
                        </div>
                        <div class="mt-2 text-right">
                            <button class="btn btn-success btn-sm shadow-none" type="button" style="background-color: #bd77bd"  onclick="f()">Post Comment</button>
                            <button class="btn btn-outline-danger btn-sm ml-1 shadow-none" type="button" onclick="f1()">Cancel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer id="footer">
            <div class="footer-bottom">
                <h3>Learn With Us</h3>
                <p>our site for teaching the basics of programming languages</p>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/profile.php?id=100003915417923"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/?lang=ar"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="mailto:samaayasin85@gmail.com"> <i class="fa fa-google"></i></a></li>
                    <li><a href="https://www.instagram.com/"> <i class="fa fa-instagram"></i></a></li>
                </ul>
                <p>copyright &copy;2023 Learnwithus designed by <span>Samaatala</span></p>
            </div>
        </footer>

    </div>
</div>




<script type="text/javascript">
    document.addEventListener("mousemove", move);
    function move(e) {
        document.querySelectorAll(".object").forEach(function (move){
            let V =move.getAttribute("data_value");
            let x=(e.clientX*V)/250;
            let y=(e.clientY*V)/250;
            move.style.transform="translateX("+x+"px) translateY("+y+"px)";
        });
    }
</script>
<script>
    let subMenu=document.getElementById("subMenu");
    function togglemenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>

</body>
</html>
<?php
?>


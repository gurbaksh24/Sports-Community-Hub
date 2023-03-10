<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Community Hub</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <h1 class="logo">Sports Community Hub</h1>
        <ul class="nav-link" id="nav-link">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Tours</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">About</a></li>
            <?php
                if($_SESSION['email'])
                {
            ?>
            <li class="ctn"><?php echo $_SESSION['email'] ?></li> <li class="ctn"><a href="logout.php" id="logout">Logout</a></li>
            <?php 
                }
                else {
            ?>
                    <li class="ctn"><a href="#" id="register">Sign Up</a></li>
                    <li class="ctn"><a href="#" id="login">Login</a></li>
            <?php
                }
            ?>

        </ul>
        <img src="./img/menu-btn.png" alt="" id="menu-btn" class="menu-btn">
    </nav>
    <header>
        <div class="header-content">
            <h2>Explore The New World</h2>
            <div class="line"></div>
            <h1>SPORTS COMMUNITY HUB</h1>
            <a href="book_event.php" class="ctn">Book Now</a>
        </div>

        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <h1 class="main-heading">Login Form</h1>
				        <input type="email" name='emailid' placeholder="Email ID" required/>
				        <input type="password" name='password' placeholder="Password" required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form' action="registration.php", method="post">
                        <h1 class="main-heading">Sign Up</h1>
				        <input type="text" name='firstName' placeholder="First Name" required/>
                        <input type="text" name='lastName' placeholder="Last Name" required/>
				        <input type="email" name='emailId' placeholder="Email Id" required/>
                        <input type="text" name='mobileNumber' placeholder="Mobile Number" pattern="[0-9]{10}" required/>
				        <input type="password" id='pass' name='password' placeholder="Password" required/>
				        <input type="password" id='confirmPass' name='confirmPassword' placeholder="Confirm Password" onkeyup="validatePassword()" required/>
                        <span id="wrong_pass_alert"></span>
				        <button id="submit" type="submit">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section class="events">
        <div class="title">
            <h1>Upcoming Events</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./img/sports/football.jpg" alt="" class="sports-col">
                <h4>Football</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium iste incidunt laborum tenetur veniam enim asperiores earum harum illo neque dolorem nam, voluptates sapiente error assumenda culpa et, aliquam placeat!</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img src="./img/sports/cricket.jpg" alt="" class="sports-col">
                <h4>Cricket</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium iste incidunt laborum tenetur veniam enim asperiores earum harum illo neque dolorem nam, voluptates sapiente error assumenda culpa et, aliquam placeat!</p>
                <a href="#" class="ctn">Learn More</a>  `
            </div>
        </div>
    </section>

    <section class="explore">
        <div class="explore-content">
            <h1>EXPLORE THE SPORTS WORLD</h1>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, labore. Corporis aperiam autem incidunt ullam est, beatae maxime ratione id cum? Eligendi dicta ea maiores quidem sunt a debitis rerum.</p>
            <a href="#" class="ctn">Learn More</a>
        </div>
    </section>

    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1>UPCOMING GAMES & EVENTS</h1>
                <div class="line"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, odit delectus, a soluta consequuntur labore, quos repudiandae accusantium alias sequi impedit adipisci veniam at nisi inventore vitae deleniti reiciendis. Maiores.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="./img/upcoming-sports/img1.jpg" alt="">
                    <img src="./img/upcoming-sports/img2.jpg" alt="">
                    <img src="./img/upcoming-sports/img3.jpg" alt="">
                    <img src="./img/upcoming-sports/img4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis enim qui debitis sunt adipisci repellendus quas praesentium vero ratione recusandae dolor facilis dignissimos, aliquid esse reiciendis similique odio perferendis? Maiores.</p>
        <p>Copyright @ 2023 Sports Community Hub</p>
    </section>

    <script>
        var menuBtn = document.getElementById('menu-btn')

        menuBtn.addEventListener('click',()=>{
            $('#nav-link').toggleClass('mobile-menu');
        })

        var register = document.getElementById('register');
        var registrationForm = document.getElementById('register-form');

        var login = document.getElementById('login');
        var loginForm = document.getElementById('login-form');
        
        register.addEventListener('click', ()=>{
            registrationForm.style.display = 'block';
            loginForm.style.display = 'none';
        })


        login.addEventListener('click', ()=>{
            loginForm.style.display = 'block';
            registrationForm.style.display = 'none';
        })

        function validatePassword() {
            var password = document.getElementById("pass").value;
            var confirmPassword = document.getElementById("confirmPass").value;

            if(password != confirmPassword){
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '??? Use same password';
                document.getElementById('submit').disabled = true;
                document.getElementById('submit').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '???? Password Matched';
                document.getElementById('submit').disabled = false;
                document.getElementById('submit').style.opacity = (1);
            }
        }

    </script>
</body>
</html>
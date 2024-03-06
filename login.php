<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

    <!-- Footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Police -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>
<body>
    <header>
        <nav>
            <a href="./wow-armory.php">
                <img class="logoWOW" src="./Assets/logo.png" alt="logoWOW">
            </a>
        </nav>
    </header>
    <main>
        <!-- Login -->
        <div class="loginConteneur">
            <div class="loginhtml">
                <div class="loginbutton ombre backgroundBlanc itemcenter">
                    <input id="tab-signin" type="radio" name="tab" class="login" checked onclick="hide_register()">
                    <label for="tab-signin" class="tab">Login</label>
                </div>
                <div class="registerbutton ombre backgroundBlanc itemcenter">
                    <input id="tab-signup" type="radio" name="tab" class="register" onclick="hide_login()">
                    <label for="tab-signup" class="tab">Register</label>
                </div>
                <div class="loginform " >
                    <div class="loginbox ombre backgroundBlanc" id="login_vue">
                        <div class="titre-login">
                            <h2>Login</h2>
                        </div>
                        <?php include "./PHP/Login/auth.php"?>
                        <form action="login.php" method="POST">
                            <div class="loginholder">
                                <div class="divloginholder">
                                    <h6>Email Adress</h6> 
                                    <input type="email" name="email" placeholder="Enter your Email Adress">
                                </div>
                                <div class="divloginholder">
                                    <h6>PassWord</h6>
                                    <input type="password" name="password" placeholder="Enter your PassWord">
                                </div>
                                <div class="checkin">
                                    <input id="check" type="checkbox" class="check">
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="submitbuttonlogin">
                                    <input type="submit" name="submit"  value="Login">
                                </div>
                                <div class="hrloginconteneur">
                                    <div class="footerboxlogin">
                                        <label class="forgotpassword" for="tab-signup">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                    
                    <div class="registerbox ombre backgroundBlanc" id="register_vue">
                        <div class="titre-login">
                            <h2>Register</h2>
                        </div>
                        <?php include "./PHP/Login/adduser.php"?>
                        <form action="login.php" method="post">
                            <div class="loginholder">
                                <div class="divloginholder">
                                    <h6>Email Adress</h6>
                                    <input type="email" id="email-register" name="email-register" placeholder="Enter your Email Adress">
                                </div>
                                <div class="divloginholder">
                                    <h6>First Name</h6>
                                    <input type="text" name="prenom-register" placeholder="Enter your First Name">
                                </div>
                                <div class="divloginholder">
                                    <h6>Name</h6>
                                    <input type="text" name="nom-register" placeholder="Enter your Name">
                                </div>
                                <div class="divloginholder">
                                    <h6>PassWord</h6>
                                    <input type="password" name="password-register" placeholder="Enter your PassWord">
                                </div>
                                <div class="divloginholder">
                                    <h6>Repeat PassWord</h6> 
                                    <input type="password" name="password-check-register" placeholder="Repeat your PassWord">
                                </div>
                                <div class="submitbuttonregister">
                                    <input type="submit" name="submit-register" value="Register">
                                </div>
                                <div class="hrregisterconteneur">
                                    <div class="footerboxregister">
                                        <label class="alreadymember" for="tab-signin">Already Member?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            //Func hide_register()
                //Récupération element avec ID = login_vue
                //element.attribute.set(hide = false)
                //Récupération element avec ID = register_vue
                //element.attribute.set(hide = true)
            //Func hide_login()
                //Récupération element avec ID = login_vue
                //element.attribute.set(hide = true)
                //Récupération element avec ID = register_vue
                //element.attribute.set(hide = false)
            function hide_register() {
                document.getElementById("register_vue").style.display = "none";
                document.getElementById("login_vue").style.display = "block";
            }
        
            function hide_login() {
                document.getElementById("login_vue").style.display = "none";
                document.getElementById("register_vue").style.display = "block";
                
            }
        </script>
        <style>
            #register_vue {
                display: none;
            }
            .registerbox{
                margin-bottom: 10%; 
            }
        </style>
    </main> 
</body>
</html>

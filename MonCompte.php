<?php
session_start();


if(isset($_SESSION["Loggedin"])) {
    require_once "./PHP/Login/DB_Conn.php";

    $user = $_SESSION["Loggedin"];
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/iconelogin" href="./Assets/photodeprofil/compte.png" />
    <link rel="stylesheet" href="./css/moncompte.css">
    <title>Mon Compte</title>

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
        <div class="loginhtml">
            

        </div>
        <div class="profilConteneur">
            <div class="profilhtml">
                <div class="profilform ombre">
                    <div class="profilholder">
                        <img class="photo" src=<?php echo $_SESSION['Photo'] ?> alt="user" />
                        <h1><?php echo $user ?></h1>
                    </div>
                </div>
                    <h1>
                        <?php 
                            if(isset($_SESSION[''])) {
                                header('login.php');
                            }
                        ?>
                    </h1>
                
            </div>
        </div>
    </main> 
</body>
</html>

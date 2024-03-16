<?php
session_start();


if(isset($_SESSION["Loggedin"])) {
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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    


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
        <div class="profilConteneur">
            <div class="profilhtml">
                <div class="profilform ombre">
                    <div class="profilholder">
                        <img class="photo" src=<?php echo $_SESSION['Photo'] ?> alt="user" />
                        <h1>
                            <?php echo $user ?>
                        </h1>
                    </div>
                </div>
                <div class="Monture-conteneur ombre">
                    <h1>Monture</h1>
                    <div class="text">
                        <?php
                            require_once "./PHP/MonCompte/conn-monture.php";
                        ?>
                    </div>
                </div>
                <div class="Equipement-conteneur ombre">
                    <h1>Equipement</h1>
                    <div class="text">
                        <?php
                            require_once "./PHP/MonCompte/conn-equipement.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<?php
session_start();


if (isset ($_SESSION["Loggedin"])) {
    $user = $_SESSION["Loggedin"];
    $id = $_SESSION["Id"];
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
                            <?php
                            if ($id != 666) {
                                echo $user;
                            }else{
                                echo $user;
                            }
                            ?>
                        </h1>
                    </div>
                </div>
                <?php if ($id != 666) {

                    echo '<div class="Monture-conteneur ombre">
                    <h1>Monture</h1>
                    <div class="text">';
                    require_once "./PHP/MonCompte/conn-monture.php";
                    echo '</div>
                </div>
                <div class="Equipement-conteneur ombre">
                    <h1>Equipement</h1>
                    <div class="text">';

                    require_once "./PHP/MonCompte/conn-equipement.php";

                    echo '</div></div>';

                } else {
                    echo '<div class="Joueur-conteneur ombre">
                    <h1>Joueur</h1>
                    <div class="text">';

                        require_once "./PHP/MonCompte/conn-joueur.php";
                    echo '</div></div>';
                } ?>
            </div>
        </div>
    </main>
</body>

</html>
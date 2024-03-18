<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';

/* On ferme la connexion */
$conn = null;

if(isset($_SESSION["Loggedin"])){
    $userpseudo = $_SESSION['Loggedin'];
}else{
    session_destroy();
}
include "auth-mount-equip.php";
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="icon" type="image/x-icon" href="./Assets/icon.png" />
    <meta charset="utf-8" />
    <title>WoW Collection</title>


    <!-- Footer -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="./css/style-equipment.css" />

    <!-- <style>
        form {
            background-image: url('./Assets/header-mounts.jpg');
            background-size: cover;
            height: 800px;
            width: 100%;
        }
    </style> -->


</head>

<body>



    <div class="imgHeaderMount">

        <header>

            <nav id="menus">
                <ul>
                    <li>
                        <a href="./wow-armory.php">
                            <img src="./Assets/logo.png" alt="World of warcraft" class="logo" /></a>
                    </li>
                    <li><a href="./bdd-mount.php">Montures </a></li>
                    <li><a href="./equipements.php">Equipements</a></li>
                    <li>
                        <?php 
                            if(isset($_SESSION['Loggedin'])){
                                echo '<a href="./MonCompte.php">' .$userpseudo.'</a>';
                            }else{
                                echo '<a href="./login.php">Mon compte</button></a>';
                            }
                        ?>
                    </li>
                    <li>
                        <?php 
                        if(isset($_SESSION['Loggedin'])){
                            echo '<a href="./PHP/Login/logout.php"><button class="login" type="button">Logout</button></a>';
                        } else {
                            echo '<a href="./login.php"><button class="login" type="button">Login</button></a>';
                        }
                        ?>
                    </li>
                </ul>

            </nav>




            <form action="bdd-mount.php" method="post" class="formMount">



                <!-- /*------------------------ FILTRES MONTURES-------------------*/ -->

                <!-- Type -->

                <div class="filter">

                    <label for="type">Type</label>
                    <select name="type">
                        <option value="">Type</option>
                        <option value="Aquatique">Aquatique</option>
                        <option value="Volante">Volante</option>
                        <option value="Terrestre">Terrestre</option>
                    </select>


                    <label for="difficulty">Difficulté</label>
                    <select name="difficulty">
                        <option value="">Difficulté</option>
                        <option value="Facile">Facile</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Difficile">Difficile</option>
                        <option value="Argent réel">Argent réel</option>

                    </select>

                    <label for="source">Source</label>
                    <select name="source">
                        <option value="">Source</option>
                        <option value="Anniversaire de WoW">Anniversaire de WoW</option>
                        <option value="Métiers">Métier</option>
                        <option value="Boutique">Boutique</option>
                        <option value="Butin">Butin</option>
                        <option value="Cartes à collectionner">Collection de cartes</option>
                        <option value="Comptoir">Comptoir</option>
                        <option value="Evenèments mondiaux">Evènements mondiaux</option>
                        <option value="Divers">Autres</option>
                        <option value="Exploration des îles">Exploration des îles</option>
                        <option value="Hauts-faits">Hauts-faits</option>
                        <option value="Non implémenté">Non implémenté</option>
                        <option value="Promotion Blizzard">Blizzard promotion</option>
                        <option value="PvP côté">PvP</option>
                        <option value="Quête">Quêtes</option>
                        <option value="Retiré">Retiré</option>
                        <option value="Secret">Secrets</option>
                        <option value="Vendeur">Vendeur</option>

                    </select>
                </div>

                <div class="filter2">

                    <label for="extension">Extensions</label>
                    <select name="extension">
                        <option value="">Extensions</option>
                        <option value="Battle for Azeroth">Battle for Azeroth</option>
                        <option value="Burning Crusade">Burning Crusade</option>
                        <option value="Cataclysm">Cataclysm</option>
                        <option value="Dragonflight">Dragonflight</option>
                        <option value="Légion">Légion</option>
                        <option value="Mists of Pandaria">Mists of Pandaria</option>
                        <option value="Shadowlands">Shadowlands</option>
                        <option value="Warlords of Draenor">Warlords of Draenor</option>
                        <option value="WoW Vanilla">WoW Vanilla</option>
                        <option value="Wrath of the Lich King">Wrath of the Lich King</option>
                    </select>

                    <label for="faction">Faction</label>
                    <select name="faction">
                        <option value="">Faction</option>
                        <option value="Alliance">Alliance</option>
                        <option value="Horde">Horde</option>
                        <option value="Neutre">Neutre</option>
                    </select>

                    <div>
                        <input type="submit" value="Rechercher" name="submit">
                    </div>
                </div>





                <!-- // header("Location:list-mount.php"); -->





            </form>

        </header>

    </div>





    <!-- /*----------------------------Connexion BDD------------------------*/ -->




    <?php


    //On récupère les infos de la table 
    




    if (isset ($_POST["submit"])) {




        // Godefroy
        // Step 1
        // Pour chaque paramètre, on peut créé un boolean correspondant
        $difficulty = $_POST["difficulty"];
        $haveDifficulty = false;
        $source = $_POST["source"];
        $haveSource = false;
        $extension = $_POST["extension"];
        $haveExtension = false;
        $faction = $_POST["faction"];
        $haveFaction = false;
        $type = $_POST["type"];
        $haveType = false;
        $i = 0;


        $sqlQuery = 'SELECT * FROM t_monture 
            INNER JOIN tj_m_appartient_fa_mafa on tj_m_appartient_fa_mafa.M_Id=t_monture.M_Id 
            INNER JOIN t_m_faction_mfa on t_m_faction_mfa.MFA_Id=tj_m_appartient_fa_mafa.MFA_Id 
            INNER JOIN t_m_difficulte_mdi on t_m_difficulte_mdi.MDI_Id=t_monture.MDI_Id 
            INNER JOIN t_moyen_obtention_mo on t_moyen_obtention_mo.MO_Id=t_monture.MO_Id 
            INNER JOIN t_m_extensions_me on t_m_extensions_me.ME_Id=t_monture.ME_Id
            INNER JOIN t_m_type_mty on t_m_type_mty.MTY_Id=t_monture.MTY_Id';


        // Godefroy
        // Step 2
        // On passe le boolean à True pour chaque critère utilisé.
        if (!empty ($_POST['difficulty'])) // si une region à été choisie
        {
            $where[] = ' MDI_Nom = ' . ':difficulty';
            $haveDifficulty = true;
        }
        if (!empty ($_POST['source'])) // si une region à été choisie
        {
            $where[] = ' MO_Nom = ' . ':source';
            $haveSource = true;
        }
        if (!empty ($_POST['extension'])) // si une region à été choisie
        {
            $where[] = ' ME_Nom = ' . ':extension';
            $haveExtension = true;
        }
        if (!empty ($_POST['faction'])) // si une region à été choisie
        {
            $where[] = ' MFA_Nom = ' . ':faction';
            $haveFaction = true;
        }
        if (!empty ($_POST['type'])) // si une region à été choisie
        {
            $where[] = ' MTY_Nom = ' . ':type';
            $haveType = true;
        }




        if (isset ($where)) {
            $sqlQuery .= " WHERE " . implode(' AND ', $where);
        }



        // Godefroy
        // Step 3
        // Les IFs sont basiques, on peut les mettre chacun sur une ligne 
        // pour que ça soit plus facile à comprendre/lire
        $sth = $dbco->prepare($sqlQuery);
        if ($haveFaction) {
            $sth->bindParam(':faction', $faction, PDO::PARAM_STR);
        }
        if ($haveExtension) {
            $sth->bindParam(':extension', $extension, PDO::PARAM_STR);
        }
        if ($haveSource) {
            $sth->bindParam(':source', $source, PDO::PARAM_STR);
        }
        if ($haveDifficulty) {
            $sth->bindParam(':difficulty', $difficulty, PDO::PARAM_STR);
        }
        if ($haveType) {
            $sth->bindParam(':type', $type, PDO::PARAM_STR);
        }

        $sth->execute();

        //On affiche les infos de la table
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        $keys = array_keys($resultat);
        // for ($i = 0; $i < count($resultat); $i++) {
    


        foreach ($resultat as $resultats) {
            $i++;
            ?>
            <div class="actu">
                <article class="article">
                    <div class="articleMount">
                        <div class="textMount">
                            <h3>
                                <?php echo $resultats['M_Nom'] ?>
                            </h3>

                            <div class="criteriaMount">


                                <div class="difficulty">

                                    <img src="./Assets/mounts/picto/star.png" class="picto">

                                    <?php if (!empty ($_POST['difficulty'])) {
                                        if ($difficulty === "Facile") {
                                            echo '<style> .difficulty {color:green;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }

                                        if ($difficulty === "Moyen") {
                                            echo '<style> .difficulty {color:brown;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }

                                        if ($difficulty === "Difficile") {
                                            echo '<style> .difficulty {color:brown;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }
                                        if ($difficulty === "Argent réel") {
                                            echo '<style> .difficulty {color:green;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }
                                    } else {
                                        echo $resultats['MDI_Nom'];
                                    } ?>

                                </div>


                                <div class="mountDetail">
                                    <?php echo $resultats['MO_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['ME_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['MFA_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['MTY_Nom'] ?>
                                </div>

                            </div>
                            <button class="read" type="button">Ajouter à mon inventaire</button>


                        </div>
                        <img src="<?php echo $resultats['chemin_image'] ?>" class="photoMount" />
                    </div>
                </article>
            </div>
            </section>







            <?php
        }

        echo "<p class=count> Résultats : $i</p>";
    }



    ?>

</body>

</html>
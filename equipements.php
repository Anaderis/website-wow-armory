<?php
session_start();

if (isset ($_SESSION["Loggedin"])) {
    $userpseudo = $_SESSION['Loggedin'];
} else {
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

</head>

<body>

    <div class="imgHeaderEquipment">
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




            <form action="equipements.php" method="post" class="formMount">


                <!-- /*------------------------ FILTRES MONTURES-------------------*/ -->

                <!-- Type -->

                <div class="filter">

                    <label for="type">Type : </label>
                    <select name="type">
                        <option value="">Type</option>
                        <option value="Cuir">Cuir</option>
                        <option value="Tissu">Tissu</option>
                        <option value="Plaque">Plaque</option>
                        <option value="Mailles">Mailles</option>
                        <option value="Arme">Arme</option>
                    </select>

                    <label for="emplacement">Emplacement : </label>
                    <select name="emplacement">
                        <option value="">Emplacement</option>
                        <option value="Mains">Mains</option>
                        <option value="Tenu">Tenu</option>
                        <option value="Torse">Torse</option>
                        <option value="Pieds">Pieds</option>
                        <option value="Tête">Tête</option>
                        <option value="Jambes">Jambes</option>
                        <option value="Epaules">Epaules</option>
                        <option value="Taille">Taille</option>
                        <option value="Poignets">Poignets</option>
                    </select>
                </div>

                <div class="filter2">
                    <label for="region">Région : </label>
                    <select name="region">
                        <option value="">Région</option>
                        <option value="Aberrus">Aberrus</option>
                        <option value="Amirdrassil Espoir du Rêve">Amirdrassil Espoir du Rêve</option>
                        <option value="Amirdrassil, le Rêve Emeraude">Amirdrassil, le Rêve Emeraude</option>
                        <option value="Antorus le trône Ardent">Antorus le trône Ardent</option>
                        <option value="Ataldazar">Ataldazar</option>
                        <option value="Aube infini">Aube infini</option>
                        <option value="Azshara">Azshara</option>
                        <option value="Bassin Arathi">Bassin Arathi</option>
                        <option value="Bastion du crépuscule">Bastion du crépuscule</option>
                        <option value="Bataille de Dazaralor">Bataille de Dazaralor</option>
                        <option value="Cap Strangleronce">Cap Strangleronce</option>
                        <option value="Caveaux Mogushan">Caveaux Mogushan</option>
                        <option value="Caverne du Sanctuaire du serpent">Caverne du Sanctuaire du serpent</option>
                        <option value="Château Nathria">Château Nathria</option>
                        <option value="Clairières de Tirisfal">Clairières de Tirisfal</option>
                        <option value="Coeur de la Peur">Coeur de la Peur</option>
                        <option value="Couronne de glace">Couronne de glace</option>
                        <option value="Dalaran">Dalaran</option>
                        <option value="Dawn of the Infinite">Dawn of the Infinite</option>
                        <option value="Desolace">Desolace</option>
                        <option value="Désolation des dragons">Désolation des dragons</option>
                        <option value="Dun Morogh">Dun Morogh</option>
                        <option value="Fer-de-Lance">Fer-de-Lance</option>
                        <option value="Féralas">Féralas</option>

                    </select>

                    <label for="source">Moyen d'obtention : </label>
                    <select name="source">
                        <option value="">Moyen d'obtention</option>
                        <option value="Anniversaire de WoW">Anniversaire de WoW</option>
                        <option value="Métiers">Métiers</option>
                        <option value="Boutique">Boutique</option>
                        <option value="Butin">Butin</option>
                        <option value="Cartes à collectionner">Cartes à collectionner</option>
                        <option value="Comptoir">Comptoir</option>
                        <option value="Congrégation">Congrégation</option>
                        <option value="Evenèments mondiaux">Evenèments mondiaux</option>
                        <option value="Divers">Divers</option>
                        <option value="Exploration des îles">Exploration des îles</option>
                        <option value="Hauts-faits">Hauts-faits</option>
                        <option value="Non implémenté">Non implémenté</option>
                        <option value="Promotion Blizzard">Promotion Blizzard</option>
                        <option value="PvP côté">PvP côté</option>
                        <option value="Quête">Quête</option>
                        <option value="Retiré">Retiré</option>
                        <option value="Secret">Secret</option>
                        <option value="Vendeur">Vendeur</option>
                    </select>



                </div>
                <div class="searchEquipment">
                    <input type="submit" value="Rechercher" name="submit">
                </div>


    </div>




    </form>


    </header>

    </div>


    <!-- /*----------------------------Connexion BDD------------------------*/ -->




    <?php

    if (isset ($_POST["submit"])) {




        // Godefroy
        // Step 1
        // Pour chaque paramètre, on peut créé un boolean correspondant
        $type = $_POST["type"];
        $haveType = false;
        $emplacement = $_POST["emplacement"];
        $haveEmplacement = false;
        $region = $_POST["region"];
        $haveRegion = false;
        $source = $_POST["source"];
        $haveSource = false;
        $i = 0;


        $sqlQuery = 'SELECT * FROM t_equipement 
            INNER JOIN t_moyen_obtention_mo on t_moyen_obtention_mo.MO_Id=t_equipement.MO_id 
            INNER JOIN t_e_region_er_ on t_e_region_er_.ER_Id=t_equipement.ER_Id 
            INNER JOIN t_e_emplacement_ee on t_e_emplacement_ee.EE_Id=t_equipement.EE_Id 
            INNER JOIN t_e_type_ety on t_e_type_ety.ETY_Id=t_equipement.ETY_Id';


        // Godefroy
        // Step 2
        // On passe le boolean à True pour chaque critère utilisé.
        if (!empty ($_POST['region'])) // si une region à été choisie
        {
            $where[] = ' ER_Nom = ' . ':region';
            $haveRegion = true;
        }
        if (!empty ($_POST['source'])) // si une region à été choisie
        {
            $where[] = ' MO_Nom = ' . ':source';
            $haveSource = true;
        }
        if (!empty ($_POST['emplacement'])) // si une region à été choisie
        {
            $where[] = ' EE_Nom = ' . ':emplacement';
            $haveEmplacement = true;
        }
        if (!empty ($_POST['type'])) // si une region à été choisie
        {
            $where[] = ' ETY_Nom = ' . ':type';
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
        if ($haveRegion) {
            $sth->bindParam(':region', $region, PDO::PARAM_STR);
        }
        if ($haveEmplacement) {
            $sth->bindParam(':emplacement', $emplacement, PDO::PARAM_STR);
        }
        if ($haveSource) {
            $sth->bindParam(':source', $source, PDO::PARAM_STR);
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
                                <?php echo $resultats['E_Nom'] ?>
                            </h3>

                            <div class="criteriaMount">


                                <div class="mountDetail">
                                    <?php echo $resultats['ETY_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['EE_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['ER_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['MO_Nom'] ?>
                                </div>


                            </div>
                            <button class="read" type="button">Ajouter à mon inventaire</button>


                        </div>

                        <img src="<?php echo $resultats['E_Chemin_Image'] ?>" class="photoMount"
                            alt="Assets/mounts/default.jpg" />

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
<!DOCTYPE html>
<html>

<head>

    <link rel="icon" type="image/x-icon" href="./Assets/icon.png" />
    <meta charset="utf-8" />
    <title>WoW Collection</title>

    <link rel="stylesheet" href="./css/style-mount.css" />

    <!-- Footer -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />

    <!-- Police -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet" />
</head>

<body>

    <!-- <div>
        <img src="./Assets/header-mounts.jpg" class="headerMount">
    </div> -->

    <header>

        <nav id="menus">
            <ul>
                <li>
                    <a href="./wow-armory.html">
                        <img src="./Assets/logo.png" alt="World of warcraft" class="logo" /></a>
                </li>
                <li><a href="./montures.html">Mounts </a></li>
                <li><a href="./equipements.html">Equipments</a></li>
                <li><a href="./map.html">Map</a></li>
                <li><a href="./MonCompte.html">My account</a></li>
                <li>
                    <input type="text" name="text" class="search" placeholder="Recherche" />
                </li>
                <li>
                    <input type="submit" name="submit" class="submit" value="Search" />
                </li>
                <li>
                    <a href="./login.html"><button class="login" type="button">Login</button></a>
                </li>
            </ul>
        </nav>





        <form action="bdd-mount.php" method="post" class="formMount">

            <!-- /*------------------------ FILTRES MONTURES-------------------*/ -->

            <!-- Difficulté -->
            <div class="filter">
                <label for="difficulty">Difficulty : </label>
                <select name="difficulty">
                    <option value="">Difficulty</option>
                    <option value="Facile">Easy</option>
                    <option value="Moyen">Medium</option>
                    <option value="Difficile">Difficult</option>
                </select>
            </div>

            <div class="filter">
                <label for="source">Source : </label>
                <select name="source">
                    <option value="">Source</option>
                    <option value="Anniversaire de WoW">WoW Anniversary</option>
                    <option value="Métiers">Crafting</option>
                    <option value="Boutique">Shop</option>
                    <option value="Butin">Loot</option>
                    <option value="Cartes à collectionner">Cards collection</option>
                    <option value="Comptoir">Counter</option>
                    <option value="Evenèments mondiaux">Worldwide events</option>
                    <option value="Divers">Others</option>
                    <option value="Exploration des îles">Islands exploration</option>
                    <option value="Hauts-faits">Achievments</option>
                    <option value="Non implémenté">Not implemented</option>
                    <option value="Promotion Blizzard">Blizzard promotion</option>
                    <option value="PvP côté">PvP</option>
                    <option value="Quête">Quests</option>
                    <option value="Retiré">Not available</option>
                    <option value="Secret">Secrets</option>
                    <option value="Vendeur">Seller</option>

                </select>
            </div>

            <div class="filter">
                <label for="extension">Extensions : </label>
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
            </div>

            <div class="filter">
                <label for="faction">Faction : </label>
                <select name="faction">
                    <option value="">Faction</option>
                    <option value="Alliance">Alliance</option>
                    <option value="Horde">Horde</option>
                    <option value="Neutre">Neutre</option>
                </select>
            </div>

            <div>
                <input type="submit" value="Search" name="submit">
            </div>



            <!-- // header("Location:list-mount.php"); -->





        </form>

    </header>



    <!-- /*----------------------------Connexion BDD------------------------*/ -->




    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $difficulty = $_POST["difficulty"];
    $source = $_POST["source"];
    $extension = $_POST["extension"];
    $faction = $_POST["faction"];



    //On essaie de se connecter
    try {
        $conn = new PDO("mysql:host=$servername;dbname=wow armory", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $dbco = $conn;


        //On récupère les infos de la table 
    
        if (isset($_POST["submit"])) {
            $sqlQuery = 'SELECT * FROM t_monture LEFT JOIN tj_m_appartient_fa_mafa on tj_m_appartient_fa_mafa.M_Id=t_monture.M_Id 
                                                     LEFT JOIN t_m_faction_mfa on t_m_faction_mfa.MFA_Id=tj_m_appartient_fa_mafa.MFA_Id 
                                                     LEFT JOIN t_m_difficulte_mdi on t_m_difficulte_mdi.MDI_Id=t_monture.MDI_Id 
                                                     LEFT JOIN t_moyen_obtention_mo on t_moyen_obtention_mo.MO_Id=t_monture.MO_Id 
                                                     LEFT JOIN t_m_extensions_me on t_m_extensions_me.ME_Id=t_monture.ME_Id 
                                                     WHERE MFA_Nom = :faction
                                                     OR ME_Nom = :extension OR MO_Nom = :source OR MDI_Nom = :difficulty';
            $sth = $dbco->prepare($sqlQuery);
            $sth->bindParam(':faction', $faction, PDO::PARAM_STR);
            $sth->bindParam(':extension', $extension, PDO::PARAM_STR);
            $sth->bindParam(':source', $source, PDO::PARAM_STR);
            $sth->bindParam(':difficulty', $difficulty, PDO::PARAM_STR);
            $sth->execute();

            //On affiche les infos de la table
            $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
            $keys = array_keys($resultat);
            // for ($i = 0; $i < count($resultat); $i++) {
    

            foreach ($resultat as $resultats) {
                ?>
                <section>
                    <div class="actu">
                        <article class="article">
                            <div class="articleMount">
                                <div class="textMount">
                                    <h3>
                                        <?php echo $resultats['M_Nom'] ?>
                                    </h3>
                                    <p>
                                        <?php echo $resultats['MO_Nom'] ?>
                                        <?php echo $resultats['MDI_Nom'] ?>
                                        <?php echo $resultats['ME_Nom'] ?>
                                        <?php echo $resultats['MFA_Nom'] ?>

                                    </p>
                                    <button class="read" type="button">Lire la suite</button>
                                </div>

                                <img src="<?php echo $resultats['chemin_image'] ?>" class="photoMount" />
                            </div>
                    </div>
                    </article>
                    </div>
                </section>

                <?php
            }
        }
    }

    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/ catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    /* On ferme la connexion */
    $conn = null;

    ?>

</body>

</html>










</body>

</html>
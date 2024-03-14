<!DOCTYPE html>

<html lang="fr">

<head>
    <link rel="icon" type="image/x-icon" href="./Assets/icon.png" />
    <meta charset="utf-8" />
    <title>WoW Collection</title>

    <link rel="stylesheet" href="./css/style.css" />
    <script src="script.js"></script>

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
    <header>
        <nav id="menus">
            <ul>
                <li>
                    <a href="./wow-armory.html">
                        <img src="./Assets/logo.png" alt="World of warcraft" class="logo" /></a>
                </li>
                <li><a href="./bdd-mount.php">Montures </a></li>
                <li><a href="./equipements.php">Equipements</a></li>
                <li><a href="./MonCompte.html">Mon compte</a></li>


                <li>
                    <a href="./login.php"><button class="login" type="button">Login</button></a>
                </li>
            </ul>
        </nav>

        <div class="imgHeader"></div>
    </header>

    <section>
        <div class="actu">
            <article>
                <div class="article1">
                    <div class="articleText">
                        <h3>
                            Découvrez le comptoir !
                        </h3>
                        <p>
                            Le comptoir est une nouvelle fonctionnalité du patch 10.0.5 de Dragonglight. En réalisant
                            des activités mensuelles dans le jeu, il est possible de récupérer des deniers, qui peuvent
                            être utilisés pour obtenir des récompenses cosmétiques du comptoir.
                        </p>
                        <button class="read" type="button">Lire la suite</button>
                    </div>

                    <img src="./Assets/article1.jpg" alt="Invincible" class="invincible" />
                </div>

                <div class="article1">
                    <div class="articleText">
                        <h3>Une nouvelle monture au Rêve d'émeraude</h3>
                        <p>
                            La monture Rênes du cerf onirique ravivé est vendue auprès du PnJ Talisa Murmurante (49.80,
                            62.20) au Campement central du Rêve d'émeraude. Cette monture peut être échangée contre 1
                            Fleur de graine. [...]
                        </p>
                        <button class="read" type="button">Lire la suite</button>
                    </div>

                    <img src="./Assets/article2.jpg" alt="Invincible" class="invincible" />
                </div>

                <div class="article1">
                    <div class="articleText">
                        <h3>Changements à venir pour les donjons de la saison 4 de Dragonflight</h3>
                        <p>
                            La saison 4 de Dragonflight apporte toute une gamme de changements, notamment des
                            ajustements concernant les donjons, leur progression et leurs récompenses (et de nouvelles
                            montures !)
                        </p>
                        <button class="read" type="button">Lire la suite</button>
                    </div>

                    <img src="./Assets/article3.jpg" alt="Invincible" class="invincible" />
                </div>
            </article>

            <aside>
                <div class="aside1">
                    <h3>L'équipement du jour</h3>
                    <p>
                        Fyralath le Pourfendeur de rêve, un légendaire pas si facile à obtenir ! Rendez-vous à
                        Amirdrassil, l'Espoir du Rêve
                    </p>
                    <img src="./Assets/equipement1.jpg" alt="Equipement" class="nain" />
                    <button class="button-aside" type="button">Découvrir</button>
                </div>
                <div class="aside1">
                    <h3>L'équipement du jour</h3>
                    <p>
                        Aujourd'hui, découvrez le casque de nain à obtenir dans les
                        cavernes des lamentations
                    </p>
                    <img src="./Assets/casque-nain.jpg" alt="casque nain" class="nain" />
                    <button class="button-aside" type="button">Découvrir</button>
                </div>
            </aside>
        </div>
    </section>

    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                        class="icon ion-social-snapchat"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Page d'accueil</a></li>
                <li class="list-inline-item"><a href="#">L'équipe WoW Armory</a></li>
                <li class="list-inline-item"><a href="#">Paramètres et politique de cookies</a></li>
                <li class="list-inline-item"><a href="#">Mentions légales</a></li>
                <li class="list-inline-item"><a href="#">Confidentialité en ligne</a></li>
            </ul>
            <p class="copyright">WoW Armory © 2024</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>

<html lang="fr">
  <head>
    <link rel="icon" type="image/x-icon" href="./Assets/icon.png" />
    <meta charset="utf-8" />
    <title>WoW Collection</title>

    <link rel="stylesheet" href="./css/style.css" />
    <script src="script.js"></script>

    <!-- Footer -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />

    <!-- Police -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
      <nav id="menus">
        <ul>
          <li>
            <a href="./wow-armory.html">
              <img src="./Assets/logo.png" alt="World of warcraft" class="logo"
            /></a>
          </li>
          <li><a href="./bdd-mount.php">Montures </a></li>
          <li><a href="./equipements.html">Equipements</a></li>
          <li><a href="./map.html">Carte</a></li>
          <li><a href="./MonCompte.html">Mon compte</a></li>
          <li>
            <input
              type="text"
              name="text"
              class="search"
              placeholder="Recherche"
            />
          </li>
          <li>
            <input type="submit" name="submit" class="submit" value="Search" />
          </li>
          <li>
            <a href="./login.php"
              ><button class="login" type="button">Login</button></a
            >
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
                Invincible, la monture la plus détestée du jeu est de retour
              </h3>
              <p>
                Voilà maintenant plus de 10 ans que l'extension Wrath of the
                Lich king. Cette monture est l'une des plus rares du jeu et est
                recherché par bon nombre de joueurs, particulièrement les
                chevaliers de la mort qui veulent faire les kikoo dk arthasounet
                menethil
              </p>
              <button class="read" type="button">Lire la suite</button>
            </div>

            <img
              src="./Assets/mounts/1.jpg"
              alt="Invincible"
              class="invincible"
            />
          </div>

          <div class="article1">
            <div class="articleText">
              <h3>Une chasse au trésor en Azeroth dès lundi !</h3>
              <p>
                Partez à la découverte des secrets du monde et récupérez la
                monture [...]
              </p>
              <button class="read" type="button">Lire la suite</button>
            </div>

            <img
              src="./Assets/invincible.jpg"
              alt="Invincible"
              class="invincible"
            />
          </div>

          <div class="article1">
            <div class="articleText">
              <h3>Le raid d'Amirdrassil révèle bien des surprises</h3>
              <p>
                Avec la sortie imminente du patch 5.0, le raid d'Amirdrassil
                offre son lot d'équipements légendaires et de montures [...]
              </p>
              <button class="read" type="button">Lire la suite</button>
            </div>

            <img
              src="./Assets/invincible.jpg"
              alt="Invincible"
              class="invincible"
            />
          </div>
        </article>

        <aside>
          <div class="aside1">
            <h3>L'équipement du jour</h3>
            <p>
              Aujourd'hui, découvrez le casque de nain à obtenir dans les
              cavernes des lamentations
            </p>
            <img
              src="./Assets/casque-nain.jpg"
              alt="casque nain"
              class="nain"
            />
            <button class="button-aside" type="button">Découvrir</button>
          </div>
          <div class="aside1">
            <h3>L'équipement du jour</h3>
            <p>
              Aujourd'hui, découvrez le casque de nain à obtenir dans les
              cavernes des lamentations
            </p>
            <img
              src="./Assets/casque-nain.jpg"
              alt="casque nain"
              class="nain"
            />
            <button class="button-aside" type="button">Découvrir</button>
          </div>
        </aside>
      </div>
    </section>

    <div class="footer-basic">
      <footer>
        <div class="social">
          <a href="#"><i class="icon ion-social-instagram"></i></a
          ><a href="#"><i class="icon ion-social-snapchat"></i></a
          ><a href="#"><i class="icon ion-social-twitter"></i></a
          ><a href="#"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2018</p>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

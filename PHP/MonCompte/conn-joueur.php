<?php

require_once "./php/Login/DB_Conn.php";

$joueur = $_SESSION["Id"];

$sqlQuery = "SELECT * FROM t_joueur";


$resultat = mysqli_query($conn, $sqlQuery);

foreach ($resultat as $resultats) {
    ?>
    <!-- <div class="actu">
        <article class="article">
            <div class="articleMount">
                <div class="textMount"> -->
    <div>
        <h5>
            <?php echo $resultats['J_ADR'] ?>
            <?php echo $resultats['J_MDP'] ?>
            <?php echo $resultats['J_User'] ?>
        </h5>
    </div>
    <!-- </div>
            </div>
    </div>
    </article> -->

    <?php
}
?>
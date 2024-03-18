<?php

require_once "./php/Login/DB_Conn.php";

$joueur=$_SESSION["Id"];

$sqlQuery = "SELECT * FROM t_equipement
             
            INNER JOIN tj_e_possede_pse on tj_e_possede_pse.E_Id=t_equipement.E_Id
            INNER JOIN t_joueur on t_joueur.J_Id=tj_e_possede_pse.J_Id
            where tj_e_possede_pse.J_Id = " . $joueur."";


$resultat = mysqli_query($conn, $sqlQuery);

foreach ($resultat as $resultats) {
                ?>
                <div class="actu">
                    <article class="article">
                        <div class="articleMount">
                            <div class="textMount">
                                <h5>
                                    <?php echo $resultats['E_Nom'] ?>
                                </h5>
                            </div>
                        </div>
                </div>
                </article>

                <?php
            }
?>
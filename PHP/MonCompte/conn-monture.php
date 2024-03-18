<?php

require_once "./php/Login/DB_Conn.php";

$joueur=$_SESSION["Id"];

$sqlQuery = "SELECT * FROM t_monture
            INNER JOIN tj_m_possede_psm on tj_m_possede_psm.M_Id=t_monture.M_Id
            INNER JOIN t_joueur on t_joueur.J_Id=tj_m_possede_psm.J_Id
            where tj_m_possede_psm.J_Id = " . $joueur."";


$resultat = mysqli_query($conn, $sqlQuery);

foreach ($resultat as $resultats) {
                ?>
                <div class="actu">
                    <article class="article">
                        <div class="articleMount">
                            <div class="textMount">
                                <h5>
                                    <?php echo $resultats['M_Nom'] ?>
                                </h5>
                            </div>
                        </div>
                </div>
                </article>

                <?php
            }
?>
<?php 
//session_start();
include_once('../Controller/afficheEspagnol.php');
?>

<!DOCTYPE html>
<html lang="es-ES">

    <head>
        <meta charset="UTF-8">
        <title>Supporters Solidaires</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
        
    <body>
    <header>
            <figure id="imgLogo">
                <img src="../img/Pab.png" alt="none" id="img2">
            </figure>
            <h1>Supporters Solidaires</h1>
            
            <nav>
                <div class="icons">
                    <i class="fa-solid fa-burger"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <ul>
                    <li><a href="homeEspagnol.php">Home</a></li>
                    <?php if (isset($_SESSION['mail']) && $_SESSION['mail']=='maelle@mail.fr'){?>
                    <li><a href="participe.php">Liste des participants</a></li>
                    <li><a href="resultatVote.php">Résultats des votes</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php } elseif (isset($_SESSION['mail'])){?>
                    <li><a href="concoursEspagnol.php">Concurso</a></li>
                    <li><a href="electionsEspagnol.php">Eleciones</a></li>
                    <li><a href="monCompteEspagnol.php">Mi cuenta</a></li>
                    <li><a href="../Controller/deconnexionEspagnol.php">Cerrar sesión</a></li>

                    <?php }else {?>
                    <li><a href="jeuEspagnol.php">Juego</a></li>
                    <li><a href="voteEspagnol.php">Voto</a></li>
                    <li><a href="identificationEspagnol.php">Iniciar sesión</a></li>
                    <?php }?>

                    <li><a href="home.php"><img src="../images/drapeauFrancais.png" style="width:30px" /></a></li>
                    <li><a href="homeAnglais.php"><img src="../images/drapeauAnglais.png" style="width:30px" /></a></li>
                    <li><a href="homeEspagnol.php"><img src="../images/drapeauEspagnol.jpeg" style="width:30px" /></a></li>
                </ul>
            </nav>
        </header>

        <section>
            <h2> Vota por el mejor jugador y el mejor portero de 
            <?php $idM = $_SESSION['idM'];

            for($i=0; $i<count($affiche); $i++) {
                if ($affiche[$i]->ID_M == $idM){
                    echo $affiche[$i]->NOM_E . "  ";
                }
            }
            ?>
            <a href="electionsEspagnol.php"><input type="button" value="Devolver"></a>
            </h2>

            <div class="global">
                <div class="groupe">
                    <h2>Lista de jugadores</h2>
                    <form action="../Controller/afficheEspagnol.php" method="POST" id="form">
                    <?php 
                    $idJ = $_SESSION['idJ'];
                    for ($i=0; $i<count($idJ); $i++) { ?>
                        <li>
                            <?php $idJoueur = $idJ[$i]->ID_J?>
                            <?php $_SESSION['idJoueur'] = $idJoueur?>
                            <input type="radio" id="joueur1" name="joueur"/>
                            <label for="joueur">
                                <?php $nom = $idJ[$i]->NOM_J; $prenom = $idJ[$i]->PRENOM_J;
                                echo $nom . " " .$prenom ;?>
                            </label>
                        </li>
                    <?php }?>                        
                </div>

                <div class="groupe">
                    <h2>Lista de porteros</h2>
                    <?php 
                    $idG = $_SESSION['idG'];
                    for ($i=0; $i<count($idG); $i++) { ?>
                        <li>
                            <?php $idGardien = $idG[$i]->ID_J?>
                            <?php $_SESSION['idGardien'] = $idGardien?>
                            <input type="radio" id="gardien1" name="gardien"/>
                            <label for="gardien">
                                <?php $nom = $idG[$i]->NOM_J; $prenom = $idG[$i]->PRENOM_J;
                                echo $nom . " " .$prenom ;?>
                            </label>
                        </li>
                    <?php }?>

                    <input type="submit" name="vote" value="Voto" onclick="checkPassVoteEspagnol()"/>

                    </form>
                </div>  
            </div>

        </section>

        <footer>
        <p>2022 &copy; Supporters Solidaires - Todos los derechos reservados  - <a href="mailto:t.akpweh@gmail.com" target="_self">Contáctenos</a></p>
        </footer>

        <script src="../js/script.js"></script>
        <script src="../js/burger.js"></script>
    </body>
</html>

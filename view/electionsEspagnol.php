<?php 
include_once ('../Controller/afficheEspagnol.php');
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

                    <li><a href="home.php"><img src="../img/drapeauFrancais.png" style="width:30px" /></a></li>
                    <li><a href="homeAnglais.php"><img src="../img/drapeauAnglais.png" style="width:30px" /></a></li>
                    <li><a href="homeEspagnol.php"><img src="../img/drapeauEspagnol.jpeg" style="width:30px" /></a></li>
                </ul>
            </nav>
        </header>
        
        <h2>Élire le meilleur joueur et le meilleur gardien</h2>

        <section id="concours">
                <form action="../Controller/afficheEspagnol.php" method="POST" id="participe">
                        <table>                                
                            <?php for($i=0; $i<count($affiche)-1; $i++) : ?>
                            <?php if ($affiche[$i]->DATE_M == $affiche[$i+1]->DATE_M){ ?>
                            <tr>
                                <td><?php $date = $affiche[$i]->DATE_M;?>
                                    <?php echo $date;?>
                                </td>
                                <td>
                                    <?php $heure = $affiche[$i]->HEURE_M;?>
                                    <?php echo $heure; ?>
                                </td>
                                <td>
                                    <?php if ($affiche[$i]->DATE_M == $affiche[$i+1]->DATE_M){
                                    echo $affiche[$i]->NOM_E . " / " . $affiche[$i+1]->NOM_E;
                                    }?>
                                </td>
                                <td><?php $idM = $affiche[$i]->ID_M_Rencontre?>
                                    <input type="submit" name="elir[<?php echo $idM ?>]" value="Voto">
                                </td>  
                                <?php } ?>                                                      
                            </tr>
                            <?php endfor; ?>
                        </table>
                </form>
        </section>

        <footer>
        <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com"
                target="_self">Nous contacter</a> - <a href="ml.php" target="blank"> 
            Mentions Légales</a>
                </p>
    </footer>
    <div id="cookiePopup" class="hide">
        <!-- <img src="cookies.jpg"/> -->
        <h2>Supporters Solidaires respecte votre vie privée</h2>
        <p>
            Nous utilisons des cookies ou technologie différentes pour stocker et accéder à des données personnelles
            vous concernant comme celle liées à votre visite sur ce site. Vous pouvez retirer votre consentement ou vous
            opposer aux traitements basés sur l'intérêt légitime à tout moment en cliquant sur "Paramétrer" ou dans
            notre page "Données personnelles"
        </p>
        <br>
        <a href="ml.php" target="blank">Mentions légales</a>

        <br>

        <p>
            Nous traitons les données suivantes : <br> Données de géolocalisation précises et identification par analyse
            du terminal, publicités et contenu personnalisés.

        </p>
        <div id="buttons">
            <button id="acceptCookie">Accepter & fermer</button>
            <button id="paramCookie">Paramétrer les cookies</button>
        </div>
    </div>
    <script src="../js/burger.js"></script>
    <script src="../js/cookies.js"></script>
</body>
</html>

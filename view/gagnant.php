
<?php 
session_start();
include_once('../Controller/affiche.php');


if (isset($_POST['gagnant'])){
    foreach ($_POST['gagnant'] as $key => $value){
        $idM = "{$key}";
        $sql = "SELECT NOM_U, PRENOM_U FROM participe INNER JOIN User ON participe.ID_U = User.ID_U WHERE participe.ID_M = '$idM' ORDER BY RAND() LIMIT 2";
        $prepare = $dbh->prepare($sql);
        $prepare->execute();
        $gagnants = $prepare->fetchAll(PDO::FETCH_CLASS);
    }
}
?>

<!DOCTYPE html>
<html lang="fr-FR">

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
                    <li><a href="home.php">Accueil</a></li>
                    <?php if (isset($_SESSION['mail']) && $_SESSION['mail']=='maelle@mail.fr'){?>
                    <li><a href="participe.php">Liste des participants</a></li>
                    <li><a href="resultatVote.php">Résultats des votes</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php } elseif (isset($_SESSION['mail'])){?>
                    <li><a href="concours.php">Concours</a></li>
                    <li><a href="elections.php">Élections</a></li>
                    <li><a href="monCompte.php">Mon compte</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php }else {?>
                    <li><a href="jeu.php">Jeu</a></li>
                    <li><a href="vote.php">Vote</a></li>
                    <li><a href="identification.php">S'identifier</a></li>
                    <?php }?>

                    <li><a href="home.php"><img src="../images/drapeauFrancais.png" style="width:30px" /></a></li>
                    <li><a href="homeAnglais.php"><img src="../images/drapeauAnglais.png" style="width:30px" /></a></li>
                    <li><a href="homeEspagnol.php"><img src="../images/drapeauEspagnol.jpeg" style="width:30px" /></a></li>
                </ul>
            </nav>
        </header>

        <section>
            <p class="bordure">
            <?php 
                for ($i=0;$i<count($gagnants) ;$i++){
                    $nomG = $gagnants[$i]->NOM_U;
                    $prenomG = $gagnants[$i]->PRENOM_U;
                    echo $nomG . " " . $prenomG . "<br><br>";
                }
            ?>
            </p>
        </section>

        <footer>
            <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com" target="_self">Nous contacter</a></p>
        </footer>
        <script src="../js/burger.js"></script>
    </body>
</html>

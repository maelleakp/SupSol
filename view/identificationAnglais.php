<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en-EN">

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
                    <li><a href="homeAnglais.php">Home</a></li>
                    <?php if (isset($_SESSION['mail']) && $_SESSION['mail']=='maelle@mail.fr'){?>
                    <li><a href="participe.php">Liste des participants</a></li>
                    <li><a href="resultatVote.php">Résultats des votes</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php } elseif (isset($_SESSION['mail'])){?>
                    <li><a href="concoursAnglais.php">Competition</a></li>
                    <li><a href="electionsAnglais.php">Elections</a></li>
                    <li><a href="monCompteAnglais.php">My account</a></li>
                    <li><a href="../Controller/deconnexionAnglais.php">Log out</a></li>

                    <?php }else {?>
                    <li><a href="jeuAnglais.php">Game</a></li>
                    <li><a href="voteAnglais.php">Vote</a></li>
                    <li><a href="identificationAnglais.php">Log in</a></li>
                    <?php }?>

                    <li><a href="home.php"><img src="../img/drapeauFrancais.png" style="width:30px" /></a></li>
                    <li><a href="homeAnglais.php"><img src="../img/drapeauAnglais.png" style="width:30px" /></a></li>
                    <li><a href="homeEspagnol.php"><img src="../img/drapeauEspagnol.jpeg" style="width:30px" /></a></li>
                </ul>
            </nav>
        </header>

        <section id="global">
            <fieldset id="groupe">
                <legend>REGISTRATION</legend>
                    <form action="../Controller/controllerAnglais.php" method="POST" id="myForm">
                        <p>
                            <label for="nom">Your name :</label>
                            <input type="text" id="nom" name="nom" size="30" placeholder="Write here" required>
                            <span id="errorName"></span>
                        </p>
    
                        <p>
                            <label for="prenom">Your first name :</label>
                            <input type="text" id="prenom" name="prenom" size="30" required autofocus>
                            <span id="errorPrenom"></span>
                        </p>

                        <p>
                            <label for="email">Your email :</label>
                            <input type="email" id="mail" name="mail" required>
                            <span id="errorMail"></span>
                        </p>

                        <p>
                            <label for="tel">Votre numéro de téléphone avec indicatif :</label>
                            <input type="tel" id="tel" name="tel" placeholder="Exemple +44 6 XX XX XX XX pour la France" size="15" required>
                        </p>
    
                        <p>
                            <label for="password">Your password :</label>
                            <input type="password" id="password" name="password" size="30">
                            <span id="errorPassword"></span>
                        </p>

                        <p>
                            <label for="confmdp">Password confirmation :</label>
                            <input type="password" id="password2" name="password2" size="30" onkeyup="checkPass(); return false">
                            <span id="errorPassword2"></span>
                        </p>
    
                        <p>
                            <input type="submit" name="submit" value="Register">
                        </p>
    
                    </form>
            </fieldset>

            <fieldset id="groupe">
                <legend>CONNECTION</legend>
                    <form action="../Controller/controllerAnglais.php" method="POST" id="Form">
                        <p>
                            <label for="email">Your mail :</label>
                            <input type="email" id="mail2" name="mail" size="30" required>
                            <span id="errorMail2"></span>
                        </p>
    
                        <p>
                            <label for="mdp">Your password :</label>
                            <input type="password" id="password3" name="password" size="30">
                            <span id="errorPassword3"></span>
                        </p>
    
                        <p>
                            <input type="submit" name="submit2" value="To log in">
                        </p>
    
                    </form>
            </fieldset>

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

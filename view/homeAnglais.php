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
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    

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

        <div id="bandeauVid">
        <video muted preload autoplay loop>
            <source src="../img/videocecifoot.mp4">
        </video>
    </div>

    <section id="sectionArticleHome">
        <div id="articleHome">  
            <h2>Half-time actions</h2>
            <div id="containerMain">
                <article>
                    <p>
                        Attending the blind football matches at the Paris 2024 Paralympic Games? <br>
                        What if we gave you the opportunity to win a shirt of one of the football stars playing for prestigious clubs? <br>And why not signed by those players themselves? Nice, isn't it?
                        <br>
                        <br>
                        At the same time, how about electing the best player and the best goalkeeper for each match and the competition?
                        <br>
                        <br>
                        This webpage allows you to interact with all these proposals:
                        Go to the tabs 'Elections' and 'Contest'!
                    </p>
                </article>
                <div id="imgRight"></div>
            </div>

        </div>
        <section id="imageTextDown">
            <div id="imgDown">
                <img src="../img/cecifootpetit1.jpg" alt="none">
                <img src="../img/cecifootpetit2.jpeg" alt="none">
                <img src="../img/cecifootpetit3.jpg" alt="none">
            </div>

            <div id="TextDown">
                <h2>About Supporters Solidaires</h2>
                <p>
                    The association Supporters Solidaires deploys, in France and around the world programs beneficial to blind people. Its essential goal is to change the image of invalids, incompetents, unfits that the general public has on these actors and to permanently inscribe them as bearers of aptitudes, "adaptitudes", and competencies. 
                    <br />
                    <br />
                    Football for blind people is our driving force. 
                    <br />
                    <br />
                    We create and develop: <br>
                    • performance poles (for blind young people, blind women, and athletes with high potential), <br>
                    • technical training centers (for national collectives), <br>
                    • specific training seminars for executives (coaches, referees, guides), <br>
                    • sports events (continental competitions, world competitions), <br>
                    • autonomy pilot projects (allowing blind people to move freely and without assistance in our projects spaces), <br>
                    • mobile diagnostic and prevention systems <br>
                    • ...
                    <br />
                    <br />
                    In the sports sector, it is, in France, a partner of the Disability sports French Federation (for the management of men's and women's France teams); Supporters Solidaires collaborate worldwide with the  International Blind Sports Federation (for the development of football for blind people, especially in Africa). Within the general framework of its programs, the association also collaborates with the World Blind Union (particularly in Africa). In the field of medical research, Supporters Solidaires joins forces with the Paris Institut de la Vision. In other themes (inclusion, accessibility, training, autonomy, or integration), our organization collaborates with other targeted partners, so that blind people are no longer out of the game!
                </p>
            </div> 
        </section>
    </section>
       
    <footer>
        <p>2022 &copy; Supporters Solidaires - All rights reserved - <a href="mailto:t.akpweh@gmail.com" target="_self">Contact us</a> - <a href="ml.php" target="blank"> 
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

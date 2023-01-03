<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">

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
            <h2>Les actions de la mi-temps</h2>
            <div id="containerMain">
                <article>
                    <p>
                        Présent·e aux matchs de Cécifoot aux Jeux Paralympiques de Paris 2024 ?
                        <br>
                        <br>
                        Et si l’on vous donnait la possibilité de gagner un <b>maillot</b> d’une des <b>stars du football</b> évoluant dans de grands clubs
                        prestigieux ? <br>Et pourquoi pas <b>dédicacé</b> par ces joueurs eux-mêmes ? Sympa non ?
                        <br>
                        <br>
                        En même temps, que diriez vous d’élire le meilleur joueur et le meilleur gardien de
                        chaque match et de la compétition ?
                        <br>
                        <br>
                        Cette page internet vous permet d’intéragir avec toutes ces propositions :
                        <br>
                        Rendez-vous dans les onglets <b>"Élections"</b> et <b>"Jeu concours"</b> !
                    </p>
                </article>
            </div>

        </div>
        <section id="imageTextDown">
            <div id="imgDown">
                <img src="../img/impact6.jpg" alt="none">
                <img src="../img/impact5.jpg" alt="none">
                <img src="../img/action.jpg" alt="none">
            </div> 


            <div>
                <h2>À propos de Supporters Solidaires</h2>
                <p>
                    L’association Supporters Solidaires déploie, en France et dans le monde des <b>programmes bénéfiques aux personnes aveugles.</b> Son but essentiel est de changer l’image d’invalides, d’incapables, d’inaptes que le grand-public porte sur ces acteurs et, de les inscrire durablement dans une posture de porteurs d’aptitudes, "d’adaptitudes", de compétences.
                    <br>
                    <br>
                    <b>Le football pour aveugles est notre locomotive.</b>
                    <br>
                    <br>
                    Nous créons et développons : <br>
                    • des pôles de <b>performances</b> (pour des jeunes aveugles, des femmes aveugles, des athlètes à forts potentiels), <br>
                    • des centres techniques d’<b>entraînement</b> (pour des collectifs nationaux), <br>
                    • des séminaires de <b>formation</b> spécifiques des cadres (entraineurs, arbitres, guides), <br>
                    • des <b>évènementiels</b> sportifs (compétitions continentales, mondiales), <br>
                    • des projets-pilotes d’<b>autonomie</b> (permettant à la personne aveugle de se mouvoir librement et sans assistance dans nos espaces-projets), <br>
                    • des dispositifs itinérants de <b>diagnostics</b> et de prévention, ...
                    <br>
                    <div id="imgDown">
                        <img src="../img/impact6.jpg" alt="none">
                        <img src="../img/impact5.jpg" alt="none">
                        <img src="../img/action.jpg" alt="none">
                    </div> 
                    <br>
                    Dans le secteur du sport, elle est, en France, <b>partenaire de la Fédération Française Handisport</b> (pour la gestion des équipes de France masculines et féminines).<br>
                    Supporters Solidaires collabore dans le monde avec la <b>Fédération Internationale des Sports pour Aveugles</b> (pour le développement du football pour aveugles, plus particulièrement en Afrique). Dans le cadre général de ses programmes, l’association collabore également avec l’<b>Union Mondiale des Aveugles</b> (particulièrement en Afrique). <br>
                    Dans le secteur de la recherche médicale, Supporters Solidaires s’associe à l’<b>Institut de la Vision de Paris.</b><br> Dans d’autres thèmes (inclusion, accessibilité, formation, autonomie ou insertion), notre organisation collabore avec d’autres partenaires ciblés, <b>pour que les aveugles ne soient plus hors-jeu !</b>
                </p>
            </div> 
        </section>
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

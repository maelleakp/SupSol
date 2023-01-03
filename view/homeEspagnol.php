<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="es-ES">

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

        <div id="bandeauVid">
        <video muted preload autoplay loop>
            <source src="../img/videocecifoot.mp4">
        </video>
    </div>

    <section id="sectionArticleHome">
        <div id="articleHome">
            <h2>Acción de medio tiempo</h2>
            <div id="containerMain">
                <article>
                    <p>
                        ¿Asistiendo a los partidos de fútbol para ciegos en los Juegos Paralímpicos de París 2024?
                        ¿Y si te diéramos la oportunidad de ganar una camiseta de una de las estrellas del fútbol que juegan en clubes prestigiosos? ¿Y por qué no con dedicatoria de estos propios jugadores? ¿No estaría bien?
                        <br>
                        <br>
                        Al mismo tiempo, ¿qué tal si votamos al mejor jugador y al mejor portero de cada partido y de la competición?
                        <br>
                        <br>
                        Esta página web les permite interactuar con todas estas propuestas:
                        Vaya a las pestañas "Elecciones" y "Concurso".
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
                <h2> Sobre Supporters Solidaires</h2>
                <p>
                    La asociación Supporters Solidaires despliega en Francia y en todo el mundo programas en beneficio de las personas ciegas. Su principal objetivo es cambiar la imagen de inválidos, incapacitados e ineptos que el público en general tiene de estos jugadores y convertirlos a largo plazo en portadores de aptitudes, "adaptaciones" y habilidades.
                    <br>
                    <br>
                    El fútbol para ciegos es nuestro motor.
                    <br>
                    <br>
                    Creamos y desarrollamos :
                    • centros de rendimiento (para jóvenes ciegos, mujeres ciegas, atletas de alto potencial),<br>
                    • centros de formación técnica (para equipos nacionales),<br>
                    • seminarios de formación específicos para directivos (entrenadores, árbitros, guías),<br>
                    • eventos deportivos (competiciones continentales y mundiales),<br>
                    • proyectos piloto de autonomía (que permiten a los ciegos moverse libremente y sin ayuda en las zonas de nuestros proyectos),<br>
                    • dispositivos móviles de diagnóstico y prevención<br>
                    • ...
                    <br>
                    <br>
                    En el sector deportivo, es, en Francia, socio de la Federación Francesa de Handisport (para la gestión de las selecciones francesas masculina y femenina). Supporters Solidaires colabora en todo el mundo con la Federación Internacional de Deportes para Ciegos (para el desarrollo del fútbol para ciegos, especialmente en África). En el marco general de sus programas, la asociación también colabora con la Unión Mundial de Ciegos (especialmente en África). En el ámbito de la investigación médica, Supporters Solidaires está asociada al Institut de la Vision de París. En otros ámbitos (inclusión, accesibilidad, formación, autonomía o inserción), nuestra organización colabora con otros socios específicos, ¡para que los ciegos dejen de estar excluidos!
                </p>
            </div> 
        </section>
    </section>

        <footer>
        <p>2022 &copy; Supporters Solidaires - Todos los derechos reservados  - <a href="mailto:t.akpweh@gmail.com" target="_self">Contáctenos</a> - <a href="ml.php" target="blank"> Mentions Légales</a></p>
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

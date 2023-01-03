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
        <fieldset>
                <legend>REGISTRO</legend>
                    <form action="../Controller/controllerEspagnol.php" method="POST" id="myForm">
                        <p>
                            <label for="nom">Vostre nombre :</label>
                            <input type="text" id="nom" name="nom" size="30" placeholder="Write here" required>
                            <span id="errorName"></span>
                        </p>
    
                        <p>
                            <label for="prenom">Vuestro nombre :</label>
                            <input type="text" id="prenom" name="prenom" size="30" required autofocus>
                            <span id="errorPrenom"></span>
                        </p>

                        <p>
                            <label for="email">Vostre email :</label>
                            <input type="email" id="mail" name="mail" required>
                            <span id="errorMail"></span>
                        </p>

                        <p>
                            <label for="tel">Votre numéro de téléphone :</label>
                            <input type="tel" id="tel" name="tel" size="30">
                            <span id="errorTel"></span>
                        </p>
    
                        <p>
                            <label for="password">Vostre contraseña :</label>
                            <input type="password" id="password" name="password" size="30">
                            <span id="errorPassword"></span>
                        </p>

                        <p>
                            <label for="confmdp">Confirmación de contraseña :</label>
                            <input type="password" id="password2" name="password2" size="30" onkeyup="checkPass(); return false">
                            <span id="errorPassword2"></span>
                        </p>
    
                        <p>
                            <input type="submit" name="submit" value="Inscribirse">
                            <input type="reset" value="Borrar">
                        </p>
    
                    </form>
            </fieldset>

        </section>

        <footer>
        <p>2022 &copy; Supporters Solidaires - Todos los derechos reservados  - <a href="mailto:t.akpweh@gmail.com" target="_self">Contáctenos</a></p>
        </footer>

        <script src="../js/script.js"></script>
        <script src="../js/burger.js"></script>
    </body>
</html>

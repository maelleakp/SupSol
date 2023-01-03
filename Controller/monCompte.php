<?php
session_start();
$dbh = new PDO('mysql:host=localhost:8889;dbname=bloc3', 'root', 'root');

$mail = $_SESSION['mail'];
$sql = "SELECT * FROM User WHERE User.MAIL_U = '$mail'";
$prepare = $dbh->prepare($sql);
$prepare->execute();
$donnees = $prepare->fetchAll(PDO::FETCH_CLASS);

if (isset($_POST['modifierNom'])){
    if (!empty($_POST['nom'])){
        $nouveauNom =htmlspecialchars($_POST['nom']);
        for($i=0; $i<count($donnees); $i++) {
            $idU = $donnees[$i]->ID_U;
            //var_dump($idU);
            $sql = "UPDATE User SET User.NOM_U = '$nouveauNom' WHERE User.ID_U = '$idU'";
            $dbh->query($sql);
            header('Location: ../view/monCompte.php');
        }
    }
}

if (isset($_POST['modifierPrenom'])){
    if (!empty($_POST['prenom'])){
        $nouveauPrenom =htmlspecialchars($_POST['prenom']);
        for($i=0; $i<count($donnees); $i++) {
            $idU = $donnees[$i]->ID_U;
            //var_dump($idU);
            $sql = "UPDATE User SET User.PRENOM_U = '$nouveauPrenom' WHERE User.ID_U = '$idU'";
            $dbh->query($sql);
            header('Location: ../view/monCompte.php');
        }
    }
}

if (isset($_POST['modifierTel'])){
    if (!empty($_POST['tel'])){
        $nouveauTel =htmlspecialchars($_POST['tel']);
        for($i=0; $i<count($donnees); $i++) {
            $idU = $donnees[$i]->ID_U;
            //var_dump($idU);
            $sql = "UPDATE User SET User.TEL_U = '$nouveauTel' WHERE User.ID_U = '$idU'";
            $dbh->query($sql);
            header('Location: ../view/monCompte.php');
        }
    }
}

if (isset($_POST['supprimer'])){
    for($i=0; $i<count($donnees); $i++) {
        $idU = $donnees[$i]->ID_U;
        $sql = "DELETE FROM User WHERE User.ID_U = '$idU'";
        $dbh->query($sql);
        session_destroy();
        header('Location: ../view/home.php');
    }
}
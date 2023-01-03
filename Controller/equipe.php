<?php

$equipe =htmlspecialchars($_POST['equipes']);
if (isset($_POST['submit'])){
    if (!empty($_POST['equipes'])){
        
        $dbh = new PDO('mysql:host=localhost:8889;dbname=bloc3', 'root', 'root');
        $sql = "INSERT INTO Equipe(NOM_E) VALUES ('$equipe')";
        $dbh->query($sql);

        header('Location: ../view/admin.php');
    }
    else {
        header('Location: ../view/admin.php');
        echo ("Veuillez entrer un nom d'équipe");
    }
}

?>
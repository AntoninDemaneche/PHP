<?php

//Initialisations de la base de donnée
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "spawn");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");

$objetPdo = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

//Demande de suppresion d'un élément qui à ID contenus qui est = a numdata
$pdoStat = $objetPdo->prepare('DELETE FROM lieu WHERE id=:num LIMIT 1');

$pdoStat -> bindValue(':num', $_GET['numdata'], PDO::PARAM_INT);


$executeIsOK = $pdoStat -> execute();

// Affichage d'un message expliquant si la mainoeuvre à fonctionnée
    if( $executeIsOK){
        $message = 'Le spawn été supprimé';
    }
    else{
        $message = 'Echec de la suppression du spawn';
    }
    ?>


<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
    </head>
    <body>
        <h1>Suppression </h1>
            <p> <?= $message ?> </p>
        <form method="POST" action="http://localhost/fortnite/admin.php">
            <input type="submit" name="Ok" value="Retour en arriére" >
        </form>

    </body>

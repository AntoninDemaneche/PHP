<?php

//Initialisation de BDD
    include_once 'db.php';

// Selections d'un élément de la table lieu au hasard
    $req = $db ->prepare ('SELECT * FROM lieu  ORDER BY RAND() LIMIT 1');
    $req -> execute(array ());

// Affichage de la valleur selectionner au hasard
    while($data = $req->fetch()){ ?>
           <p> Le lieu est <?=$data['nom']?> il est dirigé par la Maison <?=$data['maison']?></p>
            <img id="img" src="code/image/<?=$data['img'] ?>" alt="">
            <div id="desc">
                <p ><?=$data['description']?></p>
            </div>
    <?php } ?>


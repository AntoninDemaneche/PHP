<h1>Voici la liste des spawn possible : </h1>
    <?php
    //Initialisation de BDD
        include_once 'db.php';
// Selections de tout les éléments de la table lieu
        $req = $db ->prepare ('SELECT * FROM lieu');
        $req -> execute(array ());
// Affichage de tout les éléments de la table lieux
        while($data = $req->fetch()){?>
            <p>Nom = <?=$data['nom']?>
                <br> Maison = <?=$data['maison']?>
                <br> Image =
                <br> <img id="img" src="code/image/<?=$data['img'] ?>" alt="">
                <br>
                    <div id="desc">
                        Description =<?=$data['description']?> </p>
                    </div>
<!-- Affichage d'un lien qui redirige vers une page permettant la supression du spawn -->
            <p> Voulez vous suprimer ce spawn ? <a href="./code/suprimer.php?numdata=<?= $data['id'] ?>">OUI</a></p>
    <?php }?>
<?php

    include_once 'pokemon.php';
    include_once  'ball.php';
    include_once 'object.php';


While($Carapuce -> life > 0 && $Salameche -> life > 0 && $Salameche -> soumi == FALSE ) {
    echo '<br>' . 'Voici les stats des Pokemon';
    var_dump($Salameche, $Carapuce);
    var_dump($Carapuce->life, $Salameche->life, $Salameche->soumi);

    if ($Carapuce->life > 0) {
        if ($Potion->nombre > 0 && $Carapuce->life <= $Carapuce->max_life / 2) {

            $Potion->soin($Carapuce);
        } else {
            if ($Salameche->life <= $Salameche->max_life / 2) {
                $Pokeball->capture($Salameche);
            } else {
                $Carapuce->attack($Salameche);
            }
        }
        if ($Salameche->soumi == FALSE && $Salameche->life > 0) {
            $Salameche->attack($Carapuce);
        }
    }
}
var_dump($Salameche, $Carapuce);
if ($Carapuce -> life < 0 )
    {
        echo ' Vous avez perdue votre ' . $Carapuce-> name . " est Ko." . '<br>';
        echo 'Vous vous rendez à un centre pokemon'.'<br>';
        $Gigapotion ->soin($Carapuce);


    }

else
    {
        if ($Salameche -> soumi == TRUE)
        {
            echo 'Vous avez capturé un ' . $Salameche -> name . '<Br>';
        }
        echo 'Vous avez gagner le combat ' . '<br>';
        echo 'Vous êtes un bon dresseur vous soignez tout vos pokemon' . '<br>';
        $Gigapotion->soin($Salameche);
        $Gigapotion->soin($Carapuce);
        var_dump($Salameche);
        var_dump($Carapuce);

    }


?>
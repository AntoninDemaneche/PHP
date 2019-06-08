<?php
    class Objects
    {
        public $name;
        public $desc;
        public $puissance;
        public $nombre;

        public function __construct ($name,$desc, $puissance, $nombre)
        {
            $this -> name = $name;
            $this -> desc = $desc;
            $this -> puissance = $puissance;
            $this -> nombre = $nombre;

        }

        public function soin ($cible)
        {
            $this -> nombre = $this -> nombre - 1;
            if ($this -> puissance == "dieu")
            {
                $cible -> life = $cible -> max_life;
                echo 'Votre ' . $cible -> name . ' à étais soigner de 100%' . '<br>';

            }
            else
            {
                $cible->life += $this -> puissance ;

                if ($cible->life > $cible->max_life)
                {
                    $cible->life = $cible->max_life;

                }
                echo 'Votre ' . $cible -> name . ' à étais soigner de ' . $this -> puissance . '<br>';
            }
        }


    }

    class Potion extends Objects
    {
          public function __construct($nombre)
        {
            $name = 'Potion';
            $desc = ' La potions la plus basique elle soigne le pokemon';
            $puissance = 20;


            parent::__construct($name,$desc, $puissance,$nombre);
        }
    }
    $Potion = new Potion(3);

    class Superpotion extends Objects
    {
        public function __construct($nombre)
        {
            $name = 'Superpotion';
            $desc = ' La plus abordable';
            $puissance = 50;

            parent::__construct($name,$desc, $puissance, $nombre);
        }
    }
    $Superpotion = new Superpotion(1);

    class Hyperpotion extends Objects
    {
        public function __construct($nombre)
        {
            $name = 'Hyperpotion';
            $desc = ' Un potion pour les mec cool ';
            $puissance = 200;

            parent::__construct($name,$desc, $puissance, $nombre);
        }
    }
    $Hyperpotion = new Hyperpotion(1);

    class Gigapotion extends Objects
    {
        public function __construct($nombre)
        {
            $name = 'Gigapotion';
            $desc = ' La transpirations de dieux elle soigne tout';
            $puissance = "dieu" ;


            parent::__construct($name,$desc, $puissance, $nombre);
        }
    }
    $Gigapotion = new Gigapotion(1);


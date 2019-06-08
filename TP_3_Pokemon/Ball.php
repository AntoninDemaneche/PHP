<?php

    class Ball
    {
        public $lv;
        public $name;
        public $nombre;


        public function __construct ( $lv, $name, $nombre )
        {
            $this -> lv = $lv;
            $this -> name = $name;
            $this -> nombre = $nombre;

        }

        public function capture ($msk)
        {
            $this -> nombre -= 1;
            if ( $this -> name == "Masterball")
            {
                echo 'La Capture à réussit !' . ' <br>';
                $msk -> soumi = TRUE;
            }
            else
            {
                $capture = (($msk -> max_life - $msk -> life) / $msk -> max_life) * (1 + ($this -> lv - $msk -> level) / 25) / 1 ;
                $random = rand(0, 100)/100;
                echo 'Vous jeter une ' .  $this->name . ' sur ' . $msk -> name . '<br>';
            }

            if ( $random <= $capture )
            {
                echo 'La Capture à réussit !' . ' <br>';
                $msk -> soumi = TRUE;

            }
            else
            {
                echo 'Ca à échouer :/' . ' <br>';



            }
        }
    }

    class Pokeball extends Ball
    {
        public function __construct ($nombre)
        {
            $name = 'Pokeball';
            $lv = 10;


            parent::__construct($lv,$name, $nombre );
        }
    }

    $Pokeball = new Pokeball(3);

    class Superball extends Ball
    {
        public function __construct ($nombre)
        {
            $name = 'SuperBall';
            $lv = 20;


            parent::__construct($lv,$name, $nombre );
        }
    }

    $Superball = new Superball(3);

    class Hyperball extends Ball
{
    public function __construct ($nombre)
    {
        $name = 'Hyperball';
        $lv = 30;


        parent::__construct($lv,$name,$nombre );
    }
}

    $Hyperball = new Hyperball(1);

    class Masterball extends Ball
    {
        public function __construct ($nombre)
        {
            $name = 'Masterball';
            $lv = 'dieu';


            parent::__construct($lv,$name,$nombre );
        }
    }

        $Masterball = new Masterball(2);

<?php

    class Pokemon
    {
        public $life;
        public $name;
        public $level;
        public $type;
        public $strength;

        public function __construct ($name, $max_life, $life, $level, $type, $strength, $soumi)
        {
            $this  -> life = $life;
            $this -> name = $name;
            $this -> level = $level;
            $this -> type = $type;
            $this -> strength = $strength;
            $this -> max_life = $max_life;
            $this -> soumi = $soumi;

        }



        public function level_up ()
        {
            $this -> level += 1;
            $this -> life +=  5;
            $this -> strength += 2;



            $level_up_text = $this -> name . 'passe au niveaux ' . $this -> level . "<br>";

            echo $level_up_text;
            return true;
        }

        public function attack ($bolos)
        {
            $coup = $this -> strength * (rand(900, 1100) / 1000);
            $bolos -> life -=  $coup;
            $attack_text = $this -> name . ' Attaque '. $bolos -> name. "<br>";


            echo $attack_text;




        }




    }


    class Salameche extends Pokemon
    {
        public function __construct ($level, $soumi)
        {
            $name = 'Salameche';
            $max_life = 0 + 5 * $level;
            $life = $max_life;
            $type = 'feu';
            $strength = 0 + 4 * $level;
            $coup = $strength * (rand(900, 1100) / 1000);



            parent::__construct($name, $max_life, $life, $level, $type, $strength, $soumi);
        }}

        $Salameche = new Salameche(5, FALSE);
    class Carapuce extends Pokemon
    {
        public function __construct ($level,$soumi )
        {
            $name = 'Carapuce';
            $max_life = 0 + 9 * $level;
            $type = 'eau';
            $life = $max_life;
            $strength = 0 + 2 * $level;
            $coup = $strength * (rand(900, 1100) / 1000);
            $soumi = TRUE;



            parent::__construct($name, $max_life, $life, $level, $type, $strength, $soumi);
        }}
            $Carapuce = new Carapuce(5, TRUE);
    class Bulbizar extends Pokemon
    {
        public function __construct ($level, $soumi)
        {
            $name = 'Bulbizar';
            $max_life = 0 + 7 * $level;
            $life = $max_life;
            $type = 'herbe';
            $strength = 0 + 3 * $level;
            $coup = $strength * (rand(900, 1100) / 1000);


            parent::__construct($name, $max_life, $life, $level, $type, $strength, $soumi);
        }}
        $Bulbizar = new Bulbizar(5, TRUE);


    ?>
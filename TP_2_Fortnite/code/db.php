<?php
// Deffinitions des accés à la BDD
    define("DATABASE_HOST", "localhost");

    define("DATABASE_NAME", "spawn");

    define("DATABASE_USER", "root");

    define("DATABASE_PASSWORD", "");
// Initialisations de la connections à la BDD
$db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);



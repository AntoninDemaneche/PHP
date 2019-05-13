<?php
if ( ( date("h") <= "07" ) || ( date("h") >= "19" )) {
    echo '<style> 
            body {background: black; color: white;}
        </style>';
}
echo "<h2> Bonjour, voici la météo d'aujourd'hui  </h2>";
echo "<a href="bordeaux.php" > bordeaux </a>";
echo "</br>";
echo "<a href="paris.php" > Paris </a>";
?>

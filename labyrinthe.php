<?php
$mysqli = new mysqli("localhost:3306", "root", "", "labyrinthe_php");

if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}

?>


<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>labyrinthe</title>
    <link href="format.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="map-and-controls", classe="game-map", class="game-container">
        <?php
            $labyrinthe = fopen('labyrinthe_shape.txt','r+');

            $tabLab = [];
            $i = 1;
            while($i <= 15){
                $ligne = fgets($labyrinthe);
                $tabLab[] = explode(" ", $ligne);
                echo $ligne . "<br />";
                $i++;
            }
        ?>
    </div>


    <div id="game-container" class="game-container">
        <div id="map-and-controls">
        <div id="game-map" class="game-map">
        <div id="tiles" class="layer"></div>
        <div id="sprites" class="layer"></div>
    </div>
  
    <!-- controls-->
    <div id="controls">
        <button id="up"></button>
        <div id="horiz">
           <button id="left"></button>
           <button id="right"></button>
        </div>
        <button id="down"></button>
    </div>
    <div>
        <p id="text-1" class="text">Use buttons to move the player.</p>
    </div>

</body>
</html>
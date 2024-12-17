<?php
// index.php

// Incluimos las clases 
require_once 'clases/Personaje.php';
require_once 'clases/Espada.php';
require_once 'clases/Arco.php';
require_once 'clases/Bumeran.php';

// Crea personajes de Zelda
$link = new Personaje("Link");
$ganondorf = new Personaje("Ganondorf");

// Añadimos armas a los personajes
$link->agregarArma(new Espada($link));
$ganondorf->agregarArma(new Arco($ganondorf));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zelda: Ocarina of Time - Armas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Personajes y sus Armas</h1>
    
    <div class="personaje">
        <h2>Personaje: Link</h2>
        <p><?php echo $link->atacar(); ?></p>
    </div>

    <div class="personaje">
        <h2>Personaje: Ganondorf</h2>
        <p><?php echo $ganondorf->atacar(); ?></p>
    </div>

</body>
</html>

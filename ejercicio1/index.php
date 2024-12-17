<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Personajes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Juego de Personajes</h1>

<form action="index.php" method="post">
    <label for="nivel">Selecciona el nivel:</label>
    <select name="nivel" id="nivel">
        <option value="facil">Fácil</option>
        <option value="dificil">Difícil</option>
    </select>
    <button type="submit">Crear Personaje</button>
</form>

<?php
require_once 'clases/FabricaPersonajes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nivel = $_POST['nivel'];
    
    // Usamos la fábrica para crear el personaje
    $personaje = FabricaPersonajes::crearPersonaje($nivel);
    
    if ($personaje) {
        echo "<div class='personaje-info'>";
        echo "<h2>Personaje Creado</h2>";
        echo "<p><strong>Nombre:</strong> " . $personaje->getNombre() . "</p>";
        echo "<p><strong>Ataque:</strong> " . $personaje->atacar() . "</p>";
        echo "<p><strong>Velocidad:</strong> " . $personaje->getVelocidad() . "</p>";
        echo "</div>";
    } else {
        echo "<p>No se pudo crear el personaje para el nivel: $nivel</p>";
    }
}
?>

<script src="js/scripts.js"></script>
</body>
</html>

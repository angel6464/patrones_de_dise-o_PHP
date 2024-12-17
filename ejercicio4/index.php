<?php
// index.php

require_once 'clases/Consola.php';
require_once 'clases/JSON.php';
require_once 'clases/ArchivoTXT.php';
require_once 'clases/Contexto.php';

// Inicializamos el contexto con una estrategia por defecto (Consola)
$contexto = new Contexto(new Consola());
$mensajeResultado = "";

// Verificamos si el usuario ha seleccionado una estrategia
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoSalida = $_POST['salida'];
    $mensaje = $_POST['mensaje'];

    // Cambiamos la estrategia según la selección del usuario
    if ($tipoSalida == 'consola') {
        $contexto->setEstrategia(new Consola());
    } elseif ($tipoSalida == 'json') {
        $contexto->setEstrategia(new JSON());
    } elseif ($tipoSalida == 'archivo') {
        $contexto->setEstrategia(new ArchivoTXT());
    }

    // Almacenamos el mensaje generado para mostrarlo en la página
    ob_start(); // Inicia el almacenamiento en buffer
    $contexto->mostrarMensaje($mensaje);
    $mensajeResultado = ob_get_clean(); // se Obtiene el contenido generado
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje con Estrategia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h1>Selecciona el Tipo de Salida</h1>

        <!-- Formulario para ingresar el mensaje y seleccionar la salida -->
        <form method="POST">
            <textarea name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
            
            <label for="salida">Tipo de salida:</label>
            <select name="salida" id="salida">
                <option value="consola">Consola</option>
                <option value="json">JSON</option>
                <option value="archivo">Archivo TXT</option>
            </select>

            <button type="submit">Mostrar Mensaje</button>
        </form>

        <div class="resultados">
            <h2>Resultado:</h2>
            <!-- Aquí mostramos el resultado dinámicamente con PHP -->
            <div class="mensajeResultado">
                <?php if (!empty($mensajeResultado)): ?>
                    <?php echo $mensajeResultado; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>
</html>

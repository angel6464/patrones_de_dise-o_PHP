<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaptador de Archivos - Windows 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Adaptador de Archivos - Windows 10</h1>

<form action="index.php" method="post">
    <label for="tipoArchivo">Selecciona el tipo de archivo (Windows 7):</label>
    <select name="tipoArchivo" id="tipoArchivo">
        <option value="word">Word (.doc)</option>
        <option value="excel">Excel (.xls)</option>
        <option value="powerpoint">PowerPoint (.ppt)</option>
    </select>
    <button type="submit">Abrir Archivo</button>
</form>

<!-- Contenedor para mostrar el mensaje de resultado -->
<div class="mensaje-resultado">
    <?php
    require_once 'clases/AdaptadorArchivo.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tipoArchivo = $_POST['tipoArchivo'];

        // Creamos el adaptador para convertir archivos de Windows 7 a formato compatible con Windows 10
        $adaptador = new AdaptadorArchivo($tipoArchivo);
        $archivoConvertido = $adaptador->abrirArchivo();

        if ($archivoConvertido) {
            echo "<p>El archivo se ha convertido correctamente a: <strong>" . $archivoConvertido . "</strong></p>";
        } else {
            echo "<p>Error: No se pudo abrir el archivo de tipo $tipoArchivo.</p>";
        }
    }
    ?>
</div>

</body>
</html>


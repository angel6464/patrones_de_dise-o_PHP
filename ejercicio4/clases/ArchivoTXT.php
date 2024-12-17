<?php
// clases/ArchivoTXT.php

require_once 'EstrategiaSalida.php';

class ArchivoTXT implements EstrategiaSalida {
    public function mostrar($mensaje) {
        $file = fopen("mensaje.txt", "a");
        fwrite($file, $mensaje . "\n");
        fclose($file);
        echo "<pre>El mensaje ha sido guardado en el archivo mensaje.txt</pre>";
    }
}

<?php
// clases/Consola.php

require_once 'EstrategiaSalida.php';

class Consola implements EstrategiaSalida {
    public function mostrar($mensaje) {
        echo "<pre>Consola: " . $mensaje . "</pre>";
    }
}

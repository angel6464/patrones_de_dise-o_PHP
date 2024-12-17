<?php
// clases/JSON.php

require_once 'EstrategiaSalida.php';

class JSON implements EstrategiaSalida {
    public function mostrar($mensaje) {
        echo "<pre>" . json_encode(["mensaje" => $mensaje], JSON_PRETTY_PRINT) . "</pre>";
    }
}

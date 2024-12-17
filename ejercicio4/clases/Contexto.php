<?php
// clases/Contexto.php

require_once 'EstrategiaSalida.php';

class Contexto {
    private $estrategia;

    // Establece la estrategia
    public function __construct(EstrategiaSalida $estrategia) {
        $this->estrategia = $estrategia;
    }

    // Usar la estrategia para mostrar el mensaje
    public function mostrarMensaje($mensaje) {
        $this->estrategia->mostrar($mensaje);
    }

    // Cambiar la estrategia en tiempo de ejecución
    public function setEstrategia(EstrategiaSalida $estrategia) {
        $this->estrategia = $estrategia;
    }
}

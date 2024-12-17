<?php
// clases/ArmaDecorator.php

require_once 'Personaje.php';

class ArmaDecorator {
    protected $personaje;

    public function __construct($personaje) {
        $this->personaje = $personaje;
    }

    public function atacar() {
        return "con " . $this->personaje->atacar();
    }
}

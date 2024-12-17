<?php
// clases/Personaje.php

class Personaje {
    protected $nombre;
    protected $armas = []; // Arreglo para almacenar las armas

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método para añadir armas al personaje
    public function agregarArma($arma) {
        $this->armas[] = $arma;
    }

    public function atacar() {
        if (empty($this->armas)) {
            return $this->nombre . " está atacando con sus habilidades básicas.";
        }

        $resultado = $this->nombre . " ataca con:";
        foreach ($this->armas as $arma) {
            $resultado .= " " . $arma->atacar();
        }
        return $resultado;
    }
}

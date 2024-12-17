<?php

abstract class Personaje {
    protected $nombre;
    protected $velocidad;

    public function __construct($nombre, $velocidad) {
        $this->nombre = $nombre;
        $this->velocidad = $velocidad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    abstract public function atacar();
}

class Esqueleto extends Personaje {
    public function __construct() {
        parent::__construct("Esqueleto", 5);
    }

    public function atacar() {
        return "Lanza flechas con precisión.";
    }
}

class Zombi extends Personaje {
    public function __construct() {
        parent::__construct("Zombi", 2);
    }

    public function atacar() {
        return "Ataca con mordiscos poderosos.";
    }
}

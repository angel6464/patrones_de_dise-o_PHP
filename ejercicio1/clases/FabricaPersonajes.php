<?php

require_once 'Personaje.php';

class FabricaPersonajes {
    public static function crearPersonaje($nivel) {
        switch ($nivel) {
            case 'facil':
                return new Esqueleto();
            case 'dificil':
                return new Zombi();
            default:
                return null;
        }
    }
}

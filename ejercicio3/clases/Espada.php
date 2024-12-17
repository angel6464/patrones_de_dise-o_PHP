<?php
// clases/Espada.php

require_once 'ArmaDecorator.php';

class Espada extends ArmaDecorator {
    public function atacar() {
        return "una espada";
    }
}

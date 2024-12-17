<?php
// clases/Arco.php

require_once 'ArmaDecorator.php';

class Arco extends ArmaDecorator {
    public function atacar() {
        return "un arco";
    }
}

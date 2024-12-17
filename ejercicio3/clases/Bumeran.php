<?php
// clases/Bumeran.php

require_once 'ArmaDecorator.php';

class Bumeran extends ArmaDecorator {
    public function atacar() {
        return "un bumerán";
    }
}

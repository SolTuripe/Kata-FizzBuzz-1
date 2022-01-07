<?php

namespace App;

class Car {
    private $wheels = 4;
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }
    
    public function getWheels(){
        return $this->wheels;
    }
    
    public function getColor() {
        return $this->color;
    }
}
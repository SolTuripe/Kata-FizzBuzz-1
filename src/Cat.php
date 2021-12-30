<?php

namespace App;

class Cat implements Comunicate {
private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function comunicate() {
        return 'miau';
    }
}
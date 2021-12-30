<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\Dog;
use App\Cat;

class DogTest extends TestCase {
    public function test_Dog_init_whith_name() {
        $lassie = new Dog('lassie');

        $result = $lassie->getName();
        $this->assertEquals("lassie", $result);
    }

    public function test_can_comunicate() {
        $animal = new Dog('lassie');
        $result = $animal->comunicate();
        $this->assertEquals("guau", $result);
    }

    public function test_cat_can_comunicate() {
        $animal = new Cat('lassie');
        $result = $animal->comunicate();
        $this->assertEquals("miau", $result);
    }
}
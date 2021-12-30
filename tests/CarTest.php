<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\Car;

class CarTest extends TestCase {
public function test_car_init_has_4_wheels() {
    //Given
    $car = new Car('');
    //When
    $result = $car->getWheels();
    //Then
    $this->assertEquals(4, $result);
}

public function test_can_define_initial_car_color() {
    //Given
    $car = new Car("red");
    //When
    $result = $car->getColor();
    //Then
    $this->assertEquals("red", $result);
}

};
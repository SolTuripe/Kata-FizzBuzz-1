<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase {

	public function test_returns_if_multipe_both() {
		//given
		$fizzbuzz = new FizzBuzz();
		//when
		$result = $fizzbuzz->execute(15);
		//then
		$this->assertEquals("fizzbuzz", $result);
	}

	public function test_returns_if_multipe_3() {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->execute(3);
		$this->assertEquals("fizz", $result);
	}

	public function test_returns_if_multipe_5() {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->execute(5);
		$this->assertEquals("buzz", $result);
	}
	public function test_returns_num_if_it_is_not_multiple_of_both() {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->execute(1);
		$this->assertEquals(1, $result);
	}

};



<?php

namespace App;

class FizzBuzz {
    public function execute($num) {
        if ($num % 5 === 0 && $num % 3 === 0) return "fizzbuzz";

        if ($num % 3 === 0) return "fizz";

        if ($num % 5 === 0) return "buzz";

        return $num;
    }
};
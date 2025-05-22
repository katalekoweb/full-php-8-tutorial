<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Data types & Type Casting */

# 4 Scalar Types
    # bool - true/false 
    $completed = true;
    # int - 1,2,3,4,5, -5 (no decimal)
    $score = 75;
    # float - 1.5, 3.7,1.5
    $price = 0.99;
    # string - "Kata", "Lisa"
    $greeting = "Hello Lisa";

    echo $completed . "<br/>";
    echo $score . "<br/>";
    echo $price . "<br/>";
    echo $greeting . "<br/>";
    echo "<br/>";
    echo gettype($completed) . "<br/>";
    echo gettype($score) . "<br/>";
    echo gettype($price) . "<br/>";
    echo gettype($greeting) . "<br/>";
    echo "<br/>";
    // var_dump($completed);
    echo "<br/>";

# 4 Compound Types
    # array
    $companies = [1,2,3,4,0.5,-9,'A', true];
    // echo $companies;
    // print_r($companies);
    # object
    # callable
    # iterable

# 2 Special Types
    # resource
    # null

function sum (int $x, int $y) {
    // type juggling
    // var_dump($x, $y);
    // echo "<br/>";
    return $x+$y;
}

echo "<br/>";
// echo sum(2,4);

$x = (int) "4"; // cast to int
echo sum($x, 9);
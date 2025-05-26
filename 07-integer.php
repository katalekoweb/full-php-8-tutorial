<?php

// Integers

$x = 0x55; // xeha
$octal = 05; // octal number
$x = 0b110; // binary
$max_exced = PHP_INT_MAX + 1;
$x = (int) false;
$big_number = 2_000_000;

var_dump($x, $octal, $max_exced);
var_dump(is_integer($max_exced));
var_dump($big_number);


echo "\n";
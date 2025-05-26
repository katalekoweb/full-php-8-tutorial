<?php

// $x = 13_000_000.5e3;
// $max_float = PHP_FLOAT_MAX;
// $min_float = PHP_FLOAT_MIN;
// $y = floor((0.1+0.7) * 10); // floor rounds down the number
// $y = ceil((0.1+0.2) * 10); // ceil rounds up the number
// var_dump($x, $max_float, $min_float, $y);

$x = 0.23;
$y = 1 - 0.7;
$z = PHP_FLOAT_MAX * 2;

// var_dump($x, $y, NAN, log(-1));
var_dump(is_infinite($z), is_nan($z));

// casting
var_dump((float)5);
var_dump(floatval(5));
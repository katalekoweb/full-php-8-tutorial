<?php

// Booleans

$isComplete = (boolean) false;

var_dump($isComplete);
echo "\n";
is_bool($isComplete);

// integers 0 -0 = false
// floats 0.0, -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

// other values are true

if ($isComplete) {
    // do something
    echo "Success";
} else {
    // do something else
    echo "Fail";
}


echo "\n";
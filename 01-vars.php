<?php 

$name = 'Gio';
$_email = "gio@gmail.com";

// we can start a variable with a letter or underscore
// we cannot start a variable with a number
// we cannot use spaces in a variable name

$x = 1;
// $y = &$x; // to assign by a reference you need to use the & operator

$x = 3;
// echo $y; 

$firstName = "Gio";
// echo 'Hello $firstName'; // Hello $firstName
// echo "Hello $firstName"; // Hello Gio

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo "Hello World"; ?>
    </h1>

    <h2>
        <?= "Hello Benguela" ?>
    </h2>

    <?php

        // Comment 1
        # Comment 2
        /**
         * This is a multiple
         * lines comment
         */
        
        $x = 10;
        $y = 50;

        echo "<p>" . $x . ", " . $y . "</p>"
    ?>
</body>

</html>
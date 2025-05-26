<?php

// Strings

// $firstName = "Julian ";
// $lastName = "Kataleko";
// $name = $firstName . " " . $lastName;

// echo $name . "<br/>";

// $name[1] = "o";

// $name[17] = "J";

// var_dump($name);

$x = 1;
$y = 2;

// Heredoc // allows multiple lines with variables
$text1 = <<<TEXT
<div>
    <p>Hello</p>
    <p>World</p>
</div>
line 1 $x
line 2 $y
line 3
TEXT;

// Nowdoc - not allows variables
$text2 = <<<'TEXT'
line 1 $x
line 2 $y
line 3
TEXT;


echo nl2br($text1);

echo "<br/>";
echo "<br/>";

echo nl2br($text2);
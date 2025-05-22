<?php

// constants
define('STATUS_PAID', 'paid');
// echo defined('STATUS_PAID');

const STATUS_UNPAID = 'unpaid';

// It's not possible to define a const with const keyword in the dynamics flows like if, while, for

// echo STATUS_PAID;
// echo STATUS_UNPAID;

// dynamic consts name
$pending = "PENDING";
define('STATUS_' . $pending, 'pending');

// default consts in PHP 8
// echo PHP_VERSION;

// Magic const
// echo __LINE__;
// echo __FILE__;

// Variable Variables

$foo = 'bar';
$$foo = 'baz';
// echo $foo, $bar;
// echo $foo, $$foo;
// echo "$foo, $$foo";
echo "$foo, {$$foo}";

echo "\n";
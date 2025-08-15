<?php

// $n = 0123; // 123
// $n1 = 0o123;
// $n2 = 0x123;
// echo $n . "\n"; // 83 Octal
// echo $n1 . "\n"; // 83 Octal
// echo $n2 . "\n"; // 83 Hexal-Decimal (x16)

// $n3 = 0b11111111; // 255
// $n4 = 84_090_999_999; // decimal
// echo $n3 . "\n";
// echo $n4 . "\n";

// IMPORTANT: Max / Min / SIZE
echo PHP_INT_MAX; // 9223372036854775807
echo PHP_INT_MIN; // -9223372036854775808
echo PHP_INT_SIZE . "\n"; // 8 bytes

$u = PHP_INT_MAX + 1; // ?

var_dump($u);

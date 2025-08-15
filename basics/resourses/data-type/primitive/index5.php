<?php

/**
 * ==============================
 * LESSON: NUMERIC + STRING
 * ==============================
 */

// var_dump(("0E1" == "000")); // 0E1 = 0 * 10^1 = 0 | "000" = 0 => true
// var_dump(("2E1" == "020")); // 0E1 = 2 * 10^1 = 20 | "020" = 20 => true
// var_dump(("0D1" == "000")); // false

// var_dump(0); // int(0) 
// var_dump(1); //  int(1) 
// echo is_numeric("123"); // 1

var_dump(is_numeric("123")); // bool(true)
var_dump(is_numeric("12.3e5")); // bool(true)
var_dump(is_numeric("12electrons")); // bool(false)
var_dump(is_numeric("pigs12")); // bool(false)
var_dump(is_numeric("         -1.      2           ")); // bool(false)
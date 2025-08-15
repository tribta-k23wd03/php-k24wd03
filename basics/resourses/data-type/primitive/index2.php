<?
/**
 * ==============================
 * LESSON: Data Type
 * ==============================
 * 1. Null
 * ==============================
 */

// $var = null; // null
// $var2; // undefined

// unset($var);

// echo $var;
// echo $var2;

NOTE: // 2. Booleans:

// falsy value: "", false, undefined, [], {}, ...
var_dump((bool)""); // false
var_dump((bool)"0"); // false int(0)
var_dump((bool)1); // true
var_dump((bool)-2); // true
var_dump((bool)"abc"); // true
var_dump((bool)2.3e5); // true (1.3 * 10^5)
var_dump((bool)array()); // false
var_dump((bool)0); //false
var_dump((bool)0.0); // false
var_dump((bool)nUlL); // false Un-Case-Sensitive

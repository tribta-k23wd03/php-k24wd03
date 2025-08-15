<?

/**
 * ==============================
 * LESSON: Primitive Types
 * ==============================
 * 1. String, Number (Integer, Float), Boolean, Null
 * ==============================
 */

$number = 1;
$boolean = true;
$string = "string";
$float = 1.1;

// NOTE: Check tên của data type và trả về dạng string
// echo get_debug_type($number), "\n"; // int
// echo get_debug_type($boolean), "\n"; // bool
// echo get_debug_type($string), "\n"; // string
// echo get_debug_type($float), "\n"; // float

// NOTE: Check tên của data type và trả về dạng Boolean
// echo is_int($number), "\n";
// echo is_bool($boolean), "\n";
// echo is_string($string), "\n";
// echo is_float($float), "\n";
// echo is_string($float), "\n";

// NOTE: Check tên & value của variable và trả về nguyên mẫu
// var_dump($number);
// var_dump($boolean);
// var_dump($string);
// var_dump($float);

// IMPORTANT: Check data type:
$x = "1";
$y = 1;
$z = (int)$x + $y;
var_dump($z); // ???

if($x === $y){
    echo "x & y is Number type." . "\n";
}else{
    echo "x & y is NOT Number type." . "\n";
}

if($x == $y){
    echo "x & y is Number type." . "\n";
}else{
    echo "x & y is NOT Number type." . "\n";
}


// var_dump($x) === "int" ? $x += 4 : print_r("Variable 'x' is not a number");

// is_int($x) ? $x += 4 : print_r("Variable 'x' is not a number");

// if (get_debug_type($x) === "int") {
//     $x += 4;
// } else {
//     echo "Variable 'x' is not a number";
// }

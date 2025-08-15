<?php

/**
 * ==============================
 * LESSON: ARRAY
 * ==============================
 * 1. Key: Value
 * ==============================
 */
// Khai báo array:
// $arr = array(
//     "key1" => "value1",
//     "key2" => "value2"
// );

// $array = [
//     "k1" => "v1",
//     "k2" => "v2"
// ];

// var_dump($arr);
// var_dump($array);

// NOTE: Array with different data types
// $array = [
//     "1" => "1",
//     2 => 2,
// ];

// var_dump($array);

// IMPORTANT: Weakness:
// $array = [
//     "1" => "1",
//     1 => 2, // Overriding (nếu key bị trùng tên thì sẽ bị ghi đè.)
// ];

// var_dump($array);

// IMPORTANT: No-Keys:
// $array = [
//     "1", // Không có key => tự khởi tạo key theo số index của mảng
//     1 => 2,
// ];

// var_dump($array);

// TEST_CASE: 
$array = array(
    1 => 'a', // [1 => 'a']
    '1' => 'b', // [1 => 'b']
    1.5 => 'c', // [1 => 'b', 1.5 => 'c']
    -1 => 'd', // [1 => 'b', 1.5 => 'c', -1 => 'd',]
    '01' => 'e', // [1 => 'b', 1.5 => 'c', -1 => 'd',]
    '1.5' => 'f', // [1 => 'e', 1.5 => 'c', -1 => 'd',]
    true => 'g', // [1 => 'g', 1.5 => 'c', -1 => 'd',]
    false => 'g', // [1 => 'g', 1.5 => 'c', -1 => 'd', [0] => 'g']
    '' => 'z', // [1 => 'g', 1.5 => 'c', -1 => 'd', [0] => 'g', "" => 'z'/ [4] => 'z']
    null => 'j', // [1 => 'g', 1.5 => 'c', -1 => 'd', [0] => 'g', "" => 'j'/ [4] => 'z']
    'k', // [1 => 'g', 1.5 => 'c', -1 => 'd', [0] => 'g', "" => 'k'/ [4] => 'z']
    2 => 'l',
    "Check me please"
);
var_dump($array); // [1=>b, ]
// array(7) {
//   [1]=>
//   string(1) "g"
//   [-1]=>
//   string(1) "d"
//   ["01"]=>
//   string(1) "e"
//   ["1.5"]=>
//   string(1) "f"
//   [0]=>
//   string(1) "g"
//   [""]=>
//   string(1) "j"
//   [2]=>
//   string(1) "l"
// }
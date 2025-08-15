<?php
// $array = [];
// var_dump($array);

// $array[-5] = 1;
// var_dump($array);
// $array[] = 2;
// var_dump($array); # ['-5', '-4'/0]
// $array[5] = 3;
// var_dump($array); # ['-5', '-4', '5']
// $array[] = 4;
// var_dump($array); # ['-5', '-4', '5', '6']
// $array[-6] = 5;
// var_dump($array); # ['-5', '-4', '5', '6', '-6']
// $array[] = 6;
// var_dump($array); # ['-5' => 6, '-4'/0, '5'/1, '6', '-6']


function getArray()
{
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    return $arr;
}
// $arr[1];
// $index = getArray([1]);
$index1 = getArray()[1];

// echo $index;
// echo $index1;

print_r(getArray());

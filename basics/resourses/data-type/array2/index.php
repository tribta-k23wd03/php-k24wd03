<?php
// // NOTE: khi gán mảng A = mảng B => tạo mới
// $arr1 = array(2, 3);
// $arr2 = $arr1;
// $arr2[] = 4; //[2,3,4]

// var_dump($arr1, $arr2);

// // NOTE: khi gán mảng A = mảng B sử dụng '&' => tham chiếu
// $arr3 = &$arr1; // [2,3]
// $arr3[] = 5;
// var_dump($arr1, $arr2, $arr3);

// NOTE: Spread Operator khi gán mảng A = mảng B
$arr4 = [1, 2, 3];
$arr5 = [...$arr4]; // [1,2,3]
$arr6 = [0, ...$arr4]; // [0,1,2,3]
$arr7 = [...$arr4, ...$arr5]; // [1,2,3,1,2,3]
$arr8 = [...$arr4, ...$arr5, 9999]; // [1,2,3,1,2,3,9999]
$arr9 = [$arr4, $arr5, 9999]; // [[1,2,3],[1,2,3],9999]

$arr10 = array_merge($arr8); // [1,2,3,1,2,3,9999]

function getAttr()
{
    return ['a', 'b'];
};

$arr11 = [...getAttr(), 'c' => 'd'];

// print_r($arr11);
// print_r($arr11[2]); // undefined there is no key = 2
print_r($arr11['c']);

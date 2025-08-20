<?php
// // NOTE: Khởi tạo object thông qua class
// class ObjectFactory
// {
//     public $name;
//     public function __construct($newName)
//     {
//         $this->name = $newName;
//     }
// }

// $obj1 = new ObjectFactory("Harry Potter");
// $obj2 = $obj1; // ref = 0x123
// $obj4 = $obj1;
// // $obj1->name = "Voldermolt";
// $obj1 = null;
// $obj3 = &$obj1;

// // var_dump($obj1);
// // var_dump($obj2);
// // var_dump($obj3);

// debug_zval_dump($obj1, $obj2, $obj3);

// NOTE: Zend Value Container - String Pool
$a = "String";
$b = "String";
$c = "String";
$d = "String";
$e = "String";

$f = strtoupper("String"); // STRING
$g = $f;
debug_zval_dump($a, $b, $c, $d, $e, $f);

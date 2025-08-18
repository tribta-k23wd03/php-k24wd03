<?php

/**
 * ==============================
 * LESSON: Object
 * ==============================
 * 1. Sử dụng Class => Obj
 * ==============================
 */
class Person
{
    function doSomething()
    {
        echo "Walking to the sun.";
    }
}

$person = new Person();

// var_dump($person);

$person->doSomething();

$obj1 = new Person();
$obj2 = $obj1;
$obj3 = $obj2;
var_dump($obj1 === $obj3); // bool(true)
$obj3->doSomething();

// NOTE: Ép kiểu Array -> Object
echo PHP_EOL;
$arr = ["name" => "Tommy", "age" => 5];
$obj = (object) $arr;

echo $arr["name"];

echo $obj->name;
echo $obj->age;

// IMPORTANT: nếu key là numeric

$arr1 = [0 => "Tommy", 1 => 5];
$obj9 = (object) $arr1;

echo $obj9->{0};
echo $obj9->{1};

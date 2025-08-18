<?php
// NOTE: CLass Syntax

// class SimpleClass
// {
//     public $var = "Default Value!!!";

//     public function displayVar($updateVar)
//     {
//         echo $this->var = $updateVar;
//     }
// }

// $simpleObject = new SimpleClass();
// $simpleObject->displayVar("Updated Value!!!");

// NOTE: readonly in Class
readonly class X
{
    public int $x;
}

$instance = new X();
$reference = &$instance; // 2 biến này trỏ về chung 1 obj 

//$instance->x = 9999; // NOTE: đối với property bên trong readonly class chỉ read, không re-assign
$instance = null;
$assigned = $instance; // 2 biến cùng có chung giá trị
var_dump($instance);
var_dump($assigned);
var_dump($reference);

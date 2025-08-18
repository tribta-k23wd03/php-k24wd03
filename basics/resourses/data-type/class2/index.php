<?php
// class Animal
// {
//     public $name;
//     public function move()
//     {
//         echo "This animal is running\n";
//     }
// }

// class Cat extends Animal
// {
//     public function move()
//     {
//         echo "Meow!!!";
//         // parent::move(); // NOTE: Call parent's method
//     }
// }

// $cat = new Cat();
// $cat->name = "Tommy";
// $cat->move();

// echo Cat::class;

// class Demo
// {
//     const MESSAGE = "Hello PHP!";
//     public $message = "Goodbye PHP!";
// }

// echo Demo::MESSAGE; // truy cập constant variable bên trong 1 class

class Math
{
    public static $pi = 3.14;
    public static function square($n)
    {
        return $n * $n;
    }
}

echo Math::square(5);

Math::$pi = 5;
echo Math::$pi; // NOTE: callable static property & method

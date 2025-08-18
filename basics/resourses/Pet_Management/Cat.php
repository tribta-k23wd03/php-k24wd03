<?php
require_once "./index.php";

class Cat extends Pet
{
    public function introduce()
    {
        return "Meow meow! I am {$this->name}, {$this->age} years old.";
    }
    public function getType()
    {
        return "Kitty";
    }

    public function getTypeClass()
    {
        return "Type-Cat";
    }
}

<?php
require_once "./index.php";

class Dog extends Pet
{
    public function introduce()
    {
        return "Woof woof! I am {$this->name}, {$this->age} years old.";
    }
    public function getType()
    {
        return "Puppy";
    }

    public function getTypeClass()
    {
        return "Type-Dog";
    }
}

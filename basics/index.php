<?php
class Pet
{
    public string $name;
    public int $age;

    public function __construct($petName, $petAge)
    {
        $this->name = $petName;
        $this->age = $petAge;
    }

    public function introduce()
    {
        return "Hello! I am {$this->name}, {$this->age} years old.";
    }
    public function getType()
    {
        return "N/A";
    }

    public function getTypeClass()
    {
        return "";
    }
}

<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function showProfile($userName)
    {
        $user = new User($userName);
        echo "Good Afternoon, " . $user->name;
    }
}

<?php

use App\Controllers\UserController;
use Lib\Helpers\StringHelper as SH;

require_once "../Models/User.php";
require_once "../Controllers/UserController.php";

$controller = new UserController();

$controller->showProfile("Harry Potter");

echo SH::upper("voldermolt");

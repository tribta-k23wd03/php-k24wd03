<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    public function index()
    {
        if (App::environment('local')) {
            return 'My project name: ' . config('app.name');
        }
        return "Not allowed in this environment";
    }
}

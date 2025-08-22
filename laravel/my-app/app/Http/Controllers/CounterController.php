<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CounterController extends Controller
{
    public function show(Request $request)
    {
        $count = session('count', 0);

        return Inertia::render("Counter", ['count' => $count]);
    }

    public function update(Request $request)
    {
        $count = session('count', 0);
        $action = $request->input('action');

        if ($action === 'inc') {
            $count++;
        } elseif ($action === 'dec') {
            $count--;
        } elseif ($action === 'res') {
            $count = 0;
        }

        session(['count' => $count]);

        return back();
    }
}

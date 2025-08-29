<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ConversationController extends Controller
{
    public function index(Request $request): Response
    {
        // chứa user mà client gửi request
        $user = $request->user();

        // chứa 1 danh sách các conversations trong db
        $conversations = $user->conversations()
            ->with(['lastMessage.user:id,name'])
            ->orderByDesc('updated_at')
            ->get();

        // chứa 1 danh sách các users trong db
        $users = User::query()
            ->where('id', '<>', $user->id)
            ->select('id', 'name', 'email')
            ->orderBy('name')
            ->limit(50)
            ->get();

        return Inertia::render('Chat/Index', [
            'conversations' => $conversations,
            'users' => $users
        ]);
    }
}

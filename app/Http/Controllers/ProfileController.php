<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        
        // Mock posts for now until we connect to Java API
        $posts = [
            [
                'id' => 1,
                'content' => 'Minha primeira postagem no Instacrente!',
                'created_at' => now()->subDays(2),
                'likes' => 10,
                'comments' => 2
            ]
        ];

        return view('profile', compact('user', 'posts'));
    }
}

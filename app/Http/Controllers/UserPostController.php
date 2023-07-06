<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        // $po
        return view('users.posts.index',[
            'user' => $user,
        ]);
    }
}

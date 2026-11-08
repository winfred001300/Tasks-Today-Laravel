<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }
}
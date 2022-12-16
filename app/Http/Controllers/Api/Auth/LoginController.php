<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => "required|email",
            'password' => 'required',
        ]);

        return response()->json($user);
    }

    public function allUsers()
    {
        return User::all();
    }
}

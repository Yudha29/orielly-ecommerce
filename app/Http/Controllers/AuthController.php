<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUp() {
        return view('client.sign-up');
    }

    public function signIn() {
        return view('client.sign-in');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // return $request->all();
        return 'Email : ' . $email . '<br>' .
            'Password : ' . $password;
    }
}

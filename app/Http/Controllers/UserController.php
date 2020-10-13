<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Masrianto';
        $users = array(
            "name" => "Lakip Center",
            "email" => "info@lakipcenter.com",
            "phone" => "085315448868"
        );
        return view('user', compact('name', 'users'));
    }
}

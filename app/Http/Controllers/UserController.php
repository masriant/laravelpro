<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     $name = 'Masrianto';
    //     $users = array(
    //         "name" => "Lakip Center",
    //         "email" => "info@lakipcenter.com",
    //         "phone" => "085315448868"
    //     );
    //     return view('user', compact('name', 'users'));
    // }

    public function index(Request $request)
    {
        // return $request->method();
        // return $request->path();
        // return $request->url();
        return $request->fullUrl(); // http://127.0.0.1:8000/user?name=smith&age=34


    }
}

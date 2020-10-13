<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = array('Mango', 'Orange', 'Apple', 'Banana', 'Pineapple');
        return view('welcome', compact('fruits'));
    }
}

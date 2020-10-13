<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index($name = null)
  {
    return 'Hi From HomeController, Name : ' . $name;
  }
  // public function index()
  // {
  //   return 'Hi From HomeController';
  // }
}

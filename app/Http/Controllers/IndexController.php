<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainPage() {
        return view('hello_world');
   }
   public function hello($name = 'Fulano') {
        return 'O cadu é????, ' . $name;
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function helloWorld() {
         return view('hello_world');
    }
    public function hello($name = 'Fulano') {
         return 'O cadu é????, ' . $name;
    }
    public function TestDatabaseConnection(){
    try {
        $database_host = Config::get('config.database_host');
        $database_name = Config::get('config.database_name');
        $database_user = Config::get('config.database_user');
        $database_password = Config::get('config.database_password');

        $connection = mysqli_connect($database_host,$database_user,$database_password,$database_name);

        if (mysqli_connect_errno()){
                return false;
            } else {
                return true;
            }

    } catch (Exception $e) {

        return false;

    }
}
}

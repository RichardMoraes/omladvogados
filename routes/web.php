<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'mainPage']);

Route::get('/queries', function() {
    $events = \App\Models\Event::all(); //select * from events
    $events = \App\Models\Event::all(['title', 'description']); //select title, description from events
    $event = \App\Models\Event::where('id', 1)->first(); //select * from where id = 1
    $event = \App\Models\Event::find(1); //select * from where id = 1
    return $event;
});

Route::get('hello-world', [App\Http\Controllers\HelloWorldController::class, 'helloWorld']);

Route::get('/hello/{name?}', [App\Http\Controllers\HelloWorldController::class, 'hello']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

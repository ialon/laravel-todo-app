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

Route::get('/', function () {
    return view('index', [
        'name' => 'John Doe',
    ]);
});

Route::get('/hello', function() {
    return 'Hello World';
})->name('hello');

Route::get('/hallo', function() {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function($name) {
    return 'Hello ' . $name;
});

Route::fallback(function() {
    return '404 Not Found';
});

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
    $name = 'emilio';
    $surname = 'federico';


    return view('home', compact('name', 'surname'));
})->name('home');

Route::get('/info', function () {
    $colors = [
        'red',
        'blue',
        'yellow',
        'green'
    ];

    return view('info', compact('colors'));

})->name('info');
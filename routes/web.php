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
    // Creo delle variabili da richiamare
    $message = "Hello World!";
    return view('home', compact("message"));
    // B.P_Nomino la rotta
})->name("homepage");

Route::get('/home', function () {
    // Creo delle variabili da richiamare
    $message = "Hello World!";
    return view('home', compact("message"));
    // B.P_Nomino la rotta
});
Route::get('/about_us', function () {
    return view('about_us');
    // B.P_Nomino la rotta
})->name("about_us");

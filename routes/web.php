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
    return view('welcome');
});

// The setting of the locale is handled in a the middleware: \App\Http\Middleware\SetLocale.php:20:9
Route::view('{locale}/validation', 'language-validation')->name('language-validation');

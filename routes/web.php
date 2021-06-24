<?php

use App\Http\Livewire\AlpineJsEventListener;
use App\Http\Livewire\AutocompleteForm;
use App\Http\Livewire\LanguageValidation;
use App\Http\Livewire\SimpleForm;
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

Route::view('/', 'welcome')->name('welcome');

// The setting of the locale is handled in a the middleware: \App\Http\Middleware\SetLocale.php:20:9
Route::get('{locale}/validation', LanguageValidation::class)->name('language-validation');

Route::get('simple-form', SimpleForm::class)->name('simple-form');

Route::get('alpine-js-event-listener', AlpineJsEventListener::class)->name('alpine-js-event-listener');

Route::get('autocomplete', AutocompleteForm::class)->name('autocomplete');

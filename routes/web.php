<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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
Route::get('/lang/{lang}', [LanguageController::class, 'lang']);
Route::group(['middleware' => 'lang'], function () {

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/our-team', function () {
    return view('team');
})->name('team');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/events', function () {
    return view('events');
})->name('offers');

});
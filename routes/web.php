<?php

use App\Http\Controllers\PostController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PostController::class, 'index']);

Route::get('/inspiration', function () {
    return view('resources', [
        'title' => 'inspiration',
        'heading' => "Ini tampilan inspiration!"
    ]);
});

Route::get('/today', function () {
    return view('resources', [
        'title' => 'today',
        'heading' => "Ini tampilan today!"
    ]);
});

Route::get('/search', function () {
    return view('resources', [
        'title' => 'search',
        'heading' => "Ini tampilan search!"
    ]);
});
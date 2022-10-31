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

Route::get("welcome", function () {
    return view('welcome');
});
Route::get("", function () {
    $data = [
        'activeMenu' => 0
    ];
    return view('home', $data);
});
Route::get("home", function () {
    $data = [
        'activeMenu' => 0
    ];
    return view('home', $data);
});
Route::get("about", function () {
    $data = [
        'activeMenu' => 1
    ];
    return view('about', $data);
});
Route::get("blog", [PostController::class, 'index']);
Route::get("blog/{post:slug}", [PostController::class, 'show']);

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get(uri: '/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!nova).*$');

Route::get('/token', function () {
    return csrf_token();
});
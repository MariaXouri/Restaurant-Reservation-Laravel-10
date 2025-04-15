<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurCuisineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LOGIN
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//REGISTER
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/menu', [MenuController::class, 'getMenu']);

Route::middleware('web')->group(function () {
    Auth::routes();
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/', [HomeController::class, 'getHome']);
    Route::get('/', [OurCuisineController::class, 'getOurCuisine']);
    Route::get('/First', [OurCuisineController::class, 'getOurCuisine'])->middleware('auth');
    Route::get('/menu', [MenuController::class, 'getMenu']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    //Route::get('/reservation', [ReservationController::class, 'getreservation'])->middleware('auth');1
    Route::get('/reservation', [ReservationController::class, 'getreserved'])->middleware('auth');
    Route::post('/reservation', [ReservationController::class, 'reservationstore'])->middleware('auth');
    //});
    Route::post('/email', [EmailController::class, 'emailstore']);
    Route::get('/reserved', [ReservationController::class, 'getreserved'])->middleware('auth');
    Route::middleware('auth')->group(function () {

        //Route::middleware(middleware: 'auth')->group(function () {
        // Route::group(['middleware' => ['role:user']], function () {

        //     Route::post('/email', [EmailController::class, 'emailstore']);

        // });

    });


});
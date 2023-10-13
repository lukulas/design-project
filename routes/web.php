<?php

use App\Helpers\Util;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\DashBoard\DashBoardController;
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

Route::domain(Util::removeHttp(env('APP_URL')))->group(function () {

    Route::get('/', function () {
        return redirect('home');
    })->middleware('auth')->name('home');

    Route::get('/login', [LoginController::class, 'login'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'onLogin'])
        ->name('login.verify');

    Route::group(["middleware" => "auth"], function (){
        Route::get('/home', [DashBoardController::class, 'home'])
            ->name('home');
    });
});

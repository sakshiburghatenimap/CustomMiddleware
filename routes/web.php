<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckAgeController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function(){

    Route::get('/', [CheckAgeController::class, 'index'])->name('index');

});

Route::middleware(['checkAge'])->group(function(){

    Route::post('/check-age', [CheckAgeController::class, 'checkAge'])->name('check.age');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});
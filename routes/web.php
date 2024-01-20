<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\exampleController;
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

//Route::view('/','welcome');

//route::get('example' , [ExampleController::class,'index']);
//route::get('example' , [exampleController::class,'store']);
//Route::resource('example','exampleController');
//Route::delete('/example', [exampleController::class, 'logout'])->name('logout');

//Route::get('login', 'login')->name('login');



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('login', [AuthController::class, 'loginView'])->name('auth.login.view');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

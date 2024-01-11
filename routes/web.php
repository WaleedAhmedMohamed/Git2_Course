<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WaleedController;
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

Route::view('/','welcome');

//route::get('example' , [ExampleController::class,'index']);
//route::get('example' , [exampleController::class,'store']);
Route::resource('example','exampleController');
Route::delete('/example', [exampleController::class, 'logout'])->name('logout');

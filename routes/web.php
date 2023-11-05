<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MulController;
use App\Http\Controllers\FactorialController;

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

Route::get('/', function () {
    return view('welcome');
 });

Route::get('/',[HomeController::class,'hello'])->name('hello');

Route::get('/mul',[MulController::class,'mul'])->name('mul');

Route::get('/factorial/{n}', [FactorialController::class, 'factorial'])->name('factorial');
    

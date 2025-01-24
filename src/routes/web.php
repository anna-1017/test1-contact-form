<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test1ContactController;

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

Route::get('/', [Test1ContactController::class, 'index']);
Route::post('/confirm',[Test1ContactController::class, 'confirm']);
Route::post('/thanks', [Test1ContactController::class, 'store']);

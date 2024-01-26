<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ApiController;

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

Route::get('/', [HomePageController::class, 'signin']);
Route::get('/master', [HomePageController::class, 'master']);
Route::get('/home', [HomePageController::class, 'home']);

/*API*/
Route::post('/admin/signin', [ApiController::class, 'admin_signin']);
Route::get('/admin/logout', [ApiController::class, 'admin_logout']);
Route::get('/admin/forgotpassword', [ApiController::class, 'forgot_password']);






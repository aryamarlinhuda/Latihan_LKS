<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LoginController;
Route::get('/home',[LoginController::class, 'index']);
Route::get('/home/login',[LoginController::class, 'login']);
Route::post('/home/login/procces',[LoginController::class, 'login_action']);

use App\Http\Controllers\BlogController;
Route::get('/blog',[BlogController::class, 'list']);
Route::get('/blog/create',[BlogController::class, 'create']);
Route::post('/blog/create/procces',[BlogController::class, 'create_procces']);
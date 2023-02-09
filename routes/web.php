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
Route::get('/about-us', function () {
    return view('beforelogin.about');
});
Route::get('/contact-us', function () {
    return view('beforelogin.contact');
});

use App\Http\Controllers\BlogController;
Route::group(['middleware' => ['userlogin']], function() {
    Route::get('/dashboard/home', [LoginController::class, 'dashboard']);
    Route::get('/home/logout',[LoginController::class, 'logout']);
    Route::get('/blog',[BlogController::class, 'list']);
    Route::get('/blog/create',[BlogController::class, 'create']);
    Route::post('/blog/create/procces',[BlogController::class, 'create_procces']);
    Route::get('/blog/{id}/edit',[BlogController::class, 'edit']);
    Route::post('/blog/{id}/edit/procces',[BlogController::class, 'edit_procces']);
    Route::delete('/blog/{id}/delete',[BlogController::class, 'delete']);
    Route::get('/blog/detail/{slug}', [BlogController::class, 'detail']);
    Route::get('/dashboard/about-us', function () {
        return view('afterlogin.about');
    });
    Route::get('/dashboard/contact-us', function () {
        return view('afterlogin.contact');
    });    
});
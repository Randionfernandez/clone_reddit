<?php

use App\Http\Controllers\BorrarController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;
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
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('/privacy', function () {
        return "privacidad";
    });

    Route::get('/terms', function () {
        return 'terminos';

    });

    Route::get('/cookie', function () {
        return response('Cariño')->cookie('micookie','Volando');

    });
});


Route::get('/', function () {
    return view('index');
//    return redirect()->route();
});

Route::get('/perfiles', [PerfilController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuario/{user}', [UserController::class, 'show']);

Route::resource('posts', BorrarController::class);

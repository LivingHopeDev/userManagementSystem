<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::controller(UserController::class)->group(
    function () {
        Route::get('/user', 'getUser');
        Route::get('/user/create', 'createUser');
        Route::post('/user', 'storeUser');
        Route::get('/user/{id}', 'showUser');
        Route::get('/user/{id}/edit', 'editUsers');
        Route::patch('/user/{id}', 'updateUser');
        Route::delete('/user/{id}', 'deleteUser');
    }
);

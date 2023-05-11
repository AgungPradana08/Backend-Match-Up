<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SparringController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sparring', [SparringController::class, 'index']);
Route::get('/sparring/create', [SparringController::class, 'create']);
Route::post('/sparring/store', [SparringController::class, 'store']);
Route::get('/sparring/{id}/detail',[SparringController::class, 'detail']);
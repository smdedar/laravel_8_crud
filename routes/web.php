<?php

use App\Http\Controllers\crudController;
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

// Route::get('/', function () {
//
// });

Route::get('/', [crudController::class, 'index']);

Route::get('/add', [crudController::class, 'add']);
Route::post('/add', [crudController::class, 'store']);
Route::get('/edit/{id}', [crudController::class, 'edit']);
Route::post('/update/{id}', [crudController::class, 'update']);
Route::get('/delete/{id}', [crudController::class, 'delete']);

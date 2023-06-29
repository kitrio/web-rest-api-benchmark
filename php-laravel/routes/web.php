<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/hello', [Controller::class, 'hello']);
Route::get('/compute', [Controller::class, 'compute']);
Route::get('/countries', [Controller::class, 'countries']);
Route::get('/users', [Controller::class, 'users']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SortingController;

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
Route::get('/home', [SortingController::class, 'home'])->name('home');
Route::post('/store', [SortingController::class, 'store'])->name('store');
Route::post('/storedep', [SortingController::class, 'storedep'])->name('storedep');
Route::post('/storedes', [SortingController::class, 'storedes'])->name('storedes');
Route::get('/user', [SortingController::class, 'user'])->name('user');
Route::get('/designation', [SortingController::class, 'designation'])->name('designation');
Route::get('/department', [SortingController::class, 'department'])->name('department');
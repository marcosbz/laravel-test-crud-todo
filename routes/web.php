<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
    return view('start');
});
Route::get('todos/index', [TodoController::class, 'index'])->name('todos.index');
Route::get('todos/show/{id}', [TodoController::class, 'show'])->name('todos.show');
Route::post('todos/store', [TodoController::class, 'store'])->name('todos.store');

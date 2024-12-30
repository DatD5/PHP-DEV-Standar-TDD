<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;

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

// Sửa route này
Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])
    ->name('tasks.store')
    ->middleware('auth');
Route::get('/tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::get('/tasks/{task}', [TaskController::class, 'show'])
    ->name('tasks.show')
    ->middleware('auth');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])
    ->name('tasks.edit')
    ->middleware('auth');
Route::put('/tasks/{task}', [TaskController::class, 'update'])
    ->name('tasks.update')
    ->middleware('auth');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy')
    ->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

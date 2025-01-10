<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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


    

    // Hiển thị danh sách người dùng
    Route::get('/users', [UserController::class, 'index'])
        ->name('users.index')
        ->middleware('auth');
    
    // Hiển thị trang tạo người dùng
    Route::get('/users/create', [UserController::class, 'create'])
        ->name('users.create')
        ->middleware('auth');
    
    // Lưu người dùng mới
    Route::post('/users', [UserController::class, 'store'])
        ->name('users.store')
        ->middleware('auth');
    
    // Hiển thị chi tiết một người dùng
    Route::get('/users/{user}', [UserController::class, 'show'])
        ->name('users.show')
        ->middleware('auth');
    
    // Hiển thị trang chỉnh sửa người dùng
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])
        ->name('users.edit')
        ->middleware('auth');
    
    // Cập nhật thông tin người dùng
    Route::put('/users/{user}', [UserController::class, 'update'])
        ->name('users.update')
        ->middleware('auth');
    
    // Xóa người dùng
    Route::delete('/users/{user}', [UserController::class, 'destroy'])
        ->name('users.destroy')
        ->middleware('auth');
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

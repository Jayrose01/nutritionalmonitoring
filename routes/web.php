<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\StudentController;
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
    return view('layouts.master');
});


//ADMINISTRATOR
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
});

//TEACHER
Route::middleware('teacher')->prefix('teacher')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher-dashboard');
});

//PARENTS
Route::middleware('parents')->prefix('parents')->group(function () {
    Route::get('/', [ParentsController::class, 'index'])->name('parents-dashboard');
});

//PARENTS
Route::middleware('student')->prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student-dashboard');
});



Route::get('/redirect', fn () => view('login'))->middleware(['checkrole', 'auth']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

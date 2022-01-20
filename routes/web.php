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
    if (auth()->check()) {
        return redirect('/redirect');
    }else{
        return redirect('/login');
    }
});


//ADMINISTRATOR
Route::middleware('admin')->prefix('admin')->group(function () {
    
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/students', [AdminController::class, 'students'])->name('admin-students');
    Route::get('/teachers', [AdminController::class, 'teachers'])->name('admin-teachers');
    Route::get('/parents', [AdminController::class, 'parents'])->name('admin-parents');
    
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



// Route::get('/redirect', fn () => view('login'))->middleware(['checkrole', 'auth']);
Route::get('/redirect',function(){
    if(auth()->check()){
        switch (auth()->user()->user_type_id) {
            case '1':
                return redirect()->route('admin-dashboard');
                break;
            case '2':
                return redirect()->route('teacher-dashboard');
                break;
            case '3':
                return redirect()->route('parents-dashboard');
                break;
            case '4':
                return redirect()->route('student-dashboard');
                break;
            
          
        }
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
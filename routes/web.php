<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
<<<<<<< HEAD
    Route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
    Route::get('students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
    Route::post('students', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
    Route::get('students/{student}', [\App\Http\Controllers\StudentController::class, 'show'])->name('students.show');
    Route::get('students/{student}/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
    Route::put('students/{student}', [\App\Http\Controllers\StudentController::class, 'update'])->name('students.update');
    Route::delete('students/{student}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('students.destroy');
    
=======
    Route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
    Route::get('students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
>>>>>>> cfe9bdfae4e382c672f5586b076add904d6cb58b

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

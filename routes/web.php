<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('addStudent', [StudentController::class, 'create'])->name('addStudents');
    Route::post('storeStudent', [StudentController::class, 'store'])->name('storeStudents');
});


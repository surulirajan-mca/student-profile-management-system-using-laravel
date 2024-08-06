<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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

Route::get('/', [studentcontroller::class,'studentList']);

/* Student Routes Starts */
Route::get('create-student',[studentcontroller::class, 'createStudent'])->name('create-student');
Route::post('create-student',[studentcontroller::class, 'StoreStudentDetails']);
Route::get('student-list',[studentcontroller::class, 'studentList'])->name('student-list');
Route::get('edit-student/{student_id}',[studentcontroller::class, 'editStudent'])->name('edit-student');
Route::post('edit-student/{student_id}',[studentcontroller::class, 'UpdateStudentDetails'])->name('edit-student');
Route::get('delete-student/{student_id}',[studentcontroller::class, 'deleteStudent'])->name('delete-student');
/* Student Routes Ends */

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

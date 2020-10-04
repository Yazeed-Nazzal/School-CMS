<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

//class Routes
Route::prefix('/classes')->middleware('auth')->group(function () {
    Route::get('/',[\App\Http\Controllers\GradeController::class,'index'])->name('grades');
    Route::post('/',[\App\Http\Controllers\GradeController::class,'store']);
    Route::patch('/{grade}',[\App\Http\Controllers\GradeController::class,'update']);
    Route::delete('/{grade}/delete',[\App\Http\Controllers\GradeController::class,'destroy']);
    Route::get('/new',[\App\Http\Controllers\GradeController::class,'create']);
    Route::get('/{grade}',[\App\Http\Controllers\GradeController::class,'show']);
    Route::get('/{grade}/edit',[\App\Http\Controllers\GradeController::class,'edit']);

});

//Student Route
Route::prefix('/students')->middleware('auth')->group(function () {
    Route::get('/',[\App\Http\Controllers\StudentController::class,'index']);
    Route::post('/',[\App\Http\Controllers\StudentController::class,'store']);
    Route::get('/new',[\App\Http\Controllers\StudentController::class,'create']);
    Route::patch('/{student}',[\App\Http\Controllers\StudentController::class,'update']);
    Route::get('/{student}',[\App\Http\Controllers\StudentController::class,'show']);
    Route::get('/{student}/edit',[\App\Http\Controllers\StudentController::class,'edit']);
    Route::delete('/{student}/delete',[\App\Http\Controllers\StudentController::class,'destroy']);

});

//Teacher Route
Route::prefix('/teachers')->middleware('auth')->group(function () {
    Route::get('/',[\App\Http\Controllers\TeacherController::class,'index']);
    Route::post('/',[\App\Http\Controllers\TeacherController::class,'store']);
    Route::get('/new',[\App\Http\Controllers\TeacherController::class,'create']);
    Route::get('/{teacher}',[\App\Http\Controllers\TeacherController::class,'show']);
    Route::put('/{teacher}',[\App\Http\Controllers\TeacherController::class,'update']);
    Route::get('/{teacher}/edit',[\App\Http\Controllers\TeacherController::class,'edit']);
    Route::delete('/{teacher}/delete',[\App\Http\Controllers\TeacherController::class,'destroy']);

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

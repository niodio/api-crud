<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::group(['prefix' => 'api/'], function () {
    //     // create route get for api/students
    Route::get('students', [StudentController::class, 'index']);
    //     // create route get for api/students/{id}
    // Route::get('students/{id}', [StudentController::class, 'show'])->name('students.show');
    // //     // create route post for api/students
    // Route::post('students', [StudentController::class, 'store'])->name('students.store');
    // //     // create route put for api/students/{id}
    // Route::put('students/{id}', [StudentController::class, 'update'])->name('students.update');
});

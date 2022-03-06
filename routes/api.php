<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// import the StudentController class


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// create route group for api
Route::group(['prefix' => 'v1/'], function () {
    //     // create route get for api/students
    Route::get('students', [StudentController::class, 'index']);
    //     // create route get for api/students/{id}
    Route::get('students/{id}', [StudentController::class, 'show'])->name('students.show');
    // //     // create route post for api/students
    Route::post('students', [StudentController::class, 'store'])->name('students.store');
    // //     // create route put for api/students/{id}
    Route::put('students/{id}', [StudentController::class, 'update'])->name('students.update');
});

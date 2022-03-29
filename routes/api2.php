<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\BookBorrowController;
use App\Http\Controllers\BookReturnController;
use App\Http\Controllers\BookBorrowDetailsController;

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

//LOGIN REGISTER
Route::post('/Register', [UserController::class, 'register']);
Route::post('/Login', [UserController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function(){
    Route::get('/login_check',[UserController::class, 'getAuthenticatedUser']);
    
    Route::get('/Book',[BookController::class, 'show']);
    Route::get('/Book/{id}', [BookController::class, 'detail']);
    Route::post('/Book', [BookController::class, 'store']);
    Route::delete('/Book/{id}', [BookController::class, 'delete']);
    Route::put('/Book/{id}', [BookController::class, 'update']);
});

Route::get('/Students', [StudentsController::class, 'show']);
Route::get('/Students/{id}', [StudentsController::class, 'detail']);
Route::post('/Students', [StudentsController::class, 'store']);
Route::delete('/Students/{id}', [StudentsController::class, 'delete']);
Route::put('/Students/{id}', [StudentsController::class, 'update']);

Route::get('/Grade', [GradeController::class, 'show']);
Route::get('/Grade/{id}', [GradeController::class, 'detail']);
Route::post('/Grade', [GradeController::class, 'store']);
Route::delete('/Grade/{id}', [GradeController::class, 'delete']);
Route::put('/Grade/{id}', [GradeController::class, 'update']);

Route::get('/BookBorrow', [BookBorrowController::class, 'show']);
Route::get('/BookBorrow/{id}', [BookBorrowController::class, 'detail']);
Route::post('/BookBorrow', [BookBorrowController::class, 'store']);
Route::delete('/BookBorrow/{id}', [BookBorrowController::class, 'delete']);
Route::put('/BookBorrow/{id}', [BookBorrowController::class, 'update']);

Route::get('/BookReturn', [BookReturnController::class, 'show']);
Route::get('/BookReturn/{id}', [BookReturnController::class, 'detail']);
Route::post('/BookReturn', [BookReturnController::class, 'store']);
Route::delete('/BookReturn/{id}', [BookReturnController::class, 'delete']);
Route::put('/BookReturn/{id}', [BookReturnController::class, 'update']);

Route::get('/BookBorrowDetails', [BookBorrowDetailsController::class, 'show']);
Route::get('/BookBorrowDetails/{id}', [BookBorrowDetailsController::class, 'detail']);
Route::post('/BookBorrowDetails', [BookBorrowDetailsController::class, 'store']);
Route::delete('/BookBorrowDetails/{id}', [BookBorrowDetailsController::class, 'delete']);
Route::put('/BookBorrowDetails/{id}', [BookBorrowDetailsController::class, 'update']);
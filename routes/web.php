<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;

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
Route::get('/practices', [PracticeController::class, 'index']);
Route::get('/', function() {
    return view('practices.index');
});
Route::get('/', [PracticeController::class, 'index']);
Route::get('/practices/create', [PracticeController::class, 'create']);
Route::post('/practices', [PracticeController::class, 'store']);
Route::get('/practices/{practice}/edit', [PracticeController::class, 'edit']);
Route::put('/practices/{practice}', [PracticeController::class, 'update']);
Route::delete('/practices/{practice}', [PracticeController::class,'delete']);

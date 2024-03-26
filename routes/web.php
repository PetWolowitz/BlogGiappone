<?php

use App\Http\Controllers\publicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [publicController::class, 'home'])-> name('homepage');
Route::get('/class-10', [publicController::class,'student'])-> name('student');
Route::get('student/detail/{name}', [publicController::class, 'show'])-> name('student.detail');

Route::post('/contattaci', [publicController::class, 'submit'])-> name('contattaci.submit');
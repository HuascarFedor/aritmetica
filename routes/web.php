<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculosController;

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

Route::get('/factorial', function () {
    return view('factorial');
});

Route::post('calcularFactorial', [CalculosController::class, 'factorial'])->name('factorial');

Route::get('/suma', function () {
    return view('suma');
});

Route::post('calcularSuma', [CalculosController::class, 'suma'])->name('suma');
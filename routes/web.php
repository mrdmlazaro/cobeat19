<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TracingController;
use App\Http\Controllers\PDFController;

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
    return view('auth.login');
});

Route::resource('/tracing',TracingController::class);
Route::get('/home', [TracingController::class, 'home']);
Route::get('/line-chart', [TracingController::class, 'LineChart']);
Route::get('/bar-chart', [TracingController::class, 'barChart']);
Route::get('/pie-chart', [TracingController::class, 'pieChart']);
Route::get('/charts', [TracingController::class, 'chart']);
Route::get('preview', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

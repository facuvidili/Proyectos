<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FullCalendarController;
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
    return view('login');
});

Route::get('partes', function () {
    return view('partes');
});

Route::get('parteForm', function () {
    return view('parteForm');
});


Route::get('full-calender', [FullCalendarController::class, 'partes']);

Route::post('partes/action', [FullCalendarController::class, 'action']);

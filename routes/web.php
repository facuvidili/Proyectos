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

//SUPERVISOR
Route::get('login/partes', function () {
    return view('partes');
});

Route::get('login/partes/parteForm', function () {
    return view('parteForm');
});

Route::get('full-calender', [FullCalendarController::class, 'partes']);

Route::post('partes/action', [FullCalendarController::class, 'action']);

//ADMINISTRADOR
Route::get('login/users', function () {
    return view('users');
});
Route::get('login/cuads', function () {
    return view('cuads');
});
Route::get('login/cuads/edit', function () {
    return view('cuadEdit');
});
Route::get('login/users/edit', function () {
    return view('userEdit');
});
Route::get('login/users/nuevo', function () {
    return view('userNuevo');
});
//CONTADOR
Route::get('login/consol', function () {
    return view('consol');
});
Route::get('login/consol/nueva', function () {
    return view('consolNueva');
});
Route::get('login/consol/nueva/detalle', function () {
    return view('consolNuevaDetalle');
});
Route::get('login/consol/ver', function () {
    return view('consolVer');
});
Route::get('login/cuentas', function () {
    return view('cuentas');
});
Route::get('login/contrato', function () {
    return view('contratoNuevo');
});
Route::get('login/informe', function () {
    return view('informe');
});
Route::get('login/informe/nuevo', function () {
    return view('impInforme');
});
Route::get('login/cuentas/edit', function () {
    return view('cuentaEdit');
});
Route::get('login/cuentas/nueva', function () {
    return view('cuentaNueva');
});





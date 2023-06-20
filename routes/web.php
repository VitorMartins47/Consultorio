<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/consultasAgendadas', function () {
        return view('consultasAgendadas');
    })->name('consultasAgendadas');

    

    
});

Route::get('/home', function(){
    return view('consultorio/index');
});

Route::get('/main', function(){
    return view('layouts/main');
});

Route::get('/sobre', function(){
    return view('consultorio/sobre');
});


Route::get('/pacientes', function(){
    return view('consultorio/pacientes');
});

Route::get('/consulta', function(){
    return view('consultorio/consulta');
});
Route::post('/consulta', 'consultaController@processarform');

Route::get('/contato', function(){
    return view('consultorio/contato');
});


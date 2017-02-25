<?php

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

// Rotas Paciente
Route::get('/pacientes', 'PacienteController@index');
Route::get('/pacientes/cria', 'PacienteController@cria');
Route::get('/pacientes/edita/{paciente}', 'PacienteController@edita');
Route::post('/pacientes', 'PacienteController@armazena');
Route::patch('/pacientes/{paciente}', 'PacienteController@atualiza');

// Rotas Médico
Route::get('/medicos', 'MedicoController@index');
Route::get('/medicos/cria', 'MedicoController@cria');
Route::get('/medicos/edita/{medico}', 'MedicoController@edita');
Route::post('/medicos', 'MedicoController@armazena');
Route::patch('/medicos/{medico}', 'MedicoController@atualiza');

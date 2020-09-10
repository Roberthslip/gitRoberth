<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/registro', 'RegisterController@index');



Route::get('/jugadores', 'JugadorController@index');

Route::get('/estadisticas', 'EquipoController@index');

Route::get('/sedes', 'SedeController@index');

Route::get('/inicio', 'PosteoController@index');

Route::get('/perfil', 'ClienteController@index');


Route::get('/panelInicio', 'PanelController@index');


Route::get('/panel/verCliente', 'PanelClienteController@index');

Route::get('/panel/newCliente', 'PanelClienteController@index2');

Route::post('newCliente', ['as' => 'panel.newCliente', 'uses' => 'PanelClienteController@newCliente']);

Route::get('/panel/{id}/editCliente',['as' => 'panel.editCliente' , 'uses' => 'PanelClienteController@editCliente']);

Route::post('/panel/{id}/updateCliente',['as' => 'panel.updateCliente' , 'uses' => 'PanelClienteController@updateCliente']);

Route::get('/panel/{id}/destroyCliente', ['as' => 'panel.destroyCliente', 'uses' => 'PanelClienteController@destroyCliente']);


Route::get('/panel/verSede', 'PanelSedeController@index');

Route::get('/panel/newSede', 'PanelSedeController@index2');

Route::post('newSede', ['as' => 'panel.newSede', 'uses' => 'PanelSedeController@newSede']);

Route::get('/panel/{id}/editSede',['as' => 'panel.editSede' , 'uses' => 'PanelSedeController@editSede']);

Route::post('/panel/{id}/updateSede',['as' => 'panel.updateSede' , 'uses' => 'PanelSedeController@updateSede']);

Route::get('/panel/{id}/destroySede', ['as' => 'panel.destroySede', 'uses' => 'PanelSedeController@destroySede']);


Route::get('/panel/verTorneo', 'PanelTorneoController@index');

Route::get('/panel/newTorneo', 'PanelTorneoController@index2');

Route::post('newTorneo', ['as' => 'panel.newTorneo', 'uses' => 'PanelTorneoController@newTorneo']);

Route::get('/panel/{id}/editTorneo',['as' => 'panel.editTorneo' , 'uses' => 'PanelTorneoController@editTorneo']);

Route::post('/panel/{id}/updateTorneo',['as' => 'panel.updateTorneo' , 'uses' => 'PanelTorneoController@updateTorneo']);

Route::get('/panel/{id}/destroyTorneo', ['as' => 'panel.destroyTorneo', 'uses' => 'PanelTorneoController@destroyTorneo']);


Route::get('/panel/verEquipo', 'PanelEquipoController@index');

Route::get('/panel/newEquipo', 'PanelEquipoController@index2');

Route::post('newEquipo', ['as' => 'panel.newEquipo', 'uses' => 'PanelEquipoController@newEquipo']);

Route::get('/panel/{id}/editEquipo',['as' => 'panel.editEquipo' , 'uses' => 'PanelEquipoController@editEquipo']);

Route::post('/panel/{id}/updateEquipo',['as' => 'panel.updateEquipo' , 'uses' => 'PanelEquipoController@updateEquipo']);

Route::get('/panel/{id}/destroyEquipo', ['as' => 'panel.destroyEquipo', 'uses' => 'PanelEquipoController@destroyEquipo']);


/////////////INSERTAR JUGADORES//////////NUEVO////
Route::get('/panel/verJugador', 'PanelJugadoresController@index');

Route::get('/panel/newJugador', 'PanelJugadoresController@index2');



Route::post('newJugador', ['as' => 'panel.newJugador', 'uses' => 'PanelJugadoresController@newJugador']);

Route::get('/panel/{id}/editJugador',['as' => 'panel.editJugador' , 'uses' => 'PanelJugadoresController@editJugador']);

Route::post('/panel/{id}/updateJugador',['as' => 'panel.updateJugador' , 'uses' => 'PanelJugadoresController@updateJugador']);

Route::get('/panel/{id}/destroyJugador', ['as' => 'panel.destroyJugador', 'uses' => 'PanelJugadoresController@destroyJugador']);



//////////////////////////////CALENDARIO/////////////

Route::get('/panel/calendario', 'calendarioController@show');






//-----------------------------Clientes--------------------------------------

Route::group(['prefix' => 'clientes'],function (){
    Route::get('index', [
        'as' => 'clientes.index',
        'uses' => 'Cliente@index'
    ]);
    Route::get('create', [
        'as' => 'clientes.create',
        'uses' => 'Cliente@create'
    ]);

    Route::get('{cliente}/edit', [
        'as' => 'clientes.edit',
        'uses' => 'Cliente@edit'
    ]);

    Route::post('create', [
        'as' => 'clientes.store',
        'uses' => 'Cliente@store'
    ]);

    Route::patch('update', [
        'as' => 'clientes.update',
        'uses' => 'Cliente@update'
    ]);

    Route::delete('destroy', [
        'as' => 'clientes.destroy',
        'uses' => 'Cliente@destroy'
    ]);


});

//-----------------------------Jugadores--------------------------------------

Route::group(['prefix' => 'jugadores'],function (){
    Route::get('index', [
        'as' => 'jugadores.index',
        'uses' => 'Jugador@index'
    ]);
    Route::get('create', [
        'as' => 'jugadores.create',
        'uses' => 'Jugador@create'
    ]);

    Route::get('{jugador}/edit', [
        'as' => 'jugadores.edit',
        'uses' => 'Jugador@edit'
    ]);

    Route::post('create', [
        'as' => 'jugadores.store',
        'uses' => 'Jugador@store'
    ]);

    Route::patch('update', [
        'as' => 'usuarios.update',
        'uses' => 'Jugador@update'
    ]);

    Route::delete('destroy', [
        'as' => 'jugadores.destroy',
        'uses' => 'Jugador@destroy'
    ]);


});

//-----------------------------Sedes--------------------------------------

Route::group(['prefix' => 'sedes'],function (){
    Route::get('index', [
        'as' => 'sedes.index',
        'uses' => 'Sede@index'
    ]);
    Route::get('create', [
        'as' => 'sedes.create',
        'uses' => 'Sede@create'
    ]);

    Route::get('{sede}/edit', [
        'as' => 'sedes.edit',
        'uses' => 'Sede@edit'
    ]);

    Route::post('create', [
        'as' => 'sedes.store',
        'uses' => 'Sede@store'
    ]);

    Route::patch('update', [
        'as' => 'sedes.update',
        'uses' => 'Sede@update'
    ]);

    Route::delete('destroy', [
        'as' => 'sedes.destroy',
        'uses' => 'Sede@destroy'
    ]);


});

//-----------------------------Equipos--------------------------------------

Route::group(['prefix' => 'equipos'],function (){
    Route::get('index', [
        'as' => 'equipos.index',
        'uses' => 'Equipo@index'
    ]);
    Route::get('create', [
        'as' => 'equipos.create',
        'uses' => 'Equipo@create'
    ]);

    Route::get('{equipo}/edit', [
        'as' => 'equipos.edit',
        'uses' => 'Equipo@edit'
    ]);

    Route::post('create', [
        'as' => 'equipos.store',
        'uses' => 'Equipo@store'
    ]);

    Route::patch('update', [
        'as' => 'equipos.update',
        'uses' => 'Equipo@update'
    ]);

    Route::delete('destroy', [
        'as' => 'equipos.destroy',
        'uses' => 'Equipo@destroy'
    ]);


});
















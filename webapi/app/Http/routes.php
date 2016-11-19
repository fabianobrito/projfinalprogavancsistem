<?php

$router->get('/', ['before' => 'isLogged', 'uses' => 'HomeController@index']);

Route::group(['prefix' => 'api'], function()
{
	Route::resource('denuncias', 'DenunciasController');
	Route::resource('usuarios', 'UsuariosController');
	Route::resource('bairro', 'BairroController');
	Route::resource('comentarios', 'ComentariosController');
});
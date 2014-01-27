<?php

/**
 * LOGIN
 */
Route::get('login/{status?}', array('before' => 'guest', function($status = null){
	return View::make('login.login', array('status' => $status));
}));

Route::post('login', function(){
	$userdata = array(
		'email' => Input::get('email'),
		'password' => Input::get('password')
	);

	if( Auth::attempt($userdata) )
		return Redirect::to('/');
	else
		return Redirect::to('login/erro');
});

/**
 * LOGOUT
 */
Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('login');
});

/**
 * DASHBOARD
 */
Route::get('/', array(
	'before' => 'auth',
	'uses'   => 'DashboardController@dashboard'
));

/**
 * NOTÍCIAS
 */
/*Route::get('noticias', 'NoticiasController@noticias');
Route::get('noticias/adicionar', 'NoticiasController@adicionar');*/

/**
 * USUÁRIOS
 */
/*Route::get('usuarios', 'UsuariosController@usuariosView');
Route::get('usuarios/adicionar', 'UsuariosController@adicionarView');
Route::get('usuarios/editar/{id}', 'UsuariosController@actionEditar')->where('id', '[0-9]+');
Route::get('usuarios/excluir/{id}', 'UsuariosController@actionExcluir')->where('id', '[0-9]+');
Route::post('usuarios/adicionar', 'UsuariosController@actionAdicionar');*/
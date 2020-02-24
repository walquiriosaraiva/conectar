<?php

Auth::routes();
Route::get('/', 'PrincipalController@index');
Route::get('/create-doador', 'PrincipalController@createDoador')->name('principal.create-doador');
Route::post('/store-doador', 'PrincipalController@storeDoador')->name('principal.store-doador');

/*
Route::get('/teste', function () {
    return view('home');
});
*/

Route::group(['prefix' => 'admin'], function () {

    // Rota principal do administrador
    Route::get('/', 'AdministradorController@index')->name('admin');

    //Rotas de cadastro
    Route::group(['prefix' => 'cadastrar'], function () {
        Route::get('user', 'UserController@create')->name('user.create');
        Route::post('user', 'UserController@store')->name('user.store');
    });

    // Rotas de controle
    Route::group(['prefix' => 'controle'], function () {
        Route::get('user', 'UserController@show')->name('user.show');
        Route::post('user', 'UserController@show')->name('user.show');
    });

    // Rotas de Edição
    Route::group(['prefix' => 'editar'], function () {

        Route::get('/', 'AdministradorController@edit')->name('admin.edit');
        Route::post('/', 'AdministradorController@update')->name('admin.update');

        Route::get('user/{id}', 'UserController@edit')->name('user.edit');
        Route::post('user', 'UserController@update')->name('user.update');
    });

    // Rotas de Exclusão
    Route::group(['prefix' => 'deletar'], function () {
        Route::get('user/{id}', 'UserController@delete')->name('user.delete');
    });

});






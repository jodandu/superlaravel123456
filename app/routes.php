<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('primera/pagina',function(){
    return 'Primera';
});

Route::get('segunda/pagina', function(){
    return 'Segunda';
});

Route::get('/', function(){
    return 'Has llegado a la raiz de Super laravel';
});

/*Route::get('/libros', function(){
    return 'Indice de libros';
});*/

/*Route::get('/libros/{genero}', function($genero){
    return "Libros en la categoria de {$genero}. ";
});*/

//Quitando requisito de paremetro

Route::get('/libros/{genero?}', function($genero = null){
    if($genero == null) return 'Indice de libros';
    return "Libros en la categoria {$genero}";
});
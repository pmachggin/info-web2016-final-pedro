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
<<<<<<< HEAD
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/temporadas', 'TemporadasController@index')->name('temporadas.index')->middleware('auth');
Route::get('/temporadas/create', 'TemporadasController@create')->middleware('auth')->name('temporadas.create');
Route::get('/temporadas/{temporada}', 'TemporadasController@show')->middleware('auth')->name('temporadas.show');
Route::get('/temporadas/{temporada}/edit', 'TemporadasController@edit')->middleware('auth')->name('temporadas.edit');
Route::delete('/temporadas/{temporada}', 'TemporadasController@destroy')->middleware('auth')->name('temporadas.destroy');
Route::post('/temporadas/', 'TemporadasController@store')->middleware('auth')->name('temporadas.store');

Route::get('/horarios', 'HorariosController@index')->name('horarios.index')->middleware('auth');
Route::get('/temporadas/{temporada}/horarios/create', 'HorariosController@create')->middleware('auth')->name('horarios.create');
Route::get('/horarios/{horario}', 'HorariosController@show')->middleware('auth')->name('horarios.show');
Route::get('/horarios/{horario}/edit', 'HorariosController@edit')->middleware('auth')->name('horarios.edit');
Route::delete('/horarios/{horario}', 'HorariosController@destroy')->middleware('auth')->name('horarios.destroy');
Route::put('{temporada}/horarios/', 'HorariosController@store')->middleware('auth')->name('horarios.store');

Route::get('/viagems', 'ViagemsController@index')->name('viagems.index')->middleware('auth');
Route::get('horarios/{horario}/viagems/create/', 'ViagemsController@create')->middleware('auth')->name('viagems.create');
Route::get('/viagems/{viagem}', 'ViagemsController@show')->name('viagems.show');
Route::delete('/viagems/{viagem}', 'ViagemsController@destroy')->middleware('auth')->name('viagems.destroy');
Route::put('/viagems/{horario}', 'ViagemsController@store')->middleware('auth')->name('viagems.store');





=======
    // $pagina = "<h1>Olá Mundo Laravel!</h1>";
    // $pagina .= "<h2>Sei Lá!</h2>";
    // return $pagina;

    return view('template');
});

// Route::get('/artigos', function (){
//     // return '<h1>Artigos do Blog</h1>';

//     return view('artigos');
// });

// Route::get('/artigos/laravel', function (){
//     // $pagina = '<h1>Artigos do Blog</h1>';
//     // $pagina .= '<h2>Categoria: Laravel</h2>';
//     // return $pagina;

//     return view('artigos_laravel');
// });


Route::get('/artigos', 'ArtigosController@index');
Route::get('/artigos/laravel', 'ArtigosController@laravel');
>>>>>>> 90975466cfaddc518eea321c50c73d0867c98852

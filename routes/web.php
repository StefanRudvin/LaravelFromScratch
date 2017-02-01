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

Route::group(['middleware' => ['web']], function() {
	Route::get('/', 'PagesController@home');
	Route::get('about', 'PagesController@about');
	Route::get('cards', 'CardsController@index');
	Route::get('cards/{card}', 'CardsController@show');

	Route::post('cards/{card}/notes', 'NotesController@store');
	Route::get('notes/{note}/edit', 'NotesController@edit');
	Route::patch('notes/{note}', 'NotesController@update');


});




/*

Route::get('cards/create', 'CardsController@create');

Route::post('cards', 'CardsController@store');

Route::get('cards/1', 'CardsController@show');

Route::get('cards/1/edit', 'CardsController@edit');

Route::put/patch('cards/1', 'CardsController@update');

Route::delete('cards/1', 'CardsController@destroy');


*/
/*
Route::get('/', function () {
	$people = ['Taylor','Matt','Jeffrey'];

	#All the same
    #return view('welcome')->with('people', $people);
    #return view('welcome')->with(['people' => $people]);

    return view('welcome', compact('people'));
});

Route::get('/about', function () {
    return view('pages.about');
});
*/


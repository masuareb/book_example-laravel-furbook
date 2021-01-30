<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('cats');
});

/*Route::get('cats', ['uses' => 'CatController@index']);
Route::get('cats/create', ['uses' => 'CatController@create']);
Route::post('cats', ['uses' => 'CatController@store']);
Route::get('cats/{cat}', ['uses' => 'CatController@show']);
Route::get('cats/{cat}/edit', ['uses' => 'CatController@edit']);
Route::put('cats/{cat}', ['uses' => 'CatController@update']);
Route::delete('cats/{cat}', ['uses' => 'CatController@destroy']);*/
Route::resource('cats', 'CatController');

Route::get('cats/breeds/{name}', function($name) {
    $breed = Furbook\Breed::with('cats')
        ->whereName($name)
        ->first();
    return view('cats.index')
        ->with('breed', $breed)
        ->with('cats', $breed->cats);
});

Route::get('about', function() {
    return view('about')->with('number_of_cats', 9000);
});
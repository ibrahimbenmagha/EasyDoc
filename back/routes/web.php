<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| c
ontains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stagiare',
   'App\Http\Controllers\ControllerStagiare@getDataFromDB');


// URI, View, Array of data
Route::view('home', 'homePage', [
    'title' => 'Craftsman',
    'About' => 'Best website in the world'
]);

Route::get('page1', function () {
    echo 'je suis page 1';
})->name('r1');

Route::get('/page2', 'App\Http\Controllers\C1@test');

Route::get('/somme/{a}/{b}', 'App\Http\Controllers\CalculController@somme');

Route::get('/produit/{a}/{b}', 'App\Http\Controllers\CalculController@produit');

Route::get('/tp1', 'App\Http\Controllers\CalculController@afficher');
Route::get('crude', 'App\Http\Controllers\ControllerStagiare@crud');


//Route::get('{n}', function ($n) {
//    echo 'je suis page '. $n;
//})->name('r1');

Route::fallback(function(){
    echo "Page de la route " . Route::currentRouteName() . "n'exist pas";
});

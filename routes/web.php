<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/profile', 'UserController@profile')->name('profile');
Route::put('/profile', 'UserController@profileUpdateName')->name('profile.update.name');
Route::put('/profile/edit/email', 'UserController@profileUpdateEmail')->name('profile.update.email');
Route::put('/profile/edit/password', 'UserController@profileUpdateSenha')->name('profile.update.senha');


Route::get('/usuarios', 'UserController@usuarios')->name('usuarios');
Route::resource('/usuarios/editar', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/pecas', 'PecaController');

Route::resource('/pecas-apagadas', 'PecaApagadaController');

Route::resource('/categorias', 'CategoriaController');
Route::resource('/equipamentos', 'EquipamentoController');
Route::resource('/locais', 'LocalController');
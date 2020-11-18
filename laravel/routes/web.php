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

/** *Route::get('/', function () {
    return "Hola desde la pagina de inicio";
});

Route::get('contactos', function(){
    return "Seccion de contactos";
});
Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
    return "Saludos " . $nombre;
});*/
/** *Route::get('/', function(){
	$nombre = "Jorge";
    //return view('home',['nombre', $nombre]);
    //return view('home', compact('nombre'));
})->name('home');*/
Route::view('/','home', ['nombre' => 'Jorge'])->name('home');
Route::view('login', 'login')-> name('/laravel/server.php/login');
Route::get('/register', 'RegisterController@index')->name('register');
Route::view('/perfil', 'perfil')->name('perfil');

Route::post('register', 'RegistroController@store');
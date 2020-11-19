<?php

namespace App\Http\Controllers;

use App\User;
class RegistroController extends Controller
{
    public function store()
    {
    	//seccion de login
	// if(isset($_POST['btn-register'])){

	// 	$nombre = $_POST['nombre'];
	// 	$correo = $_POST['correo'];
	// 	$password = $_POST['password'];
	// 	$conf_pass = $_POST['conf_pass'];

	//require_once ('../../Modelo/validar_reg.php');

    	request()->validate([
    		'nombre' => 'required',
    		'correo' => 'required|email',
    		'password' => 'required',
    		'conf_pass' => 'required|min:3'
    	]);
        // $nombre = request('nombre');
        // $correo = request('correo');
        // $password = request('password');
        // $confi_pass = request('vonfi_pass');
        // return User::create([
        //     'nombre' => $nombre,
        //     'correo' => $correo,
        //     'password' => $password,
        // ]);
        return redirect('login')->with('registro', 'Registro exitoso');
    }
    public function create()
    {
        return view('register');
    }
}

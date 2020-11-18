<?php

namespace App\Http\Controllers;


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

    	return 'Datos validados';
    }
}

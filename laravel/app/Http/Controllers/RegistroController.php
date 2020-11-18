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

    	return request('correo');
    }
}

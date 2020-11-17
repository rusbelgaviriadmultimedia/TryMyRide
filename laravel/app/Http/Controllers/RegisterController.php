<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listar recursos
        $register = [
            ['title' => "Prueba TMR"],
        ];
        return view('register', compact('register'));
    }


}

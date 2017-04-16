<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function cadastrar(){
    	return view ('cadastrar');
	}
}
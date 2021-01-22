<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredenciaController extends Controller
{
	public function index()
    {
    	return view('crendenciales.index',[
            'credencial'=>Credencia::all()
        ]);
    }

    public function create()
    {
    	return view('crendenciales.create');
    }
}

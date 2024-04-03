<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input; #para que el usuario agregue imagenes
use DB;

class CalBasicaController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('herramientas.Calculadoras.Basica.index');
    }

    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
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

    public function indexA()
    {
        return view('herramientas.Calculadoras.Avanzada.index');
    }

    public function indexIVA()
    {
        return view('herramientas.Calculadoras.IVA.index');
    }

    public function indexPE()
    {
        return view('herramientas.Calculadoras.PE.index');
    }

}
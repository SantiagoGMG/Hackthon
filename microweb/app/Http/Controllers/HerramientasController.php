<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Importa la clase Request

class HerramientasController extends Controller
{
    // Métodos del controlador aquí
    
    public function index()
    {
        return view('herramientas.conjuntos-herramientas.index');
    }
    
    public function create()
    {
        // Lógica para mostrar el formulario de creación de herramientas
    }
    
    public function store(Request $request)
    {
        // Lógica para guardar una nueva herramienta en la base de datos
    }
    
    public function show($id)
    {
        // Lógica para mostrar los detalles de una herramienta específica
    }
    
    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición de una herramienta
    }
    
    public function update(Request $request, $id)
    {
        // Lógica para actualizar los datos de una herramienta en la base de datos
    }
    
    public function destroy($id)
    {
        // Lógica para eliminar una herramienta de la base de datos
    }
}

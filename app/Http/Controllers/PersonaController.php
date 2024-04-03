<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function index()
    {
        return view('personas.index');

    }
    public function create()
    {
        return view('personas.create');
    }
    public function store()
    {
        return "Aqui podremos ";
    }
    public function edit($persona)
    {
        return view('personas.edit',compact('persona'));
    }
    public function update($persona)
    {
        return "Aqui actualizaremos a la persona $persona ";
    }
    public function destroy($persona)
    {
        return "Eliminaremos a la persona $persona";
    }
    public function show($persona)
    {
        return view('personas.show',compact('persona'));
    }
    public function filtercategory($persona,$categoria)
    {
        return view('personas.filtercategory',compact('personas','filtercategory'));
    }
}

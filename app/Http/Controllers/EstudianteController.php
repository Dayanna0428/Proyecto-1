<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function create() {

        return view('formulario');

    }

    public function store(Request $request ){

       $producto = new  Estudiante();
       $producto->name=$request->name;
       $producto->apellido=$request->apellido;
       $producto->edad=$request->edad;
       $producto->estatura=$request->estatura;
       $producto->save();
       return $producto;


    }
}

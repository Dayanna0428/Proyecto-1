<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationsController extends Controller
{
    //
    public function create() {

        return view('formulario');

    }

    public function store(Request $request ){

       $producto = new  Qualification();
       $producto->nombredelestudiante=$request->nombredelestudiante;
       $producto->nota_1=$request->imput('nota_1');
       $producto->nota_2=$request->imput('nota_2');
       $producto->nota_2=$request->imput('nota_3');
       $producto->promedio=( $producto->nota_1 +  $producto->nota_2 +  $producto->nota_3) / 3;
       $producto->save();
       return $producto;


    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ExamenFinalBrandonAmperez;
use Illuminate\Http\Request;

class ExamenFinalBrandonAmperezController extends Controller
{


    public function index()
    {
        //pagina de inicio
        $datos = ExamenFinalBrandonAmperez::orderBy('apellido', 'desc')->paginate(5);
        return view('BrandonAmpérez', compact('datos'));
    }

    public function create()
    {
        //el formulario donde
        //nosotros agregamos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        {

            //sirve para guardar datos en la bd
            $personas = new ExamenFinalBrandonAmperez();
            $personas->apellido = $request->post('apellido');
            $personas->carnet = $request->post('carnet');
            $personas->nombre = $request->post('nombre');
            $personas->nota = $request->post('nota');
            $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
            $personas->save();


            return redirect()->route("personas.index")->with("success", "Agregado con éxito!");

        }
    }

    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $personas = ExamenFinalBrandonAmperez::find($id);
        return view("eliminar" , compact('personas'));
    }

    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario

        $personas = ExamenFinalBrandonAmperez::find($id);
        return view("actualizar" , compact('personas'));

    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $personas = ExamenFinalBrandonAmperez::find($id);
        $personas->apellido = $request->post('apellido');
        $personas->carnet = $request->post('carnet');
        $personas->nombre = $request->post('nombre');
        $personas->nota = $request->post('nota');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");

    }

    public function destroy($id)
    {
        $personas = ExamenFinalBrandonAmperez::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}

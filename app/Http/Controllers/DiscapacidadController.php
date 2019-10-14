<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\Discapacidad;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\DiscapacidadFormRequest;
use Alert;
use DB;

class DiscapacidadController extends Controller
{
    

	public function index(Request $request)
    {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $discapacidads=DB::table('discapacidad')->where('nombre','LIKE','%'.$query.'%')
                ->where ('estado','=','Activo')
                ->orderBy('iddiscapacidad','desc')
                ->paginate(7);
                return view('cursos.discapacidad.index',["discapacidads"=>$discapacidads,"searchText"=>$query]);
            }
    }



    public function create()
    {
        return view("cursos.discapacidad.create");
    }



    public function store(DiscapacidadFormRequest $request)
    {
        $discapacidad=new Discapacidad;
        $discapacidad->nombre=$request->get('nombre');
        $discapacidad->descripcion=$request->get('descripcion');
        $discapacidad->grado=$request->get('grado');
        $discapacidad->estado='Activo';
        $discapacidad->save(); //almacena los datos en el modelo


        return Redirect::to('cursos/discapacidad')->with('success', 'Discapacidad Creada Correctamente');
    }



    public function show($id)
    {
        return view("cursos.discapacidad.show",["discapacidad"=>Discapacidad::findOrfail($id)]);
    }



    public function edit($id)
    {
        return view("cursos.discapacidad.edit",["discapacidad"=>Discapacidad::findOrfail($id)]);
    }


    public function update(Request $request, $id)
    {
        $discapacidad=Discapacidad::findOrfail($id);
        $discapacidad->nombre=$request->get('nombre');
        $discapacidad->descripcion=$request->get('descripcion');
        $discapacidad->grado=$request->get('grado'); 
        $discapacidad->update();
        return Redirect::to('cursos/discapacidad')->with('success', 'Discapacidad Modificada Correctamente'); 
    }


    public function destroy($id)
    {
        $discapacidad=Discapacidad::findOrfail($id);
        $discapacidad->estado='Inactivo';
        $discapacidad->update();
        return Redirect::to('cursos/discapacidad');
    }



}

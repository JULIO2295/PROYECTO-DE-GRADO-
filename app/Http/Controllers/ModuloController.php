<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\Modulo;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\ModuloFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use DB;

class ModuloController extends Controller
{
    public function __construct()
    {
  
  
    }

    public function index(Request $request)
    {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $modulos=DB::table('modulo')->where('nombre','LIKE','%'.$query.'%')
                ->where ('estado','=','Activo')
                ->orderBy('idmodulo','desc')
                ->paginate(7);
                return view('modulos.modulos.index',["modulos"=>$modulos,"searchText"=>$query]);
            }

    }
     public function create()
    {
    return view("modulos.modulos.create");

    }

    public function store (ModuloFormRequest $request)
    {
    	$modulo=new Modulo;
    	$modulo->nombre=$request->get('nombre');
    	$modulo->nivel=$request->get('nivel');
    	$mytime = Carbon::now('America/Caracas');
    	$modulo->fecha_creacion=$mytime->toDateTimeString();
    	$modulo->descripcion=$request->get('descripcion');
    	$modulo->estado='Activo';
        $modulo->save(); //almacena los datos en el modelo
        return Redirect::to('modulos/modulos')->with('success','modelo Guardado');
;

    }

    public function show($id)
    {
    	return view("modulos.modulos.show",["modulo"=>Modulo::findOrfail($id)]);
    }
    public function edit($id)
    {
    
    	return view("modulos.modulos.edit",["modulo"=>Modulo::findOrfail($id)]);
    }
    public function update(ModuloFormRequest $request,$id)
    {
    	$modulo=Modulo::findOrfail($id);
    	$modulo->nombre=$request->get('nombre');
    	$modulo->nivel=$request->get('nivel');
    	$mytime = Carbon::now('America/Caracas');
    	$modulo->fecha_creacion=$mytime->toDateTimeString();
    	$modulo->descripcion=$request->get('descripcion');
    	$modulo->update();
    	return Redirect::to('modulos/modulos')->with('success', 'Modulo Modificado');
  	
    }

    public function destroy($id)
    {
    	$modulo=Modulo::findOrfail($id);
    	$modulo->estado='Inactivo';
    	$modulo->update();
    	return Redirect::to('modulos/modulos');
    }
}

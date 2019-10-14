<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\Contenido;
use sisEscuela\Modulo;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\ContenidoFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use DB;


class ContenidoController extends Controller
{
   
	 public function __construct()
    {
  
  
    }

    public function index(Request $request)
    {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $contenidos=DB::table('contenido as c')
                ->join('modulo as m','c.idmodulo','=','m.idmodulo')
                ->select('c.idcontenido','m.nombre as modulo','m.nivel as nivel','c.nombre','c.descripcion','c.fecha_creacion','c.estado')
                ->where('c.nombre','LIKE','%'.$query.'%')
                ->where ('c.estado','=','Activo')
                ->orderBy('c.idcontenido','desc')
                ->paginate(7);
                return view('modulos.contenido.index',["contenidos"=>$contenidos,"searchText"=>$query]);
            }

    }
     public function create()
    {
    	$modulos=DB::table('modulo')
        ->where('estado','=','Activo')
    	->get();
    return view("modulos.contenido.create",["modulos"=>$modulos]);

    }

    public function store (ContenidoFormRequest $request)
    {
    	$contenido=new Contenido;
    	$contenido->idmodulo=$request->get('idmodulo');
    	$contenido->nombre=$request->get('nombre');
    	$contenido->descripcion=$request->get('descripcion');
    	$mytime = Carbon::now('America/Caracas');
    	$contenido->fecha_creacion=$mytime->toDateTimeString();
    	$contenido->estado='Activo';
        $contenido->save(); //almacena los datos en el modelo
        return Redirect::to('modulos/contenido')->with('success','Contenido Guardado');
;

    }

    public function show($id)
    {
    	return view("modulos.contenido.show",["contenido"=>Contenido::findOrfail($id)]);
    }
    public function edit($id)
    {
        $modulos=DB::table('modulo')
        ->where('estado','=','Activo')
        ->get();
    
    	return view("modulos.contenido.edit",["contenido"=>Contenido::findOrfail($id),"modulos"=>$modulos]);
    }
    public function update(ContenidoFormRequest $request,$id)
    {
    	$contenido=Contenido::findOrfail($id);
    	$contenido->idmodulo=$request->get('idmodulo');
    	$contenido->nombre=$request->get('nombre');
    	$contenido->descripcion=$request->get('descripcion');
        $mytime = Carbon::now('America/Caracas');
    	$contenido->fecha_creacion=$mytime->toDateTimeString();
    	$contenido->update();
    	return Redirect::to('modulos/contenido')->with('success', 'Contenido Modificado');
  	
    }

    public function destroy($id)
    {
    	$contenido=Contenido::findOrfail($id);
    	$contenido->estado='Inactivo';
    	$contenido->update();
    	return Redirect::to('modulos/contenido');
    }



}

<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\Modulo;
use sisEscuela\Contenido;
use sisEscuela\Color;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\ModuloFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use DB;

class FrontController extends Controller
{
    public function __construct()
    {
  
  
    }


    public function mostrarModulos(Request $request)
    {
    	 if ($request)
            {
            	$con=0;
                $modulos=DB::table('modulo as m')
                ->join('color as c','m.idmodulo','=','c.idcolor')
                ->select('m.idmodulo','m.nombre','m.nivel','c.nombre as color')
                ->where ('m.estado','=','Activo')
                ->orderBy('m.idmodulo','desc')
                ->paginate(7);

                $colors=DB::table('color')
                ->orderBy('idcolor','desc')->get();
    	return view('layouts.scroll',["modulos"=>$modulos,"con"=>$con,"colors"=>$colors]);
    	    }

    }

    

    public function mostrarContenidos($id)
    {

    	    $modulos=DB::table('modulo as m')
                ->join('color as c','m.idmodulo','=','c.idcolor')
                ->select('m.idmodulo','m.nombre','m.nivel','c.nombre as color')
                ->where ('m.estado','=','Activo')
                ->orderBy('m.idmodulo','desc')
                ->paginate(7);

    	$contenidos=Contenido::where('contenido.idmodulo','=', $id)
    	->join('modulo as m','contenido.idmodulo','=','m.idmodulo')
    	->select('contenido.idcontenido','contenido.nombre','contenido.fecha_creacion','m.nombre as modulo')
    	->where('contenido.estado','=','Activo')
    	->where('m.estado','=','Activo')
        ->orderBy('contenido.idcontenido','DESC')
        ->get();
     return view('layouts.contenidos',["contenidos"=>$contenidos,"modulos"=>$modulos]);
    }


    public function mostrarInformacion($id)
    {
     $contenido=Contenido::findOrfail($id);

         	    $modulos=DB::table('modulo as m')
                ->join('color as c','m.idmodulo','=','c.idcolor')
                ->select('m.idmodulo','m.nombre','m.nivel','c.nombre as color')
                ->where ('m.estado','=','Activo')
                ->orderBy('m.idmodulo','desc')
                ->paginate(7);

     return view('layouts.informacion',["contenido"=>$contenido,"modulos"=>$modulos]);
    }
}

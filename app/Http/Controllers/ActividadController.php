<?php

namespace sisEscuela\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use sisEscuela\Actividad;
use sisEscuela\Contenido;
use sisEscuela\Curso;
use sisEscuela\User;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\ActividadFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use DB;

class ActividadController extends Controller
{
    public function __construct()
    {
  
  
    }

    public function index(Request $request)
    {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $actividads=DB::table('actividad as a')
                ->join('contenido as c','a.idcontenido','=','c.idcontenido')
                ->select('a.idactividad','c.nombre as contenido','a.nombre','a.descripcion','a.fecha_creacion','a.estado')
                ->where('a.nombre','LIKE','%'.$query.'%')
                ->where ('a.estado','=','Activo')
                ->orderBy('a.idactividad','desc')
                ->paginate(7);
                return view('modulos.actividad.index',["actividads"=>$actividads,"searchText"=>$query]);
            }

    }
     public function create()
    {
    	$contenidos=DB::table('contenido')
        ->where('estado','=','Activo')
    	->get();

    	$cursos=DB::table('curso')
        ->where('estado','=','Activo')
    	->get();
    return view("modulos.actividad.create",["contenidos"=>$contenidos,'cursos'=>$cursos]);

    }

    public function store (ActividadFormRequest $request)
    {
    	$actividad=new Actividad;
    	$actividad->idcontenido=$request->get('idcontenido');
    	$actividad->idcurso=$request->get('idcurso');
    	$user = Auth::user()->id;
    	$actividad->iduser=$user;
    	$actividad->nombre=$request->get('nombre');
    	$actividad->descripcion=$request->get('descripcion');
    	$mytime = Carbon::now('America/Caracas');
    	$actividad->fecha_creacion=$mytime->toDateTimeString();
    	$actividad->estado='Activo';
        $actividad->save(); //almacena los datos en el modelo
        return Redirect::to('modulos/actividad')->with('success','Actividad Guardada');
;

    }

    public function show($id)
    {
    	return view("modulos.actividad.show",["actividad"=>Actividad::findOrfail($id)]);
    }
    public function edit($id)
    {
        $contenidos=DB::table('contenido')
        ->where('estado','=','Activo')
        ->get();

        $cursos=DB::table('curso')
        ->where('estado','=','Activo')
    	->get();
    
    	return view("modulos.actividad.edit",["actividad"=>Actividad::findOrfail($id),"contenidos"=>$contenidos,"cursos"=>$cursos]);
    }
    public function update(ActividadFormRequest $request,$id)
    {
    	$actividad=Contenido::findOrfail($id);
    	$actividad->idcontenido=$request->get('idcontenido');
    	$actividad->idcurso=$request->get('idcurso');
    	$user = Auth::user()->id;
    	$actividad->iduser=$user;
    	$actividad->nombre=$request->get('nombre');
    	$actividad->descripcion=$request->get('descripcion');
        $mytime = Carbon::now('America/Caracas');
    	$actividad->fecha_creacion=$mytime->toDateTimeString();
    	$actividad->update();
    	return Redirect::to('modulos/actividad')->with('success', 'Actividad Modificada');
  	
    }

    public function destroy($id)
    {
    	$actividad=Actividad::findOrfail($id);
    	$actividad->estado='Inactivo';
    	$actividad->update();
    	return Redirect::to('modulos/actividad');
    }

    public function calificar($id)
    {
    	
    	$c=0;

    	$actividad=Actividad::where('actividad.idactividad','=', $id)
    	->join('contenido as c','actividad.idcontenido','=','c.idcontenido')
    	->leftJoin('curso as cu','actividad.idcurso','=','cu.idcurso')
    	->leftJoin('persona as p','actividad.idcurso','=','p.idcurso')
    	->select('actividad.idactividad','actividad.nombre as actividad','c.nombre as contenido','cu.nombre as curso')
    	->where('actividad.estado','=','Activo')
    	->where('c.estado','=','Activo')
    	->where('cu.estado','=','Activo')
    	->first();

    	$actividads=Actividad::where('actividad.idactividad','=', $id)
    	->join('contenido as c','actividad.idcontenido','=','c.idcontenido')
    	->leftJoin('curso as cu','actividad.idcurso','=','cu.idcurso')
    	->leftJoin('persona as p','actividad.idcurso','=','p.idcurso')
    	->select('actividad.idactividad','actividad.nombre','c.nombre as contenido','cu.nombre as curso','p.idpersona',DB::raw('CONCAT(p.nombre, " " ,p.apellidos) AS estudiante'))
    	->where('actividad.estado','=','Activo')
    	->where('p.estado','=','Activo')
        ->orderBy('p.idpersona','ASC')
        ->get();
    	return view("modulos.actividad.calificacion",["actividad"=>$actividad,"actividads"=>$actividads,"c"=>$c]);
    }

}

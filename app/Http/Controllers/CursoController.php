<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\Curso;
use sisEscuela\User;
use sisEscuela\Rol;
use Illuminate\Support\Facades\Redirect;
use sisEscuela\Http\Requests\CursoFormRequest;
use Alert;
use DB;


class CursoController extends Controller
{
    
	public function __construct()
    {
  
  
    }

    public function index(Request $request)
    {
            if ($request)
            {
                $query=trim($request->get('searchText'));
                $cursos=DB::table('curso as c')
                ->join('users as u','c.idprofesor','=','u.id')
                ->select('c.idcurso','c.nombre',DB::raw('CONCAT(u.nombre, " " ,u.apellidos) AS profesor'),'c.descripcion','c.estado')
                ->where('c.nombre','LIKE','%'.$query.'%')
                ->where ('c.estado','=','Activo')
                ->orderBy('c.idcurso','desc')
                ->paginate(7);
                return view('cursos.curso.index',["cursos"=>$cursos,"searchText"=>$query]);
            }

    }

     public function create()
    {

    	$profesors=DB::table('users as u')
    	->join('rol as r','u.idrol','=','r.idrol')
    	->select('u.id','u.nombre','u.apellidos')
        ->where('u.estado','=','Activo')
    	->where('r.nombre','=','Profesor')
    	->get();
    return view("cursos.curso.create",["profesors"=>$profesors]);

    }

    public function store(CursoFormRequest $request)
    {
    	$curso=new Curso;
    	$curso->idprofesor=$request->get('idprofesor');
    	$curso->nombre=$request->get('nombre');
    	$curso->descripcion=$request->get('descripcion');
    	$curso->estado='Activo';
        $curso->save(); //almacena los datos en el modelo
        return Redirect::to('cursos/curso')->with('success','Curso Guardado');


    }


    public function show($id)
    {
    	return view("cursos.curso.show",["curso"=>Curso::findOrfail($id)]);
    }


    public function edit($id)
    {
        $profesors=DB::table('users as u')
        ->join('rol as r','u.idrol','=','r.idrol')
        ->select('u.id','u.nombre','u.apellidos')
        ->where('u.estado','=','Activo')
        ->where('r.nombre','=','Profesor')
        ->get();
    
    	return view("cursos.curso.edit",["curso"=>Curso::findOrfail($id),"profesors"=>$profesors]);
    }

    public function update(Request $request,$id)
    {
    	$curso=Curso::findOrfail($id);
    	$curso->idprofesor=$request->get('idprofesor');
    	$curso->nombre=$request->get('nombre');
    	$curso->descripcion=$request->get('descripcion'); 
    	$curso->update();
    	return Redirect::to('cursos/curso')->with('success', 'Rol Modificado');
  	
    }

    public function destroy($id)
    {
    	$curso=Curso::findOrfail($id);
    	$curso->estado='Inactivo';
    	$curso->update();
    	return Redirect::to('cursos/curso');
    }


    public function generar_pdf()
    {        

        $roles=DB::table('rol')
                ->where ('estado','=','Activo')
                ->get();
        $pdf = PDF::loadView('seguridad.rol.pdf', compact('roles'));
        return $pdf->download('Listado-Roles.pdf');

    }


    public function generar_excel()
    {
 
        return Excel::download(new CategoriasExport, 'categorias.xlsx');

    }




}

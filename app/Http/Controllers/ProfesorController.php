<?php

namespace sisEscuela\Http\Controllers;

use Illuminate\Http\Request;
use sisEscuela\User;
use sisEscuela\Rol;
use sisEscuela\Curso;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisEscuela\Http\Requests\UserFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Alert;
//use Illuminate\Http\Requests\UsuarioFormRequest;
use DB;

class ProfesorController extends Controller
{

	public function __construct()
    {
    	

	}

	public function index(Request $request)
    {
		if ($request)
            {
   
            	$query=trim($request->get('searchText'));
            	$usuarios=DB::table('users as u')
            	->join('rol as r','u.idrol','=','r.idrol')
            	->join('curso as c','u.id','=','c.idprofesor')
            	->select('u.id','r.nombre as rol','u.username','u.nombre','u.apellidos','u.ci','u.direccion','u.telefono','u.genero','u.imagen','u.telefono','u.email','c.nombre as curso')
            	->where('r.nombre','=','Profesor')
            	->where('u.nombre','LIKE','%'.$query.'%')
            	->where('u.apellidos','LIKE','%'.$query.'%')
            	->orwhere('u.id','LIKE','%'.$query.'%')
            	->orderBy('u.id','desc')
            	->paginate(7);
            	return view('cursos.profesor.index',["usuarios"=>$usuarios,"searchText"=>$query]);

            }
	}


    public function perfil($id)
	{
		$usuario=User::findOrfail($id);
		return view("cursos.profesor.perfil",["usuario"=>$usuario]);

	}
    
}
